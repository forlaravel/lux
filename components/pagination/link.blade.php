@blaze
@props(['tag' => 'a', 'active' => false])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-pagination-link' . ($active ? ' lux-pagination-link-active' : '')]) }}>{{ $slot }}</{{ $tag }}>
