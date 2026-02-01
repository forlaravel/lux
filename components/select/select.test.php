<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders root with lux-select class', function () {
    $html = Blade::render('<x-select></x-select>');
    expect($html)->toContain('lux-select');
});

it('has x-modelable for selected', function () {
    $html = Blade::render('<x-select></x-select>');
    expect($html)->toContain('x-modelable="selected"');
});

it('renders trigger with role combobox', function () {
    $html = Blade::render('<x-select><x-select.trigger><x-select.value /></x-select.trigger></x-select>');
    expect($html)->toContain('role="combobox"');
});

it('renders trigger with aria-haspopup listbox', function () {
    $html = Blade::render('<x-select><x-select.trigger><x-select.value /></x-select.trigger></x-select>');
    expect($html)->toContain('aria-haspopup="listbox"');
});

it('renders trigger svg with aria-hidden', function () {
    $html = Blade::render('<x-select><x-select.trigger><x-select.value /></x-select.trigger></x-select>');
    expect($html)->toContain('aria-hidden="true"');
});

it('renders trigger with aria-label from placeholder', function () {
    $html = Blade::render('<x-select placeholder="Pick one"><x-select.trigger><x-select.value /></x-select.trigger></x-select>');
    expect($html)->toContain('aria-label="Pick one"');
});

it('renders content with role listbox', function () {
    $html = Blade::render('<x-select><x-select.content></x-select.content></x-select>');
    expect($html)->toContain('role="listbox"');
});

it('renders item with role option', function () {
    $html = Blade::render('<x-select><x-select.content><x-select.item value="a">A</x-select.item></x-select.content></x-select>');
    expect($html)->toContain('role="option"');
});

it('renders item with aria-disabled', function () {
    $html = Blade::render('<x-select><x-select.content><x-select.item value="a" :disabled="true">A</x-select.item></x-select.content></x-select>');
    expect($html)->toContain('aria-disabled="true"');
});
