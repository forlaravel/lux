@props([
    'tag' => 'div',
    'ratio'
])

<{{ $tag }}
    style="aspect-ratio: {{ $ratio }};"
    {{ $attributes->mergeTailwind(['class' => 'lux-aspect-ratio relative overflow-hidden']) }}
>
    {{ $slot }}
</{{ $tag }}>
