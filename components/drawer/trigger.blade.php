@blaze
@props(['tag' => 'button'])

<{{ $tag }}
    x-on:click="show()"
    {{ $attributes->merge(['class' => 'lux-drawer-trigger']) }}
>{{ $slot }}</{{ $tag }}>
