@props([
    'tag' => 'p',
])

<{{ $tag }}
    x-form:description
    {{ $attributes->mergeTailwind(['class' => 'lux-form-description']) }}
>
    {{ $slot }}
</{{ $tag }}>
