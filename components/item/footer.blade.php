@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-item-footer']) }}>{{ $slot }}</{{ $tag }}>
