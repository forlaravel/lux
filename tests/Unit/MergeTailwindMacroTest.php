<?php

use Illuminate\View\ComponentAttributeBag;

it('merges default classes into attributes', function () {
    $bag = new ComponentAttributeBag([]);
    $result = $bag->mergeTailwind(['class' => 'bg-red-500 p-4']);
    expect($result->get('class'))->toContain('bg-red-500');
    expect($result->get('class'))->toContain('p-4');
});

it('resolves tailwind conflicts with user class winning', function () {
    $bag = new ComponentAttributeBag(['class' => 'bg-blue-500']);
    $result = $bag->mergeTailwind(['class' => 'bg-red-500 p-4']);
    expect($result->get('class'))->toContain('bg-blue-500');
    expect($result->get('class'))->not->toContain('bg-red-500');
    expect($result->get('class'))->toContain('p-4');
});

it('preserves non-conflicting classes from both sides', function () {
    $bag = new ComponentAttributeBag(['class' => 'text-lg']);
    $result = $bag->mergeTailwind(['class' => 'bg-red-500 p-4']);
    expect($result->get('class'))->toContain('text-lg');
    expect($result->get('class'))->toContain('bg-red-500');
    expect($result->get('class'))->toContain('p-4');
});
