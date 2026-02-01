@blaze
@props(['tag' => 'nav'])
<{{ $tag }}
    x-data="navigationMenu"
    {{ $attributes->merge(['class' => 'lux-navigation-menu']) }}
>{{ $slot }}</{{ $tag }}>
