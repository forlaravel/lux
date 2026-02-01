@blaze
@props(['tag' => 'button'])

<{{ $tag }}
    x-on:click="close()"
    {{ $attributes->merge(['class' => 'lux-alert-dialog-cancel lux-button lux-button-variant-outline lux-button-size-md']) }}
>{{ $slot }}</{{ $tag }}>
