@blaze
@props(['tag' => 'ul'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-navigation-menu-list']) }}>{{ $slot }}</{{ $tag }}>
