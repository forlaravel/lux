@blaze
@props(['tag' => 'ul'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-pagination-content']) }}>{{ $slot }}</{{ $tag }}>
