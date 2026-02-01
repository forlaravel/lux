<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders root with role radiogroup', function () {
    $html = Blade::render('<x-radio-group></x-radio-group>');
    expect($html)->toContain('role="radiogroup"');
});

it('renders root with lux-radio-group class', function () {
    $html = Blade::render('<x-radio-group></x-radio-group>');
    expect($html)->toContain('lux-radio-group');
});

it('renders hidden input when name is set', function () {
    $html = Blade::render('<x-radio-group name="color"></x-radio-group>');
    expect($html)->toContain('type="hidden"');
    expect($html)->toContain('name="color"');
});

it('has arrow key handlers', function () {
    $html = Blade::render('<x-radio-group></x-radio-group>');
    expect($html)->toContain('@keydown.arrow-down.prevent');
    expect($html)->toContain('@keydown.arrow-up.prevent');
});

it('has x-modelable for selected', function () {
    $html = Blade::render('<x-radio-group></x-radio-group>');
    expect($html)->toContain('x-modelable="selected"');
});

it('renders item with role radio', function () {
    $html = Blade::render('<x-radio-group><x-radio-group.item value="a" /></x-radio-group>');
    expect($html)->toContain('role="radio"');
});

it('renders item as button', function () {
    $html = Blade::render('<x-radio-group><x-radio-group.item value="a" /></x-radio-group>');
    expect($html)->toContain('<button');
});

it('renders item with aria-checked binding', function () {
    $html = Blade::render('<x-radio-group><x-radio-group.item value="a" /></x-radio-group>');
    expect($html)->toContain(':aria-checked');
});

it('renders indicator svg with aria-hidden', function () {
    $html = Blade::render('<x-radio-group><x-radio-group.item value="a" /></x-radio-group>');
    expect($html)->toContain('aria-hidden="true"');
    expect($html)->toContain('lux-radio-group-indicator-dot');
});
