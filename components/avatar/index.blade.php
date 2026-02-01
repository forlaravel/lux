@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-avatar']) }}
>
    {{ $slot }}
</{{ $tag }}>
