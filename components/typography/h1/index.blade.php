@blaze
@props([
    'tag' => 'h1',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-h1']) }}>
    {{ $slot }}
</{{ $tag }}>
