@blaze
@props(['tag' => 'kbd'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-kbd']) }}>{{ $slot }}</{{ $tag }}>
