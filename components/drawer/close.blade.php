
@props(['tag' => 'button'])
<{{ $tag }}
    x-on:click="close()"
    {{ $attributes->mergeTailwind(['class' => 'lux-drawer-close']) }}
>{{ $slot }}</{{ $tag }}>
