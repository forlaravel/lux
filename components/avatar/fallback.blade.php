@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-avatar-fallback']) }}
>
    {{ $slot }}
</{{ $tag }}>
