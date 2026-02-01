@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    type="button"
    x-ref="trigger"
    aria-haspopup="true"
    :data-state="activeItem === itemId ? 'open' : 'closed'"
    :aria-expanded="(activeItem === itemId)?.toString()"
    x-on:click="toggleItem(itemId)"
    @keydown.arrow-right.prevent="focusTrigger(1)"
    @keydown.arrow-left.prevent="focusTrigger(-1)"
    @keydown.arrow-down.prevent="focusFirstLink(itemId)"
    @keydown.escape.prevent="activeItem=null"
    {{ $attributes->mergeTailwind(['class' => 'lux-navigation-menu-trigger']) }}
>
    {{ $slot }}
    <svg aria-hidden="true" class="lux-navigation-menu-chevron" :class="activeItem === itemId && 'rotate-180'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
</{{ $tag }}>
