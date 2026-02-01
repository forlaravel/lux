@blaze
@props(['inset' => false, 'disabled' => false])
<button
    type="button"
    role="menuitem"
    @click="open = false"
    @keydown.enter.prevent="open = false"
    @keydown.space.prevent="open = false"
    data-disabled="{{ $disabled ? 'true' : 'false' }}"
    {{ $disabled ? 'disabled' : '' }}
    x-on:mouseover="$el.dataset.focusSource = 'mouse'; $el.focus()"
    x-on:mouseleave="if ($el.dataset.focusSource === 'mouse') $el.blur()"
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-item w-full' . ($inset ? ' pl-8' : '') . ($disabled ? ' pointer-events-none opacity-50' : '')]) }}>
    {{ $slot }}
</button>
