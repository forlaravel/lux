{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

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
        {{ $attributes->mergeTailwind(['class' => 'absolute p-1 top-0 left-0 z-50 max-h-72 min-w-[8rem] rounded-md border bg-popover overflow-x-hidden overflow-y-auto text-popover-foreground shadow-md data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2']) }}
    >
        {{ $slot }}
    </{{ $tag }}>
@if($teleport)
</template>
@endif
