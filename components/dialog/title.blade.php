@props([
    'tag' => 'h2',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-dialog-title text-lg font-semibold leading-none tracking-tight']) }}>
    {{ $slot }}
</{{ $tag }}>
