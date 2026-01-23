@props([
    'tag' => 'h3',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-h3 scroll-m-20 text-2xl font-semibold tracking-tight']) }}>
    {{ $slot }}
</{{ $tag }}>
