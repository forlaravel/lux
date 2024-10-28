<?php

namespace Lux;

use Illuminate\View\ComponentAttributeBag;
use Illuminate\Support\Facades\Blade;
use TailwindMerge\TailwindMerge;
use Illuminate\Support\ServiceProvider;

class Lux
{
    public function componentPath($component = '')  
    {
        return config('lux.subdir', '') . ($component ? '.' . $component : '');
    }
    
    public function boot(ServiceProvider $provider)
    {
        $this->bootBladeDirectives();
        $this->bootComponentAttributeBagMacros();
    }

    public function bootBladeDirectives()
    {
        Blade::directive('mergeAttributes', function ($expression) {
            return "<?php echo \$attributes->mergeAttributesStart(); ?>";
        });

        Blade::directive('endMergeAttributes', function ($expression) {
            return "<?php echo \$attributes->mergeAttributesEnd(); ?>";
        });

        Blade::directive('wireOr', function ($expression) {
            $persist = preg_match('/handlePersist\s*:\s*true/', $expression);
            $expression = preg_replace('/,\s*handlePersist.*/', '', $expression);

            $handlePersist = $persist ? '->handlePersist()' : '';

            // parse the $expression
            $result = "<?php echo app('lux')->wireOr(\$__data['attributes'], $expression)$handlePersist ?>";
      
            return $result;
        });
    }

    public function bootComponentAttributeBagMacros() {
        ComponentAttributeBag::macro('mergeTailwindAware', function (...$args) {
            $tw = TailwindMerge::factory()
                ->withCache(app('cache')->store())
                ->make();

            $mergedAttributes = $this->merge(...$args);
            $mergedAttributes['class'] = $tw->merge($mergedAttributes->get('class'));

            return $mergedAttributes;
        });
        ComponentAttributeBag::macro('mergeAttributesStart', function () {
            ob_start();
            return $this;
        });
        ComponentAttributeBag::macro('mergeAttributesEnd', function () {
            $buffer = ob_get_clean();

            return cache()->rememberForever('tailwind-aware-attributes-' . md5($buffer), function () use ($buffer) {
                $buffer = html_entity_decode($buffer);

                $attributes = [];
                preg_match_all('/([:a-zA-Z0-9-@\.]+)(?:="([^"]*)")?/', $buffer, $matches);

                foreach ($matches[1] as $index => $key) {
                    $attributes[$key] = $matches[2][$index];
                }

                return (string) $this->mergeTailwindAware($attributes);
            });
        });
        ComponentAttributeBag::macro('getWithModifiers', function ($tag) {
            $tags = $this->whereStartsWith($tag)->getAttributes();
            $firstKey = array_key_first($tags);
            
            if ($firstKey) {
                $firstValue = $tags[$firstKey];
                $modifiers = str($firstKey)
                    ->explode('.')
                    ->skip(1)
                    ->mapWithKeys(fn ($item) => [$item => true])
                    ->toArray();

                return new class ($firstValue, $modifiers) {
                    public function __construct(public $value, public $modifiers) {}

                    public function __get($name)
                    {
                        return $this->modifiers[$name] ?? null;
                    }

                    public function getModifiersString()
                    {
                        return collect($this->modifiers)->keys()->join('.');
                    }
                };
            }
            
            return null;
        });
    }

    public function wireOr(ComponentAttributeBag $attributes, $fallback = null, $tag = 'wire:model')
    {
        return new class ($attributes, $fallback, $tag) {
            public $string = '';
            
            public function __construct(public $attributes, public $fallback, public $tag) {
                $this->handleWireModel();
            }

            public function handleWireModel()
            {
                $wireModel = $this->attributes->getWithModifiers($this->tag);
        
                if ($wireModel) {
                    $this->string = "\$wire.entangle('$wireModel->value')";

                    // $this->string .= $wireModel->modifiers ? '.' . $wireModel->getModifiersString() : '';
                    if ($wireModel->live) {
                        $this->string .= '.live';
                    }

                    if ($wireModel->defer) {
                        $this->string .= '.defer';
                    }

                } else {
                    $this->string = str(json_encode($this->fallback))->replace('"', "'");
                }
            }

            public function handlePersist() {
                $attr = $this->attributes;
                $persist = $attr->getWithModifiers('persist');

                $possibleName = collect([
                    $attr->get('id'), 
                    $attr->get('name'),
                    $attr->getWithModifiers('wire:model')?->value,
                ])->first(fn($x) => $x);

                if ($persist) {
                    $name = $persist->value === true ? $possibleName : $persist->value;
                    $storage = $persist->session ? 'sessionStorage' : 'localStorage';
                    
                    $this->string = "\$persist($this->string)";
                    $this->string .= ".using($storage)";
                    $this->string .= $name ? ".as('persist_$name')" : '';
                }

                return $this;
            }

            public function __toString()
            {
                return $this->string;
            }
        };
    }
}