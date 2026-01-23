<button @click="scrollNext" :disabled="!canScrollNext"
    class="lux-carousel-next absolute top-1/2 -right-12 transform -translate-y-1/2 p-2 bg-gray-200 rounded-full"
    :class="{'opacity-50 cursor-not-allowed': !canScrollNext, 'hover:bg-gray-300': canScrollNext}">
    <svg class="w-4 h-4 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
    </svg>
    <span class="sr-only">Next slide</span>
</button>
