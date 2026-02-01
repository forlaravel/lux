<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders an input tag', function () {
    $html = Blade::render('<x-input />');
    expect($html)->toContain('<input');
});

it('defaults to type text', function () {
    $html = Blade::render('<x-input />');
    expect($html)->toContain('type="text"');
});

it('applies default size class', function () {
    $html = Blade::render('<x-input />');
    expect($html)->toContain('lux-input-size-md');
});

it('has autocomplete off', function () {
    $html = Blade::render('<x-input />');
    expect($html)->toContain('autocomplete="off"');
});

it('is self-closing (no closing input tag)', function () {
    $html = Blade::render('<x-input />');
    expect($html)->not->toContain('</input>');
});

it('applies custom size', function () {
    $html = Blade::render('<x-input size="lg" />');
    expect($html)->toContain('lux-input-size-lg');
});
