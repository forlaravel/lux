@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-description']) }}
>
    {{ $slot }}
</{{ $tag }}>
