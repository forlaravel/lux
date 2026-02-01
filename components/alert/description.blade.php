@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-alert-description']) }}
>
    {{ $slot }}
</{{ $tag }}>
