@blaze
@props([
    'tag' => 'h1',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-h1']) }}>
    {{ $slot }}
</{{ $tag }}>
