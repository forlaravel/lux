@blaze
@props(['tag' => 'nav'])
<{{ $tag }}
    x-data="{ activeItem: null }"
    {{ $attributes->mergeTailwind(['class' => 'lux-navigation-menu']) }}
>{{ $slot }}</{{ $tag }}>
