@blaze
@aware(['orientation' => 'horizontal'])
<div class="lux-carousel-content overflow-hidden w-full">
    <div class="lux-carousel-content-inner flex {{ $orientation === 'vertical' ? 'flex-col' : '' }}" x-ref="slides">
        {{ $slot }}
    </div>
</div>
