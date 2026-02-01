<?php

use Illuminate\View\ComponentAttributeBag;

it('returns null when attribute is missing', function () {
    $bag = new ComponentAttributeBag([]);
    expect($bag->getWithModifiers('wire:model'))->toBeNull();
});

it('extracts value and modifiers', function () {
    $bag = new ComponentAttributeBag(['wire:model.live.defer' => 'name']);
    $result = $bag->getWithModifiers('wire:model');

    expect($result->value)->toBe('name');
    expect($result->modifiers)->toBe(['live' => true, 'defer' => true]);
});

it('allows modifier access via __get', function () {
    $bag = new ComponentAttributeBag(['wire:model.live' => 'name']);
    $result = $bag->getWithModifiers('wire:model');

    expect($result->live)->toBeTrue();
    expect($result->defer)->toBeNull();
});

it('returns modifiers string', function () {
    $bag = new ComponentAttributeBag(['wire:model.live.defer' => 'name']);
    $result = $bag->getWithModifiers('wire:model');

    expect($result->getModifiersString())->toBe('live.defer');
});

it('handles attribute with no modifiers', function () {
    $bag = new ComponentAttributeBag(['wire:model' => 'name']);
    $result = $bag->getWithModifiers('wire:model');

    expect($result->value)->toBe('name');
    expect($result->modifiers)->toBe([]);
    expect($result->getModifiersString())->toBe('');
});
