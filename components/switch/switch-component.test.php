<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders role switch', function () {
    $html = Blade::render('<x-switch />');
    expect($html)->toContain('role="switch"');
});

it('applies default size class', function () {
    $html = Blade::render('<x-switch />');
    expect($html)->toContain('lux-switch-size-md');
});

it('has aria-checked binding', function () {
    $html = Blade::render('<x-switch />');
    expect($html)->toContain(':aria-checked');
});

it('has thumb element', function () {
    $html = Blade::render('<x-switch />');
    expect($html)->toContain('lux-switch-thumb');
});

it('renders hidden input when name is set', function () {
    $html = Blade::render('<x-switch name="toggle" />');
    expect($html)->toContain('type="checkbox"');
    expect($html)->toContain('name="toggle"');
});

it('does not render hidden input without name', function () {
    $html = Blade::render('<x-switch />');
    expect($html)->not->toContain('type="checkbox"');
});
