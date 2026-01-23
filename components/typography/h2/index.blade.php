@props([
    'tag' => 'h2',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-h2 scroll-m-20 border-b pb-2 text-3xl font-semibold tracking-tight first:mt-0']) }}>
    {{ $slot }}
</{{ $tag }}>
