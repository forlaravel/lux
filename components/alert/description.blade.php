@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-description text-sm [&_p]:leading-relaxed']) }}
>
    {{ $slot }}
</{{ $tag }}>
