@props([
    'tag' => 'h4',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'scroll-m-20 text-xl font-semibold tracking-tight']) }}>
    {{ $slot }}
</{{ $tag }}>
