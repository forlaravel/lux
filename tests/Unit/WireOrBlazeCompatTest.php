<?php

use Illuminate\Support\Facades\Blade;

it('wireOr directive compiles without referencing $__data', function () {
    $compiled = Blade::compileString('<div x-data="@wireOr($open)"></div>');
    expect($compiled)->not->toContain('$__data');
    expect($compiled)->toContain('$attributes');
});

it('wireOr directive with handlePersist compiles without referencing $__data', function () {
    $compiled = Blade::compileString('<div x-data="@wireOr($open, handlePersist: true)"></div>');
    expect($compiled)->not->toContain('$__data');
    expect($compiled)->toContain('$attributes');
});
