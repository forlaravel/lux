@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-empty-content']) }}>{{ $slot }}</{{ $tag }}>
