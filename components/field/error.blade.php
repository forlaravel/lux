@blaze
@props(['tag' => 'p'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-field-error']) }}>{{ $slot }}</{{ $tag }}>
