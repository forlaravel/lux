@blaze
@props(['tag' => 'div', 'teleport' => 'body'])
@if($teleport)
<template x-teleport="{{ $teleport === true ? 'body' : $teleport }}">
@endif
<{{ $tag }}
    x-show="show"
    x-cloak
    x-anchor.offset.4="$refs.trigger"
    x-transition:enter="transition ease-out duration-150"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-100"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    role="tooltip"
    :id="$id('tooltip')"
    {{ $attributes->merge(['class' => 'lux-tooltip-content']) }}
>{{ $slot }}</{{ $tag }}>
@if($teleport)
</template>
@endif
