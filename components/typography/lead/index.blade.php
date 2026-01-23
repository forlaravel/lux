@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'text-xl text-muted-foreground']) }}>
    {{ $slot }}
</{{ $tag }}>
