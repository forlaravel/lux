@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-field-group']) }}>{{ $slot }}</{{ $tag }}>
