@blaze
@props(['tag' => 'legend'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-field-legend']) }}>{{ $slot }}</{{ $tag }}>
