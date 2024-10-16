<?php

namespace Lux;

use Illuminate\Filesystem\Filesystem;

if (! function_exists('\Lux\fs')) {
    /**
     * Prompt the user for text input.
     */
    function fs() {
        return new Filesystem;
    }
}