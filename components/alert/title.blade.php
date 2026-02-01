@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-title']) }}
>
    {{ $slot }}
</{{ $tag }}>
