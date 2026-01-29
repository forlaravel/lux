@blaze
@props(['tag' => 'p'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-empty-description']) }}>{{ $slot }}</{{ $tag }}>
