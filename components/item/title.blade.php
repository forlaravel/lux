@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-item-title']) }}>{{ $slot }}</{{ $tag }}>
