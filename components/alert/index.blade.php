@blaze
@props([
    'tag' => 'div',
    'variant' => 'default',
])

<{{ $tag }}
    role="alert"
    {{ $attributes->merge(['class' => "lux-alert lux-alert-variant-{$variant}"]) }}
>
    {{ $slot }}
</{{ $tag }}>
