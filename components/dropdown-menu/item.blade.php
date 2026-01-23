<button 
    {{ $attributes->mergeTailwind(['class' => 'w-full flex px-4 py-2 text-sm cursor-pointer focus:bg-accent focus:text-accent-foreground outline-none disabled:pointer-events-none disabled:opacity-50']) }}
    type="button"
    @click="open = false" 
    x-on:mouseover="$el.focus()"
    x-on:mouseleave="$el.blur()">
    {{ $slot }}
</button>
