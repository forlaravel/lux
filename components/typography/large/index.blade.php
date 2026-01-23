@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-large text-lg font-semibold']) }}>
    {{ $slot }}
</{{ $tag }}>
