@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-menubar-label']) }}>{{ $slot }}</{{ $tag }}>
