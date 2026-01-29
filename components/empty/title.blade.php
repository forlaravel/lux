@blaze
@props(['tag' => 'h3'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-empty-title']) }}>{{ $slot }}</{{ $tag }}>
