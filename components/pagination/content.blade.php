@blaze
@props(['tag' => 'ul'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-pagination-content']) }}>{{ $slot }}</{{ $tag }}>
