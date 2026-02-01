@blaze
@props(['tag' => 'button'])

<{{ $tag }}
    x-on:click="show()"
    {{ $attributes->merge(['class' => 'lux-alert-dialog-trigger']) }}
>{{ $slot }}</{{ $tag }}>
