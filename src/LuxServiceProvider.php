<?php
/* 
 * 
 * @package Lux
 */
namespace Lux;

use Lux\Lux;
use Illuminate\Support\ServiceProvider;

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
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }

        app('lux')->boot($this);
    }

    /**
     * Register any package services
     *
     * @return void
     */
    public function register(): void
    {
        defined('Lux\LUX_DIR') || define('Lux\LUX_DIR', realpath(__DIR__.'/../'));

        $this->app->singleton(Lux::class, Lux::class);
        $this->app->alias(Lux::class, 'lux');

        $this->mergeConfigFrom(LUX_DIR . '/config/lux.php', 'lux');
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

        $this->commands([
            Console\PublishCommand::class,
        ]);
    }
}
