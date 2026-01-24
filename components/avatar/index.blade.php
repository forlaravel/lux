@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-avatar']) }}
>
    {{ $slot }}
</{{ $tag }}>
