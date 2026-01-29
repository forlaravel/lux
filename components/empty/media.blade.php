@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-empty-media']) }}>{{ $slot }}</{{ $tag }}>
