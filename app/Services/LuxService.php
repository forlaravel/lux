<?php

namespace App\Services;

use TailwindMerge\TailwindMerge;

/**
 * WARNING DO NOT CHANGE: This files gets overwritten on every lux:publish
 * 
 * @package App\Services
 */
class LuxService
{
    public array $context = [];
    public array $classList = [];
    
    public function __construct()
    {
    }

    public function newContext(array $context) {
        $this->context = $context;

        return $this;
    }

    public function addClass(...$classList) {
        $this->classList = array_merge($this->classList, $classList);

        return $this;
    }

    public function addProperty($property, $classList, $default = 'default') {
        $key = $this->context[$property] ?? $default;

        $this->classList[] = $classList[$key] ?? $classList[$default];

        return $this;
    }

    public function toClassString(...$classList) {
        $this->addclass(...$classList);
    
        return join(' ', $this->classList);
    }

    public function __toString() {
        return $this->toClassString();
    }
}