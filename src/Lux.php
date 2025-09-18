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
        $this->bootTagStack();
        $this->bootBladeDirectives();
        $this->bootComponentAttributeBagMacros();
    }

    public function bootTagStack()
    {
        app()->singleton('lux.tag_stack', function () {
            return collect();
        });
    }

    public function bootBladeDirectives()
    {
        Blade::directive('wireOr', function ($expression) {
            $persist = preg_match('/handlePersist\s*:\s*true/', $expression);
            $expression = preg_replace('/,\s*handlePersist.*/', '', $expression);

            $handlePersist = $persist ? '->handlePersist()' : '';

            // parse the $expression
            $result = "<?php echo app('lux')->wireOr(\$__data['attributes'], $expression)$handlePersist ?>";

            return $result;
        });

        Blade::directive('open', function ($expression) {
            $expression = trim($expression, '()\'\"');
            return "<?php
                \$__tagName = isset(\$tag) ? \$tag : '$expression';
                \$__tagStack = app('lux.tag_stack');
                \$__tagStack->push(['name' => \$__tagName, 'attributes' => []]);
                ob_start();
            ?>";
        });

        Blade::directive('content', function () {
            return "<?php
                \$__tagStack = app('lux.tag_stack');
                \$__currentTag = \$__tagStack->last();
                \$__attributesBuffer = ob_get_clean();

                // Parse attributes from buffer
                \$__parsedAttributes = app('lux')->parseTagAttributes(\$__attributesBuffer);

                // Merge with existing attributes if available
                if (isset(\$attributes)) {
                    \$__mergedAttributes = \$attributes->mergeTailwindAware(\$__parsedAttributes);
                } else {
                    \$__mergedAttributes = new \Illuminate\View\ComponentAttributeBag(\$__parsedAttributes);
                }

                // Render opening tag with proper spacing
                \$__attributesString = (string) \$__mergedAttributes;
                if (\$__attributesString !== '') {
                    echo '<' . \$__currentTag['name'] . ' ' . \$__attributesString . '>';
                } else {
                    echo '<' . \$__currentTag['name'] . '>';
                }
            ?>";
        });

        Blade::directive('close', function () {
            return "<?php
                \$__tagStack = app('lux.tag_stack');
                \$__currentTag = \$__tagStack->pop();
                echo '</' . \$__currentTag['name'] . '>';
            ?>";
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

    public function parseTagAttributes($buffer)
    {
        $buffer = trim($buffer);

        // Cache the parsed attributes
        return cache()->rememberForever('tag-attributes-' . md5($buffer), function () use ($buffer) {
            $buffer = html_entity_decode($buffer);

            $attributes = [];

            // Enhanced regex to handle various attribute formats
            preg_match_all('/([:a-zA-Z0-9-@\.]+)(?:=(?:"([^"]*)"|\'([^\']*)\'|([^\s>]+)))?/s', $buffer, $matches, PREG_SET_ORDER);

            foreach ($matches as $match) {
                $key = $match[1];
                $value = $match[2] ?? $match[3] ?? $match[4] ?? true;

                // Handle class merging specially
                if ($key === 'class' && isset($attributes['class'])) {
                    $attributes['class'] .= ' ' . $value;
                } else {
                    $attributes[$key] = $value;
                }
            }

            return $attributes;
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