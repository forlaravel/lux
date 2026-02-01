@blaze
@props(['tag' => 'div', 'value' => null])
@php $menuId = $value ?? uniqid('menu-'); @endphp
<{{ $tag }}
    x-data="{ menuId: @js($menuId) }"
    class="lux-menubar-menu"
    @mouseenter="if(activeMenu && activeMenu !== menuId) activeMenu = menuId"
>{{ $slot }}</{{ $tag }}>
