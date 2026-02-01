@blaze
@props(['tag' => 'p'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-item-description']) }}>{{ $slot }}</{{ $tag }}>
