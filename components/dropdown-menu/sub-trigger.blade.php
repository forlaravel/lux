<button @click="openSub = !openSub"
    x-ref="sub-trigger"
    x-on:mouseover="$el.focus()"
    x-on:mouseleave="$el.blur()"
    {{ $attributes->mergeTailwind(['class' => 'lux-dropdown-menu-sub-trigger']) }}>
    {{ $slot }}
    <svg class="ml-auto w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
</button>
