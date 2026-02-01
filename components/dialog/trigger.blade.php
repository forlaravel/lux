@blaze
@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-dialog-trigger']) }}
    @click.stop="show()"
>
    {{ $slot }}
</{{ $tag }}>
