@blaze

@props([
    'tag' => 'p',
])

<{{ $tag }}
    x-form:description
    {{ $attributes->merge(['class' => 'lux-form-description']) }}
>
    {{ $slot }}
</{{ $tag }}>
