<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders with lux-tabs class', function () {
    $html = Blade::render('<x-tabs></x-tabs>');
    expect($html)->toContain('lux-tabs');
});

it('has x-data with activeTab', function () {
    $html = Blade::render('<x-tabs></x-tabs>');
    expect($html)->toContain('x-data');
    expect($html)->toContain('activeTab');
});

it('renders a div by default', function () {
    $html = Blade::render('<x-tabs></x-tabs>');
    expect($html)->toContain('<div');
});
