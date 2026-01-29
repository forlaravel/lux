@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-input-group']) }}>{{ $slot }}</{{ $tag }}>
