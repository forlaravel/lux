@php
    $open = $open ?? false;
    $direction = $direction ?? 'bottom';
@endphp

<div
    {{ $attributes->except(['open', 'direction'])->merge(['class' => 'lux-drawer']) }}
    data-direction="{{ $direction }}"
    x-id="['drawer-title', 'drawer-description']"
    @keydown.escape.window="close()"
    x-data="{
        open: {{ $open ? 'true' : 'false' }},
        direction: '{{ $direction }}',
        dragging: false,
        dragOffset: 0,
        startPos: 0,

        show() { this.open = true; },
        close() {
            this.open = false;
            this.dragOffset = 0;
        },

        get isVertical() { return this.direction === 'bottom' || this.direction === 'top'; },
        get isReverse() { return this.direction === 'top' || this.direction === 'left'; },

        onDragStart(e) {
            this.dragging = true;
            const point = e.touches ? e.touches[0] : e;
            this.startPos = this.isVertical ? point.clientY : point.clientX;
            if (this.$refs.drawerContent) {
                this.$refs.drawerContent.style.transition = 'none';
            }
        },

        onDragMove(e) {
            if (!this.dragging) return;
            const point = e.touches ? e.touches[0] : e;
            const current = this.isVertical ? point.clientY : point.clientX;
            let delta = current - this.startPos;

            if (this.isReverse) delta = -delta;
            this.dragOffset = Math.max(0, delta);

            if (this.$refs.drawerContent) {
                const axis = this.isVertical ? 'Y' : 'X';
                const sign = this.isReverse ? -1 : 1;
                this.$refs.drawerContent.style.transform = 'translate' + axis + '(' + (sign * this.dragOffset) + 'px)';
            }
        },

        onDragEnd() {
            if (!this.dragging) return;
            this.dragging = false;
            if (this.$refs.drawerContent) {
                this.$refs.drawerContent.style.transition = 'transform 300ms ease-out, visibility 300ms';
            }
            const threshold = this.$refs.drawerContent
                ? (this.isVertical ? this.$refs.drawerContent.offsetHeight : this.$refs.drawerContent.offsetWidth) * 0.3
                : 100;
            if (this.dragOffset > threshold) {
                this.close();
            } else {
                this.dragOffset = 0;
                if (this.$refs.drawerContent) {
                    this.$refs.drawerContent.style.transform = 'translate(0,0)';
                }
            }
        },
    }"
    x-modelable="open"
    x-on:mousemove.window="onDragMove($event)"
    x-on:mouseup.window="onDragEnd()"
    x-on:touchmove.window.passive="onDragMove($event)"
    x-on:touchend.window="onDragEnd()"
>
    {{ $slot }}
</div>
