<?php

namespace App\Services;

/**
 * WARNING DO NOT CHANGE: This files gets overwritten on every lux:publish
 * 
 * @package App\Services
 */
class LuxService
{
    public function componentPath($component = '')  
    {
        return config('lux.subdir', '') . ($component ? '.' . $component : '');
    }
}