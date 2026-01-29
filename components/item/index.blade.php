@blaze
@props(['tag' => 'div', 'variant' => 'default', 'size' => 'default'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => "lux-item lux-item-variant-{$variant} lux-item-size-{$size}"]) }}>{{ $slot }}</{{ $tag }}>
