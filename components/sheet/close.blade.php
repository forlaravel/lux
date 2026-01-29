@blaze
@props(['tag' => 'button'])

<{{ $tag }}
    x-on:click="close()"
    {{ $attributes->mergeTailwind(['class' => 'lux-sheet-close']) }}
>{{ $slot }}</{{ $tag }}>
