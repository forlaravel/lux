@props(['orientation' => 'horizontal'])
<div class="lux-carousel-content overflow-hidden w-full">
    <div class="flex {{ $orientation === 'vertical' ? 'flex-col' : '' }}" x-ref="slides">
        {{ $slot }}
    </div>
</div>
