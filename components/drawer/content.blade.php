
@aware(['direction' => 'bottom'])
@props(['tag' => 'div', 'showHandle' => true])
<template x-teleport="body">
    <div x-show="open" class="lux-drawer-overlay" x-on:click="close()" x-transition.opacity x-cloak></div>
    <{{ $tag }}
        x-show="open"
        x-cloak
        x-trap.noscroll="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="translate-y-full"
        x-transition:enter-end="translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="translate-y-0"
        x-transition:leave-end="translate-y-full"
        {{ $attributes->mergeTailwind(['class' => "lux-drawer-content lux-drawer-content-{$direction}"]) }}
    >
        @if($showHandle && in_array($direction, ['top', 'bottom']))
            <div class="lux-drawer-handle"></div>
        @endif
        {{ $slot }}
    </{{ $tag }}>
</template>
