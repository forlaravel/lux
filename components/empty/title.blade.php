@blaze
@props(['tag' => 'h3'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-empty-title']) }}>{{ $slot }}</{{ $tag }}>
