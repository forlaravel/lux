@props([
    'tag' => 'h2',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'text-lg font-semibold leading-none tracking-tight']) }}>
    {{ $slot }}
</{{ $tag }}>
