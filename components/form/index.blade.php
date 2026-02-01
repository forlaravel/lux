@blaze

@props([
    'tag' => 'form',
])

<{{ $tag }}
    x-data
    x-form
    {{ $attributes->merge(['class' => 'lux-form']) }}
>
    {{ $slot }}
</{{ $tag }}>
