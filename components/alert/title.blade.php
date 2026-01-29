@blaze
@props([
    'tag' => 'h5',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-title']) }}
>
    {{ $slot }}
</{{ $tag }}>
