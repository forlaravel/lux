{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@aware([
    'searchable' => false,
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
    aria-haspopup="listbox"
    :id="$id('select-trigger')"
    :aria-expanded="open"
    :aria-pressed="open || hasInputFocus"
    class="lux-select-trigger {{ $cursorClass }}"
    {{ $attributes }}
>
    {{ $slot }}
    <svg class="lux-select-trigger-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
</{{ $tag }}>
