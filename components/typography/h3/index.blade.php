@props([
    'tag' => 'h3',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-h3']) }}>
    {{ $slot }}
</{{ $tag }}>
