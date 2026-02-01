@blaze
@props([
    'tag' => 'h4',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-h4']) }}>
    {{ $slot }}
</{{ $tag }}>
