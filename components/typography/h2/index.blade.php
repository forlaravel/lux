@blaze
@props([
    'tag' => 'h2',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-h2']) }}>
    {{ $slot }}
</{{ $tag }}>
