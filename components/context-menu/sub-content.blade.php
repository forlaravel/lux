@blaze
@props(['teleport' => 'body'])
@if($teleport)
<template x-teleport="{{ $teleport }}">
@endif
<div x-show="openSub"
    x-transition
    x-cloak
    x-ref="sub-content"
    x-trap="openSub"
    role="menu"
    @keydown.up.prevent="$focus.wrap().previous()"
    @keydown.down.prevent="$focus.wrap().next()"
    {{ $attributes->merge(['class' => 'lux-context-menu-sub-content']) }}>
    {{ $slot }}
</div>
@if($teleport)
</template>
@endif
