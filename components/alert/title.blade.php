@props([
    'tag' => 'h5',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-title mb-1 font-medium leading-none tracking-tight']) }}
>
    {{ $slot }}
</{{ $tag }}>
