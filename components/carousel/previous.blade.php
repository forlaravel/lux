@blaze
<button type="button" @click="scrollPrev" :disabled="!canScrollPrev"
    aria-label="Previous slide"
    {{ $attributes->merge(['class' => 'lux-carousel-previous']) }}>
    <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    <span class="sr-only">Previous slide</span>
</button>
