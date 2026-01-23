<button @click="scrollPrev" :disabled="!canScrollPrev"
    class="lux-carousel-previous absolute top-1/2 -left-12 transform -translate-y-1/2 p-2 bg-gray-200 rounded-full"
    :class="{'opacity-50 cursor-not-allowed': !canScrollPrev, 'hover:bg-gray-300': canScrollPrev}">
    <svg class="w-4 h-4 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
    </svg>
    <span class="sr-only">Previous slide</span>
</button>
