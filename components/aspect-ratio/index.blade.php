@blaze
@props([
    'tag' => 'div',
    'ratio'
])

<{{ $tag }}
    style="aspect-ratio: {{ $ratio }};"
    {{ $attributes->merge(['class' => 'lux-aspect-ratio']) }}
>
    {{ $slot }}
</{{ $tag }}>
