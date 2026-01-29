
@props(['tag' => 'div', 'orientation' => 'vertical'])
<{{ $tag }}
    x-data="{
        orientation: @js($orientation),
        thumbSize: 0,
        thumbPosition: 0,
        updateThumb() {
            const viewport = this.$refs.viewport;
            if (!viewport) return;
            if (this.orientation === 'vertical') {
                const ratio = viewport.clientHeight / viewport.scrollHeight;
                this.thumbSize = Math.max(ratio * 100, 10);
                this.thumbPosition = (viewport.scrollTop / viewport.scrollHeight) * 100;
            } else {
                const ratio = viewport.clientWidth / viewport.scrollWidth;
                this.thumbSize = Math.max(ratio * 100, 10);
                this.thumbPosition = (viewport.scrollLeft / viewport.scrollWidth) * 100;
            }
        },
        get showScrollbar() {
            return this.thumbSize < 100;
        }
    }"
    x-init="$nextTick(() => updateThumb())"
    {{ $attributes->mergeTailwind(['class' => 'lux-scroll-area']) }}
>{{ $slot }}</{{ $tag }}>
