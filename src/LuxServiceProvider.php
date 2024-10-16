<?php
/* 
 * 
 * 
 * @package Lux
 */
namespace Lux;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\ComponentAttributeBag;
use TailwindMerge\TailwindMerge;

/**
 * @package Lux
 */
class LuxServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services
     *
     * @return void
     */
    public function boot(): void
    {
        require_once LUX_DIR . '/src/helpers.php';

        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'forlaravel');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'forlaravel');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        Blade::directive('mergeAttributes', function ($expression) {
            return "<?php echo \$attributes->mergeTailwindAwareScopeStart(); ?>";
        });

        Blade::directive('endMergeAttributes', function ($expression) {
            return "<?php echo \$attributes->mergeTailwindAwareScopeEnd(); ?>";
        });
    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register(): void
    {
        defined('Lux\LUX_DIR') || define('Lux\LUX_DIR', realpath(__DIR__.'/../'));

        $this->mergeConfigFrom(LUX_DIR . '/config/lux.php', 'lux');

        ComponentAttributeBag::macro('mergeTailwindAware', function (...$args) {
            $tw = TailwindMerge::factory()
                ->withCache(app('cache')->store())
                ->make();

            $mergedAttributes = $this->merge(...$args);
            $mergedAttributes['class'] = $tw->merge($mergedAttributes->get('class'));

            return $mergedAttributes;
        });
        ComponentAttributeBag::macro('mergeTailwindAwareScopeStart', function () {
            ob_start();
            return $this;
        });
        ComponentAttributeBag::macro('mergeTailwindAwareScopeEnd', function () {
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

        ComponentAttributeBag::macro('tryWireModelWithFallbackTo', function ($fallback = null, $tag = 'wire:model') {
            $tryWireModelWithFallbackTo = $this->whereStartsWith($tag);
            $modelProp = $tryWireModelWithFallbackTo->first();
            $isLive = $tryWireModelWithFallbackTo->filter(fn($value, $key) => str_contains($key, '.live'))->first();
            $isDefer = $tryWireModelWithFallbackTo->filter(fn($value, $key) => str_contains($key, '.defer'))->first();

            return $modelProp ? "\$wire.entangle('$modelProp')" . ($isLive ? '.live' : '') . ($isDefer ? '.defer' : '') : str_replace('"', "'", json_encode($fallback));
        });

        
    }

    /**
     * The services provided by the provider are few, but mighty
     *
     * @return array
     */
    public function provides()
    {
        return ['lux'];
    }

    /**
     * Console-specific booting, let the CLI rejoice
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // php artisan vendor:publish --tag=lux.config
        $this->publishes([
            LUX_DIR.'/config/lux.php' => config_path('lux.php'),
        ], 'lux.config');

        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/forlaravel'),
        ], 'lux.views');*/

        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/forlaravel'),
        ], 'lux.assets');*/

        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/forlaravel'),
        ], 'lux.lang');*/

        $this->commands([
            Console\PublishCommand::class,
        ]);
    }
}
