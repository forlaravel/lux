@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-field-content']) }}>{{ $slot }}</{{ $tag }}>
