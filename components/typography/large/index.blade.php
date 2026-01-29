@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-large']) }}>
    {{ $slot }}
</{{ $tag }}>
