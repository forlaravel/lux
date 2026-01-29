@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-show="activeMenu === menuId"
    x-cloak
    x-on:click.outside="activeMenu = null"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    role="menu"
    {{ $attributes->mergeTailwind(['class' => 'lux-menubar-content']) }}
>{{ $slot }}</{{ $tag }}>
