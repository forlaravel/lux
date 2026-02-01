@blaze
@props(['orientation' => 'horizontal', 'opts' => '{}'])

<div x-data="{
    currentIndex: 0,
    slides: $refs.slides.children,
    init() {
        this.$watch('currentIndex', (value) => {
            this.updateArrows();
        });
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
        this.slides[this.currentIndex].scrollIntoView({ behavior: 'smooth', inline: 'start' });
    }
}"
    role="region"
    aria-roledescription="carousel"
    aria-label="Carousel"
    @keydown.arrow-left.prevent="scrollPrev()"
    @keydown.arrow-right.prevent="scrollNext()"
    class="lux-carousel {{ $orientation === 'vertical' ? 'flex-col' : '' }} {{ $class ?? '' }}" {{ $attributes }}>
    <div class="sr-only" aria-live="polite" x-text="'Slide ' + (currentIndex + 1) + ' of ' + slides.length"></div>
    {{ $slot }}
</div>
