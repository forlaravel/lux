@props([
    'tag' => 'div',
    'ratio'
])

<{{ $tag }}
    style="aspect-ratio: {{ $ratio }};"
    {{ $attributes->mergeTailwind(['class' => 'lux-aspect-ratio']) }}
>
    {{ $slot }}
</{{ $tag }}>
