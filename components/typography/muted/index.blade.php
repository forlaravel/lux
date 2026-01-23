@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'text-sm text-muted-foreground']) }}>
    {{ $slot }}
</{{ $tag }}>
