@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    type="button"
    role="menuitem"
    x-ref="trigger"
    aria-haspopup="menu"
    :aria-expanded="activeMenu === menuId"
    x-on:click="activeMenu = activeMenu === menuId ? null : menuId"
    :data-state="activeMenu === menuId ? 'open' : 'closed'"
    @keydown.arrow-right.prevent="focusTrigger(1)"
    @keydown.arrow-left.prevent="focusTrigger(-1)"
    @keydown.arrow-down.prevent="if(activeMenu!==menuId)activeMenu=menuId;focusFirstItem()"
    @keydown.arrow-up.prevent="if(activeMenu!==menuId)activeMenu=menuId;focusLastItem()"
    @keydown.escape.prevent="activeMenu=null"
    @keydown.home.prevent="if(activeMenu===menuId)focusFirstItem()"
    @keydown.end.prevent="if(activeMenu===menuId)focusLastItem()"
    {{ $attributes->merge(['class' => 'lux-menubar-trigger']) }}
>{{ $slot }}</{{ $tag }}>
