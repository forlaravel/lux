@blaze
@props(['tag' => 'legend'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-field-legend']) }}>{{ $slot }}</{{ $tag }}>
