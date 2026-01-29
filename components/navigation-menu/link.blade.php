@blaze
@props(['tag' => 'a'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-navigation-menu-link']) }}>{{ $slot }}</{{ $tag }}>
