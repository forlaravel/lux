@blaze
@props(['tag' => 'p'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-item-description']) }}>{{ $slot }}</{{ $tag }}>
