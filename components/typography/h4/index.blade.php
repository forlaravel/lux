@props([
    'tag' => 'h4',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-h4 scroll-m-20 text-xl font-semibold tracking-tight']) }}>
    {{ $slot }}
</{{ $tag }}>
