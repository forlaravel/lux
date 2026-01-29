@blaze
@props([
    'tag' => 'h2',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-h2']) }}>
    {{ $slot }}
</{{ $tag }}>
