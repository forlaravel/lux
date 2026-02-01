<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders with lux-accordion class', function () {
    $html = Blade::render('<x-accordion></x-accordion>');
    expect($html)->toContain('lux-accordion');
});

it('has x-data', function () {
    $html = Blade::render('<x-accordion></x-accordion>');
    expect($html)->toContain('x-data');
});

it('renders a div by default', function () {
    $html = Blade::render('<x-accordion></x-accordion>');
    expect($html)->toContain('<div');
});
