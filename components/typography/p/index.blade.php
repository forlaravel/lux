@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-p']) }}>
    {{ $slot }}
</{{ $tag }}>
