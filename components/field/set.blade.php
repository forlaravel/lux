@blaze
@props(['tag' => 'fieldset'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-field-set']) }}>{{ $slot }}</{{ $tag }}>
