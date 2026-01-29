@blaze
@props(['tag' => 'p'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-field-description']) }}>{{ $slot }}</{{ $tag }}>
