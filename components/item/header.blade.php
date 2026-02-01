@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-item-header']) }}>{{ $slot }}</{{ $tag }}>
