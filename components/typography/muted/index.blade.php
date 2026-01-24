@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-muted']) }}>
    {{ $slot }}
</{{ $tag }}>
