@blaze
@props([
    'tag' => 'blockquote',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-blockquote']) }}>
    {{ $slot }}
</{{ $tag }}>
