@props([
    'tag' => 'small',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-small']) }}>
    {{ $slot }}
</{{ $tag }}>
