@blaze
@props(['tag' => 'a'])
<{{ $tag }}
    @keydown.arrow-down.prevent="contentNav($el.closest('[data-navmenu-content]'),'down')"
    @keydown.arrow-up.prevent="contentNav($el.closest('[data-navmenu-content]'),'up')"
    @keydown.arrow-right.prevent="openAndFocusFirst(1)"
    @keydown.arrow-left.prevent="openAndFocusFirst(-1)"
    @keydown.escape.prevent="contentEscape()"
    {{ $attributes->merge(['class' => 'lux-navigation-menu-link']) }}
>{{ $slot }}</{{ $tag }}>
