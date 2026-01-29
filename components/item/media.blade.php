@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-item-media']) }}>{{ $slot }}</{{ $tag }}>
