@blaze
@props(['tag' => 'div', 'direction' => 'horizontal'])
<{{ $tag }}
    x-data="{
        direction: @js($direction),
        panels: [],
        dragging: false,
        dragIndex: -1,
        startPos: 0,
        startSizes: [],
        registerPanel(el, options) {
            this.panels.push({ el, ...options });
        },
        startResize(index, event) {
            this.dragging = true;
            this.dragIndex = index;
            this.startPos = this.direction === 'horizontal' ? event.clientX : event.clientY;
            this.startSizes = this.panels.map(p => p.el.getBoundingClientRect()[this.direction === 'horizontal' ? 'width' : 'height']);
        },
        onResize(event) {
            if (!this.dragging) return;
            const pos = this.direction === 'horizontal' ? event.clientX : event.clientY;
            const delta = pos - this.startPos;
            const total = this.startSizes[this.dragIndex] + this.startSizes[this.dragIndex + 1];
            const min1 = this.panels[this.dragIndex].minSize || 50;
            const min2 = this.panels[this.dragIndex + 1].minSize || 50;
            const newSize1 = Math.max(min1, Math.min(total - min2, this.startSizes[this.dragIndex] + delta));
            const newSize2 = total - newSize1;
            const container = this.$el.getBoundingClientRect()[this.direction === 'horizontal' ? 'width' : 'height'];
            this.panels[this.dragIndex].size = (newSize1 / container) * 100;
            this.panels[this.dragIndex + 1].size = (newSize2 / container) * 100;
        },
        stopResize() {
            this.dragging = false;
            this.dragIndex = -1;
        }
    }"
    x-on:mousemove.window="onResize($event)"
    x-on:mouseup.window="stopResize()"
    x-on:touchmove.window="onResize($event.touches[0])"
    x-on:touchend.window="stopResize()"
    data-panel-group-direction="{{ $direction }}"
    {{ $attributes->mergeTailwind(['class' => 'lux-resizable-panel-group']) }}
>{{ $slot }}</{{ $tag }}>
