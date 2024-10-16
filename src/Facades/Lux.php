<?php

namespace Lux\Facades;

use Illuminate\Support\Facades\Facade;

class Lux extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'lux';
    }
}
