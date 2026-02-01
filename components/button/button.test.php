<?php

use Illuminate\Support\Facades\Blade;

beforeEach(function () {
    $this->registerComponents();
});

it('renders a button tag by default', function () {
    $html = Blade::render('<x-button>Click</x-button>');
    expect($html)->toContain('<button');
    expect($html)->toContain('Click');
    expect($html)->toContain('</button>');
});

it('applies default variant class', function () {
    $html = Blade::render('<x-button>Click</x-button>');
    expect($html)->toContain('lux-button-variant-primary');
});

it('applies default size class', function () {
    $html = Blade::render('<x-button>Click</x-button>');
    expect($html)->toContain('lux-button-size-md');
});

it('applies custom variant', function () {
    $html = Blade::render('<x-button variant="destructive">Delete</x-button>');
    expect($html)->toContain('lux-button-variant-destructive');
});

it('applies custom size', function () {
    $html = Blade::render('<x-button size="lg">Big</x-button>');
    expect($html)->toContain('lux-button-size-lg');
});

it('renders custom tag', function () {
    $html = Blade::render('<x-button tag="a">Link</x-button>');
    expect($html)->toContain('<a');
    expect($html)->toContain('</a>');
});

it('merges user classes', function () {
    $html = Blade::render('<x-button class="my-custom">Click</x-button>');
    expect($html)->toContain('my-custom');
    expect($html)->toContain('lux-button');
});
