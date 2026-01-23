@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full']) }}
>
    {{ $slot }}
</{{ $tag }}>
