@blaze
@props(['tag' => 'button'])

<{{ $tag }}
    x-on:click="show()"
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog-trigger']) }}
>{{ $slot }}</{{ $tag }}>
