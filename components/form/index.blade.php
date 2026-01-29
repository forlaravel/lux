@blaze

@props([
    'tag' => 'form',
])

<{{ $tag }}
    x-data
    x-form
    {{ $attributes->mergeTailwind(['class' => 'lux-form space-y-8']) }}
>
    {{ $slot }}
</{{ $tag }}>
