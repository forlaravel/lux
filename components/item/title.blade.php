@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-item-title']) }}>{{ $slot }}</{{ $tag }}>
