@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-item-content']) }}>{{ $slot }}</{{ $tag }}>
