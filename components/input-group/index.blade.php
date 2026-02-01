@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-input-group']) }}>{{ $slot }}</{{ $tag }}>
