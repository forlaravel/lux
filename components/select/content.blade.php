{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}
@blaze

@props([
    'tag' => 'div',
    'teleport' => false,
])

@if($teleport)
<template x-teleport="{{ $teleport }}">
@endif
    <{{ $tag }}
        x-select:content
        x-ref="content"
        x-cloak
        role="listbox"
        :id="$id('select-content')"
        {{ $attributes->merge(['class' => 'lux-select-content']) }}
    >
        {{ $slot }}
    </{{ $tag }}>
@if($teleport)
</template>
@endif
