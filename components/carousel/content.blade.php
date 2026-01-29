@blaze
@props(['orientation' => 'horizontal'])
<div class="lux-carousel-content overflow-hidden w-full">
    <div class="lux-carousel-content-inner {{ $orientation === 'vertical' ? 'flex-col' : '' }}" x-ref="slides">
        {{ $slot }}
    </div>
</div>
