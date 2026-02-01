<?php

use Lux\Lux;

it('parses key-value attributes', function () {
    $result = app(Lux::class)->parseTagAttributes('type="text" name="field"');
    expect($result)->toBe(['type' => 'text', 'name' => 'field']);
});

it('parses boolean attributes', function () {
    $result = app(Lux::class)->parseTagAttributes('required disabled');
    expect($result['required'])->toBeTrue();
    expect($result['disabled'])->toBeTrue();
});

it('merges multiple class attributes', function () {
    $result = app(Lux::class)->parseTagAttributes('class="foo" class="bar"');
    expect($result['class'])->toBe('foo bar');
});

it('parses colon-prefixed attributes', function () {
    $result = app(Lux::class)->parseTagAttributes(':aria-checked="checked"');
    expect($result[':aria-checked'])->toBe('checked');
});

it('parses dot-notation attributes', function () {
    $result = app(Lux::class)->parseTagAttributes('wire:model.live="name"');
    expect($result['wire:model.live'])->toBe('name');
});

it('decodes HTML entities', function () {
    $result = app(Lux::class)->parseTagAttributes('data-value="foo&amp;bar"');
    expect($result['data-value'])->toBe('foo&bar');
});
