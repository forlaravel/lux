@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-empty-content']) }}>{{ $slot }}</{{ $tag }}>
