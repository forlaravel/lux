@props([
    'tag' => 'form',
])

<{{ $tag }}
    x-data
    x-form
    {{ $attributes->mergeTailwind(['class' => 'space-y-8']) }}
>
    {{ $slot }}
</{{ $tag }}>
