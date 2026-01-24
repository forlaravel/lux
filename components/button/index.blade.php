@props([
    'tag' => 'button',
    'variant' => 'primary',
    'size' => 'md'
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => "lux-button lux-button-variant-{$variant} lux-button-size-{$size}"]) }}>
    {{ $slot }}
</{{ $tag }}>
