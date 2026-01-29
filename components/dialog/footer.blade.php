@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-dialog-footer']) }}>
    {{ $slot }}
</{{ $tag }}>
