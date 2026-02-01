@blaze
@props(['tag' => 'li'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-pagination-item']) }}>{{ $slot }}</{{ $tag }}>
