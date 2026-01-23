@props([
    'tag' => 'div',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'flex h-full w-full items-center justify-center rounded-full bg-accent text-accent-foreground']) }}
>
    {{ $slot }}
</{{ $tag }}>
