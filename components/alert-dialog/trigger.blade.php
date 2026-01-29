@blaze
@props(['tag' => 'div'])

<{{ $tag }}
    x-on:click="show()"
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog-trigger']) }}
>{{ $slot }}</{{ $tag }}>
