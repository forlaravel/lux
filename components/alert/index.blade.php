@props([
    'tag' => 'div',
    'variant' => 'default',
])

<{{ $tag }}
    role="alert"
    {{ $attributes->mergeTailwind(['class' => "lux-alert lux-alert-variant-{$variant}"]) }}
>
    {{ $slot }}
</{{ $tag }}>
