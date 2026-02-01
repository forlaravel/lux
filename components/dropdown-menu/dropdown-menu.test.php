<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders root with lux-dropdown-menu class', function () {
    $html = Blade::render('<x-dropdown-menu></x-dropdown-menu>');
    expect($html)->toContain('lux-dropdown-menu');
});

it('renders content with role menu', function () {
    $html = Blade::render('<x-dropdown-menu><x-dropdown-menu.content></x-dropdown-menu.content></x-dropdown-menu>');
    expect($html)->toContain('role="menu"');
});

it('renders content with lux-dropdown-menu-content class', function () {
    $html = Blade::render('<x-dropdown-menu><x-dropdown-menu.content></x-dropdown-menu.content></x-dropdown-menu>');
    expect($html)->toContain('lux-dropdown-menu-content');
});

it('renders content with keyboard navigation handlers', function () {
    $html = Blade::render('<x-dropdown-menu><x-dropdown-menu.content></x-dropdown-menu.content></x-dropdown-menu>');
    expect($html)->toContain('@keydown.up.prevent');
    expect($html)->toContain('@keydown.down.prevent');
});
