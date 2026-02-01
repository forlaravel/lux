@blaze
@props(['tag' => 'nav'])
<{{ $tag }}
    x-data="navigationMenu"
    {{ $attributes->mergeTailwind(['class' => 'lux-navigation-menu']) }}
>{{ $slot }}</{{ $tag }}>
