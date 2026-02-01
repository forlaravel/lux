@blaze
@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-dialog-close']) }}
    @click="close()"
>
    {{ $slot }}
</{{ $tag }}>
