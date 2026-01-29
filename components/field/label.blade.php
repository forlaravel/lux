@blaze
@props(['tag' => 'label'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-field-label']) }}>{{ $slot }}</{{ $tag }}>
