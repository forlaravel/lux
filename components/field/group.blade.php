@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-field-group']) }}>{{ $slot }}</{{ $tag }}>
