@blaze
@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-large']) }}>
    {{ $slot }}
</{{ $tag }}>
