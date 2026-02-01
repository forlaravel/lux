<?php

use Illuminate\View\ComponentAttributeBag;
use Lux\Lux;

it('returns false as fallback for bool', function () {
    $attributes = new ComponentAttributeBag([]);
    $result = app(Lux::class)->wireOr($attributes, false);
    expect((string) $result)->toBe('false');
});

it('returns true as fallback for bool', function () {
    $attributes = new ComponentAttributeBag([]);
    $result = app(Lux::class)->wireOr($attributes, true);
    expect((string) $result)->toBe('true');
});

it('returns string fallback wrapped in single quotes', function () {
    $attributes = new ComponentAttributeBag([]);
    $result = app(Lux::class)->wireOr($attributes, 'hello');
    expect((string) $result)->toBe("'hello'");
});

it('returns null as fallback', function () {
    $attributes = new ComponentAttributeBag([]);
    $result = app(Lux::class)->wireOr($attributes, null);
    expect((string) $result)->toBe('null');
});

it('returns array as fallback', function () {
    $attributes = new ComponentAttributeBag([]);
    $result = app(Lux::class)->wireOr($attributes, []);
    expect((string) $result)->toBe('[]');
});

it('returns $wire.entangle when wire:model is present', function () {
    $attributes = new ComponentAttributeBag(['wire:model' => 'name']);
    $result = app(Lux::class)->wireOr($attributes, false);
    expect((string) $result)->toBe("\$wire.entangle('name')");
});

it('appends .live modifier when wire:model.live', function () {
    $attributes = new ComponentAttributeBag(['wire:model.live' => 'name']);
    $result = app(Lux::class)->wireOr($attributes, false);
    expect((string) $result)->toBe("\$wire.entangle('name').live");
});

it('appends .defer modifier when wire:model.defer', function () {
    $attributes = new ComponentAttributeBag(['wire:model.defer' => 'name']);
    $result = app(Lux::class)->wireOr($attributes, false);
    expect((string) $result)->toBe("\$wire.entangle('name').defer");
});
