@blaze
@props(['tag' => 'button'])

<{{ $tag }}
    x-on:click="show()"
    {{ $attributes->mergeTailwind(['class' => 'lux-drawer-trigger']) }}
>{{ $slot }}</{{ $tag }}>
