@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-lead text-xl text-muted-foreground']) }}>
    {{ $slot }}
</{{ $tag }}>
