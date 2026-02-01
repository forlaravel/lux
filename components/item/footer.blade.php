@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-item-footer']) }}>{{ $slot }}</{{ $tag }}>
