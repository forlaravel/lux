@blaze
<button
    {{ $attributes->mergeTailwind(['class' => 'lux-dropdown-menu-item']) }}
    type="button"
    role="menuitem"
    @click="open = false"
    x-on:mouseover="$el.dataset.focusSource = 'mouse'; $el.focus()"
    x-on:mouseleave="if ($el.dataset.focusSource === 'mouse') $el.blur()">
    {{ $slot }}
</button>
