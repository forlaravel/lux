<button 
    {{ $attributes->mergeTailwind(['class' => 'lux-dropdown-menu-item']) }}
    type="button"
    @click="open = false" 
    x-on:mouseover="$el.focus()"
    x-on:mouseleave="$el.blur()">
    {{ $slot }}
</button>
