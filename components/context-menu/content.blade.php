@blaze
<template x-teleport="body">
<div 
    x-show="open" 
    x-ref="content"
    x-trap="open"
    @keydown.up.prevent="$focus.focusPrev()"
    @keydown.down.prevent="$focus.focusNext()"
    @click.outside="open = false"
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-content']) }}
    :aria-expanded="open.toString()"
    role="menu"
    :style="{ top: `${anchor.y}px`, left: `${anchor.x}px` }"
    x-cloak>
    {{ $slot }}
</div>
</template>
