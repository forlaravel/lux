@blaze
@props(['tag' => 'div', 'teleport' => 'body'])
@if($teleport)
<template x-teleport="{{ $teleport === true ? 'body' : $teleport }}">
@endif
<{{ $tag }}
    x-show="activeMenu === menuId"
    x-cloak
    @if($teleport)
    x-anchor.bottom-start.offset.4="$refs.trigger"
    @endif
    x-on:click.outside="activeMenu = null"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    role="menu"
    aria-orientation="vertical"
    data-menubar-content
    :data-menu-id="menuId"
    @keydown.arrow-down.prevent="contentNav($el,'down')"
    @keydown.arrow-up.prevent="contentNav($el,'up')"
    @keydown.home.prevent="contentHome($el)"
    @keydown.end.prevent="contentEnd($el)"
    @keydown.escape.prevent="contentEscape()"
    {{ $attributes->merge(['class' => 'lux-menubar-content']) }}
>{{ $slot }}</{{ $tag }}>
@if($teleport)
</template>
@endif
