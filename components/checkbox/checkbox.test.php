<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders role checkbox', function () {
    $html = Blade::render('<x-checkbox></x-checkbox>');
    expect($html)->toContain('role="checkbox"');
});

it('has the peer lux-checkbox class', function () {
    $html = Blade::render('<x-checkbox></x-checkbox>');
    expect($html)->toContain('peer');
    expect($html)->toContain('lux-checkbox');
});

it('has aria-checked binding', function () {
    $html = Blade::render('<x-checkbox></x-checkbox>');
    expect($html)->toContain(':aria-checked');
});

it('has x-modelable for checked', function () {
    $html = Blade::render('<x-checkbox></x-checkbox>');
    expect($html)->toContain('x-modelable="checked"');
});

it('renders hidden input when name is set', function () {
    $html = Blade::render('<x-checkbox name="agree" />');
    expect($html)->toContain('type="checkbox"');
    expect($html)->toContain('name="agree"');
});

it('does not render hidden input without name', function () {
    $html = Blade::render('<x-checkbox></x-checkbox>');
    expect($html)->not->toContain('type="checkbox"');
});

it('contains svg indicator', function () {
    $html = Blade::render('<x-checkbox></x-checkbox>');
    expect($html)->toContain('<svg');
    expect($html)->toContain('lux-checkbox-indicator');
});
