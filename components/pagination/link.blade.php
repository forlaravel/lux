@blaze
@props(['tag' => 'a', 'active' => false])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-pagination-link' . ($active ? ' lux-pagination-link-active' : '')]) }}>{{ $slot }}</{{ $tag }}>
