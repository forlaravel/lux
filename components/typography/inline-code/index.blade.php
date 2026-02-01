@blaze
@props([
    'tag' => 'code',
])

<{{ $tag }} {{ $attributes->merge(['class' => 'lux-inline-code']) }}>{{ $slot }}</{{ $tag }}>
