@blaze
@props([
    'tag' => 'ul',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-list']) }}>
    {{ $slot }}
</{{ $tag }}>
