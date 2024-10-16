@props(['orientation' => 'horizontal'])
<div class="overflow-hidden w-full">
    <div class="flex {{ $orientation === 'vertical' ? 'flex-col' : '' }}" x-ref="slides">
        {{ $slot }}
    </div>
</div>
