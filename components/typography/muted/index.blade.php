@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-muted text-sm text-muted-foreground']) }}>
    {{ $slot }}
</{{ $tag }}>
