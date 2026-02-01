<?php

namespace Lux\Tests;

use Lux\LuxServiceProvider;
use Livewire\Blaze\BlazeServiceProvider;
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
}
