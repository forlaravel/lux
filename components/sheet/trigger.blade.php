@blaze
@props(['tag' => 'div'])

<{{ $tag }}
    x-on:click="show()"
    {{ $attributes->mergeTailwind(['class' => 'lux-sheet-trigger']) }}
>{{ $slot }}</{{ $tag }}>
