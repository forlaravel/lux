@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-item-media']) }}>{{ $slot }}</{{ $tag }}>
