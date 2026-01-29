@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-item-actions']) }}>{{ $slot }}</{{ $tag }}>
