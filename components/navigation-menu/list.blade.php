@blaze
@props(['tag' => 'ul'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-navigation-menu-list']) }}>{{ $slot }}</{{ $tag }}>
