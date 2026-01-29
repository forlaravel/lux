{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@props([
    'tag' => 'span',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-select-label']) }}
>
    {{ $slot }}
</{{ $tag }}>
