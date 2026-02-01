<?php

use Illuminate\View\ComponentAttributeBag;
use Lux\Lux;

it('wraps with $persist when persist attribute is set', function () {
    $attributes = new ComponentAttributeBag(['persist' => true]);
    $result = app(Lux::class)->wireOr($attributes, false)->handlePersist();
    expect((string) $result)->toContain('$persist(');
});

it('uses localStorage by default', function () {
    $attributes = new ComponentAttributeBag(['persist' => true, 'id' => 'my-id']);
    $result = app(Lux::class)->wireOr($attributes, false)->handlePersist();
    expect((string) $result)->toContain('.using(localStorage)');
});

it('uses sessionStorage when persist.session is set', function () {
    $attributes = new ComponentAttributeBag(['persist.session' => true, 'id' => 'my-id']);
    $result = app(Lux::class)->wireOr($attributes, false)->handlePersist();
    expect((string) $result)->toContain('.using(sessionStorage)');
});

it('resolves name from id attribute', function () {
    $attributes = new ComponentAttributeBag(['persist' => true, 'id' => 'my-id']);
    $result = app(Lux::class)->wireOr($attributes, false)->handlePersist();
    expect((string) $result)->toContain(".as('persist_my-id')");
});

it('resolves name from name attribute when no id', function () {
    $attributes = new ComponentAttributeBag(['persist' => true, 'name' => 'my-name']);
    $result = app(Lux::class)->wireOr($attributes, false)->handlePersist();
    expect((string) $result)->toContain(".as('persist_my-name')");
});

it('resolves name from wire:model when no id or name', function () {
    $attributes = new ComponentAttributeBag(['persist' => true, 'wire:model' => 'myField']);
    $result = app(Lux::class)->wireOr($attributes, false)->handlePersist();
    expect((string) $result)->toContain('$wire.entangle');
    expect((string) $result)->toContain(".as('persist_myField')");
});

it('does not add persist when persist attribute is absent', function () {
    $attributes = new ComponentAttributeBag([]);
    $result = app(Lux::class)->wireOr($attributes, false)->handlePersist();
    expect((string) $result)->not->toContain('$persist(');
});
