@blaze
@props(['tag' => 'li'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-pagination-item']) }}>{{ $slot }}</{{ $tag }}>
