@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'text-sm [&_p]:leading-relaxed']) }}
>
    {{ $slot }}
</{{ $tag }}>
