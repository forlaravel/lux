@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-empty-header']) }}>{{ $slot }}</{{ $tag }}>
