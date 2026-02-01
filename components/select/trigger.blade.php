{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@aware([
    'searchable' => false,
    'size' => 'md',
    'placeholder' => 'Select an option',
])

@props([
    'tag' => 'div',
])

@php
$cursorClass = $searchable ? 'lux-select-trigger-searchable' : 'lux-select-trigger-default';
@endphp

<{{ $tag }}
    @if(!$searchable)
    tabindex="0"
    @endif
    @click="onTrigger"
    x-ref="trigger"
    role="combobox"
    aria-haspopup="listbox"
    :id="$id('select-trigger')"
    :aria-controls="$id('select-content')"
    :aria-expanded="open"
    :aria-activedescendant="cursor ? $id('select-content') + '-' + cursor : null"
    @if(!$attributes->has('aria-label') && !$attributes->has('aria-labelledby'))
    aria-label="{{ $placeholder }}"
    @endif
    class="lux-select-trigger lux-select-trigger-size-{{ $size }} {{ $cursorClass }}"
    {{ $attributes }}
>
    {{ $slot }}
    <svg class="lux-select-trigger-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
</{{ $tag }}>
