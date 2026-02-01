@blaze
@props(['teleport' => 'body'])
@if($teleport)
<template x-teleport="{{ $teleport }}">
@endif
<div
    {{ $attributes->merge(['class' => 'lux-dropdown-menu-content']) }}
    x-show="open"
    x-ref="content"
    x-trap="open"
    role="menu"
    @keydown.up.prevent="$focus.wrap().previous()"
    @keydown.down.prevent="$focus.wrap().next()"
    @click.outside="open = false"
    x-anchor.bottom-start.offset.4="$refs.trigger"
    x-cloak
    :data-state="open ? 'open' : 'closed'"
    :data-side="$refs.trigger.offsetTop < $anchor.y ? 'bottom' : 'top'"
    >
    {{ $slot }}
</div>
@if($teleport)
</template>
@endif
