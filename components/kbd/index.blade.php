@blaze
@props(['tag' => 'kbd'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-kbd']) }}>{{ $slot }}</{{ $tag }}>
