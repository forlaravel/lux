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
}" class="lux-carousel relative {{ $orientation === 'vertical' ? 'flex-col' : '' }} {{ $class ?? '' }}" {{ $attributes }}>
    {{ $slot }}
</div>
