@props([
    'tag' => 'div',
    'ratio'
])

<{{ $tag }}
    style="aspect-ratio: {{ $ratio }};"
    {{ $attributes->mergeTailwind(['class' => 'relative overflow-hidden']) }}
>
    {{ $slot }}
</{{ $tag }}>
