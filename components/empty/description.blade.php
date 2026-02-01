@blaze
@props(['tag' => 'p'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-empty-description']) }}>{{ $slot }}</{{ $tag }}>
