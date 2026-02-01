@blaze
@props(['tag' => 'button', 'disabled' => false])
<{{ $tag }}
    type="button" role="menuitem"
    tabindex="-1"
    x-on:click="activeMenu = null"
    @keydown.arrow-right.prevent="openAndFocusFirst(1)"
    @keydown.arrow-left.prevent="openAndFocusFirst(-1)"
    @keydown.escape.prevent="contentEscape()"
    @disabled($disabled)
    :data-disabled="@js($disabled) || undefined"
    {{ $attributes->mergeTailwind(['class' => 'lux-menubar-item']) }}
>{{ $slot }}</{{ $tag }}>
