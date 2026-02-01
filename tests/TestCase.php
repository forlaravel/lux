<?php

namespace Lux\Tests;

use Lux\LuxServiceProvider;
use Livewire\Blaze\BlazeServiceProvider;
use Livewire\Blaze\Blaze;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            BlazeServiceProvider::class,
            LuxServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app): void
    {
        $app['config']->set('lux.subdir', '');
    }

    protected function setUp(): void
    {
        parent::setUp();

        // Disable Blaze preprocessing to avoid:
        // 1. FileEngine::getCompiler() errors in the view cache invalidation hook
        // 2. Component folding that inlines CSS instead of rendering HTML
        // The @blaze directive compiles to empty string (its registered fallback),
        // so components still render their HTML correctly without preprocessing.
        Blaze::disable();
    }

    protected function registerComponents(): void
    {
        $componentsPath = realpath(__DIR__ . '/../components');

        // Register the components directory as an anonymous component path.
        // This mirrors how components work when published to
        // resources/views/components/ in a Laravel project.
        // <x-button> resolves to components/button/index.blade.php
        // <x-select.content> resolves to components/select/content.blade.php
        $this->app['blade.compiler']->anonymousComponentPath($componentsPath);
    }
}
