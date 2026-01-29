@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-item-group']) }}>{{ $slot }}</{{ $tag }}>
