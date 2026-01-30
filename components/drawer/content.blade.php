
@aware(['direction' => 'bottom'])
@props(['tag' => 'div', 'showHandle' => true])
<template x-teleport="body">
    <div x-show="open" class="lux-drawer-overlay" x-on:click="close()" x-transition.opacity x-cloak></div>
    @php
        $transitions = match($direction) {
            'top' => ['-translate-y-full', 'translate-y-0'],
            'right' => ['translate-x-full', 'translate-x-0'],
            'left' => ['-translate-x-full', 'translate-x-0'],
            default => ['translate-y-full', 'translate-y-0'],
        };
    @endphp
    <{{ $tag }}
        x-show="open"
        x-cloak
        x-trap.noscroll="open"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="{{ $transitions[0] }}"
        x-transition:enter-end="{{ $transitions[1] }}"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="{{ $transitions[1] }}"
        x-transition:leave-end="{{ $transitions[0] }}"
        {{ $attributes->mergeTailwind(['class' => "lux-drawer-content lux-drawer-content-{$direction}"]) }}
    >
        @if($showHandle && in_array($direction, ['top', 'bottom']))
            <div class="lux-drawer-handle"></div>
        @endif
        {{ $slot }}
    </{{ $tag }}>
</template>
