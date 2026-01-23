@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'text-lg font-semibold']) }}>
    {{ $slot }}
</{{ $tag }}>
