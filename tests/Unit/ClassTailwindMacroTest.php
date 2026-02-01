<?php

use Illuminate\View\ComponentAttributeBag;

it('adds conditional classes', function () {
    $bag = new ComponentAttributeBag([]);
    $result = $bag->classTailwind(['bg-red-500' => true, 'hidden' => false]);
    expect($result->get('class'))->toContain('bg-red-500');
    expect($result->get('class'))->not->toContain('hidden');
});

it('resolves tailwind conflicts in conditional classes', function () {
    $bag = new ComponentAttributeBag(['class' => 'bg-blue-500']);
    $result = $bag->classTailwind(['bg-red-500']);
    expect($result->get('class'))->toContain('bg-blue-500');
    expect($result->get('class'))->not->toContain('bg-red-500');
});

it('merges string classes', function () {
    $bag = new ComponentAttributeBag([]);
    $result = $bag->classTailwind(['p-4 text-sm']);
    expect($result->get('class'))->toContain('p-4');
    expect($result->get('class'))->toContain('text-sm');
});
