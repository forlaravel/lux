@props([
    'tag' => 'h4',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-h4']) }}>
    {{ $slot }}
</{{ $tag }}>
