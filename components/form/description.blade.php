@props([
    'tag' => 'p',
])

<{{ $tag }}
    x-form:description
    {{ $attributes->mergeTailwind(['class' => 'text-[0.8rem] text-muted-foreground']) }}
>
    {{ $slot }}
</{{ $tag }}>
