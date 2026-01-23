<template x-teleport="body">
<div 
    x-show="open" 
    x-ref="content"
    x-trap="open"
    @keydown.up.prevent="$focus.focusPrev()"
    @keydown.down.prevent="$focus.focusNext()"
    @click.outside="open = false"
    {{ $attributes->mergeTailwind(['class' => 'absolute z-50 min-w-[8rem] rounded-md border bg-popover p-1 text-popover-foreground shadow-md animate-in fade-in-80']) }}
    :aria-expanded="open.toString()"
    role="menu"
    :style="{ top: `${anchor.y}px`, left: `${anchor.x}px` }"
    x-cloak>
    {{ $slot }}
</div>
</template>