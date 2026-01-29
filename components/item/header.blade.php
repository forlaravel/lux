@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-item-header']) }}>{{ $slot }}</{{ $tag }}>
