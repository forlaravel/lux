@blaze
@props(['tag' => 'button'])

<{{ $tag }}
    x-on:click="close()"
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog-action lux-button lux-button-variant-primary lux-button-size-md']) }}
>{{ $slot }}</{{ $tag }}>
