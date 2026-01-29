@blaze
@props(['tag' => 'li', 'value' => null])
@php $itemId = $value ?? uniqid('nav-'); @endphp
<{{ $tag }}
    x-data="{ itemId: @js($itemId) }"
    @mouseenter="activeItem = itemId"
    @mouseleave="activeItem = null"
    {{ $attributes->mergeTailwind(['class' => 'lux-navigation-menu-item']) }}
>{{ $slot }}</{{ $tag }}>
