@blaze
@props([
    'tag' => 'blockquote',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-blockquote']) }}>
    {{ $slot }}
</{{ $tag }}>
