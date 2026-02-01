@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-item-group']) }}>{{ $slot }}</{{ $tag }}>
