@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-item-content']) }}>{{ $slot }}</{{ $tag }}>
