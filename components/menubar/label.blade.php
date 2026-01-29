@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-menubar-label']) }}>{{ $slot }}</{{ $tag }}>
