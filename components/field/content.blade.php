@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-field-content']) }}>{{ $slot }}</{{ $tag }}>
