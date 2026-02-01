@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-alert-title']) }}
>
    {{ $slot }}
</{{ $tag }}>
