@blaze
<button @click="openSub = !openSub"
    x-ref="sub-trigger"
    role="menuitem"
    aria-haspopup="menu"
    :aria-expanded="openSub?.toString()"
    x-on:mouseover="$el.dataset.focusSource = 'mouse'; $el.focus()"
    x-on:mouseleave="if ($el.dataset.focusSource === 'mouse') $el.blur()"
    {{ $attributes->merge(['class' => 'lux-dropdown-menu-sub-trigger']) }}>
    {{ $slot }}
    <svg class="ml-auto w-4 h-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
</button>
