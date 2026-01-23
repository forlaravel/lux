@props([
    'tag' => 'h5',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'mb-1 font-medium leading-none tracking-tight']) }}
>
    {{ $slot }}
</{{ $tag }}>
