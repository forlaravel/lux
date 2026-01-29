@blaze
@props([
    'tag' => 'code',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-inline-code']) }}>{{ $slot }}</{{ $tag }}>
