@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-dialog-header']) }}>
    {{ $slot }}
</{{ $tag }}>
