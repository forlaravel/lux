@blaze
@props(['tag' => 'li', 'value' => null])
@php $itemId = $value ?? uniqid('nav-'); @endphp
<{{ $tag }}
    x-data="{ itemId: @js($itemId) }"
    @mouseenter="showItem(itemId)"
    @mouseleave="hideItem()"
    {{ $attributes->merge(['class' => 'lux-navigation-menu-item']) }}
>{{ $slot }}</{{ $tag }}>
