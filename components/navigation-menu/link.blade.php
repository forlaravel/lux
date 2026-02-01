@blaze
@props(['tag' => 'a'])
<{{ $tag }}
    @keydown.arrow-down.prevent="contentNav($el.closest('[data-navmenu-content]'),'down')"
    @keydown.arrow-up.prevent="contentNav($el.closest('[data-navmenu-content]'),'up')"
    @keydown.arrow-right.prevent="contentNav($el.closest('[data-navmenu-content]'),'right')"
    @keydown.arrow-left.prevent="contentNav($el.closest('[data-navmenu-content]'),'left')"
    @keydown.escape.prevent="contentEscape()"
    {{ $attributes->mergeTailwind(['class' => 'lux-navigation-menu-link']) }}
>{{ $slot }}</{{ $tag }}>
