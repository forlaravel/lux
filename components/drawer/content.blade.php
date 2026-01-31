@php
    $showHandle = $showHandle ?? true;
    $showCloseButton = $showCloseButton ?? false;
@endphp

<div
    x-show="open"
    x-on:click="close()"
    x-transition.opacity.duration.300ms
    x-cloak
    class="lux-drawer-overlay"
></div>
<div
    x-ref="drawerContent"
    x-bind:class="'lux-drawer-content lux-drawer-content-' + direction"
    x-effect="
        if (!dragging) {
            const transforms = { bottom: 'translateY(100%)', top: 'translateY(-100%)', right: 'translateX(100%)', left: 'translateX(-100%)' };
            $refs.drawerContent.style.transform = open ? 'translate(0,0)' : transforms[direction];
            $refs.drawerContent.style.visibility = open ? 'visible' : 'hidden';
        }
    "
    style="visibility: hidden"
    x-init="
        const transforms = { bottom: 'translateY(100%)', top: 'translateY(-100%)', right: 'translateX(100%)', left: 'translateX(-100%)' };
        $refs.drawerContent.style.transform = transforms[direction];
        $refs.drawerContent.style.visibility = 'hidden';
        $nextTick(() => {
            $refs.drawerContent.style.transition = 'transform 300ms ease-out, visibility 300ms';
        });
    "
    {{ $attributes->except(['showHandle', 'showCloseButton']) }}
>
    <template x-if="{{ json_encode($showHandle) }} && (direction === 'top' || direction === 'bottom')">
        <div
            class="lux-drawer-handle-area"
            x-on:mousedown.prevent="onDragStart($event)"
            x-on:touchstart.passive="onDragStart($event)"
        >
            <div class="lux-drawer-handle"></div>
        </div>
    </template>

    @if($showCloseButton)
        <button class="lux-drawer-close-button" x-on:click="close()" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            <span class="sr-only">Close</span>
        </button>
    @endif

    {{ $slot }}
</div>
