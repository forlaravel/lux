@blaze
@props([
    'tag' => 'div',
    'teleport' => false,
])

@if($teleport)
<template x-teleport="{{ $teleport }}">
@endif
    <{{ $tag }}
        x-trap="open"
        x-show="open"
        x-ref="content"
        x-anchor.bottom-start="$refs.trigger"
        :data-state="open ? 'open' : 'closed'"
        :data-side="false && $refs.trigger.offsetTop < $anchor.y ? 'bottom' : 'top'"
        x-cloak
        @click.outside="open = false"
        role="dialog"
        aria-modal="false"
        {{ $attributes->mergeTailwind(['class' => 'lux-popover-content']) }}
    >
        {{ $slot }}
    </{{ $tag }}>
@if($teleport)
</template>
@endif
