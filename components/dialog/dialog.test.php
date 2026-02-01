<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders root with lux-dialog class', function () {
    $html = Blade::render('<x-dialog></x-dialog>');
    expect($html)->toContain('lux-dialog');
});

it('has x-modelable for open', function () {
    $html = Blade::render('<x-dialog></x-dialog>');
    expect($html)->toContain('x-modelable="open"');
});

it('renders content with dialog tag', function () {
    $html = Blade::render('<x-dialog><x-dialog.content></x-dialog.content></x-dialog>');
    expect($html)->toContain('<dialog');
});

it('renders content with aria-labelledby binding', function () {
    $html = Blade::render('<x-dialog><x-dialog.content></x-dialog.content></x-dialog>');
    expect($html)->toContain(':aria-labelledby');
});

it('renders content with aria-describedby binding', function () {
    $html = Blade::render('<x-dialog><x-dialog.content></x-dialog.content></x-dialog>');
    expect($html)->toContain(':aria-describedby');
});

it('renders close button with aria-label Close', function () {
    $html = Blade::render('<x-dialog><x-dialog.content></x-dialog.content></x-dialog>');
    expect($html)->toContain('aria-label="Close"');
});

it('renders close button svg with aria-hidden', function () {
    $html = Blade::render('<x-dialog><x-dialog.content></x-dialog.content></x-dialog>');
    expect($html)->toContain('aria-hidden="true"');
});

it('renders sr-only text in close button', function () {
    $html = Blade::render('<x-dialog><x-dialog.content></x-dialog.content></x-dialog>');
    expect($html)->toContain('sr-only');
    expect($html)->toContain('Close');
});

it('hides close button when showCloseButton is false', function () {
    $html = Blade::render('<x-dialog><x-dialog.content :showCloseButton="false"></x-dialog.content></x-dialog>');
    expect($html)->not->toContain('aria-label="Close"');
});
