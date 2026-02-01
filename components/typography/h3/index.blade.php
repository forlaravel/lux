@blaze
@props([
    'tag' => 'h3',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-h3']) }}>
    {{ $slot }}
</{{ $tag }}>
