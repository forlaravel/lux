@blaze
@props([
    'tag' => 'div',
    'teleport' => 'body',
])
@if($teleport)
<template x-teleport="{{ $teleport }}">
@endif
    <{{ $tag }}
        x-show="open"
        x-ref="content"
        x-anchor.bottom-start.offset.4="$refs.trigger"
        :data-state="open ? 'open' : 'closed'"
        :data-side="$refs.trigger.offsetTop < $anchor.y ? 'bottom' : 'top'"
        x-cloak
        @click.outside="open = false"
        role="dialog"
        {{ $attributes->mergeTailwind(['class' => 'lux-popover-content']) }}
    >
        {{ $slot }}
    </{{ $tag }}>
@if($teleport)
</template>
@endif