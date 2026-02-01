@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-item-actions']) }}>{{ $slot }}</{{ $tag }}>
