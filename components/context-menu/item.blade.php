@blaze
<button
    type="button"
    role="menuitem"
    @click="open = false"
    x-on:mouseover="$el.dataset.focusSource = 'mouse'; $el.focus()"
    x-on:mouseleave="if ($el.dataset.focusSource === 'mouse') $el.blur()"
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-item']) }}>
    {{ $slot }}
</button>
