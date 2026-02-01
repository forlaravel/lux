@blaze
@props(['orientation' => 'horizontal', 'opts' => '{}'])

<div x-data="{
    currentIndex: 0,
    orientation: '{{ $orientation }}',
    slides: [],
    canScrollPrev: false,
    canScrollNext: false,
    touchStartX: 0,
    touchStartY: 0,
    init() {
        this.slides = Array.from(this.$refs.slides?.children ?? []);
        this.$watch('currentIndex', () => this.updateArrows());
        this.updateArrows();
    },
    updateArrows() {
        this.canScrollPrev = this.currentIndex > 0;
        this.canScrollNext = this.currentIndex < this.slides.length - 1;
    },
    scrollPrev() {
        if (this.canScrollPrev) {
            this.currentIndex--;
            this.scrollToSlide();
        }
    },
    scrollNext() {
        if (this.canScrollNext) {
            this.currentIndex++;
            this.scrollToSlide();
        }
    },
    scrollToSlide() {
        const slide = this.slides[this.currentIndex];
        if (slide) {
            slide.scrollIntoView({ behavior: 'smooth', block: this.orientation === 'vertical' ? 'nearest' : 'start', inline: 'start' });
        }
    },
    handleTouchStart(e) {
        this.touchStartX = e.touches[0].clientX;
        this.touchStartY = e.touches[0].clientY;
    },
    handleTouchEnd(e) {
        const deltaX = e.changedTouches[0].clientX - this.touchStartX;
        const deltaY = e.changedTouches[0].clientY - this.touchStartY;
        const threshold = 50;
        if (this.orientation === 'horizontal') {
            if (Math.abs(deltaX) > Math.abs(deltaY) && Math.abs(deltaX) > threshold) {
                deltaX < 0 ? this.scrollNext() : this.scrollPrev();
            }
        } else {
            if (Math.abs(deltaY) > Math.abs(deltaX) && Math.abs(deltaY) > threshold) {
                deltaY < 0 ? this.scrollNext() : this.scrollPrev();
            }
        }
    }
}"
    role="region"
    aria-roledescription="carousel"
    aria-label="Carousel"
    @keydown.arrow-left.prevent="orientation === 'horizontal' && scrollPrev()"
    @keydown.arrow-right.prevent="orientation === 'horizontal' && scrollNext()"
    @keydown.arrow-up.prevent="orientation === 'vertical' && scrollPrev()"
    @keydown.arrow-down.prevent="orientation === 'vertical' && scrollNext()"
    @touchstart="handleTouchStart"
    @touchend="handleTouchEnd"
    {{ $attributes->merge(['class' => 'lux-carousel' . ($orientation === 'vertical' ? ' flex-col' : '')]) }}
    tabindex="0">
    <div class="sr-only" aria-live="polite" x-text="'Slide ' + (currentIndex + 1) + ' of ' + slides.length"></div>
    {{ $slot }}
</div>
