@blaze
@props(['teleport' => 'body'])
@if($teleport)
<template x-teleport="{{ $teleport }}">
@endif
<div
    x-show="open"
    x-ref="content"
    x-trap="open"
    x-transition
    @keydown.up.prevent="$focus.wrap().previous()"
    @keydown.down.prevent="$focus.wrap().next()"
    @click.outside="open = false"
    {{ $attributes->merge(['class' => 'lux-context-menu-content']) }}
    role="menu"
    :style="{ top: `${anchor.y}px`, left: `${anchor.x}px` }"
    x-cloak>
    {{ $slot }}
</div>
@if($teleport)
</template>
@endif
