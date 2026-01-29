@blaze
@props([
    'tag' => 'h2',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-dialog-title']) }}>
    {{ $slot }}
</{{ $tag }}>
