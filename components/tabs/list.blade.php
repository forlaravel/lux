@props([
    'tag' => 'div',
])

@aware([
    'variant' => 'default',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => "lux-tabs-list lux-tabs-list-variant-{$variant}"]) }}
>
    {{ $slot }}
</{{ $tag }}>
