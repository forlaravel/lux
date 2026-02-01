@blaze
@aware(['orientation' => 'horizontal'])
<div role="group" aria-roledescription="slide" {{ $attributes->mergeTailwind([
    'class' => 'lux-carousel-item basis-full flex flex-col justify-center items-center' . ($orientation === 'vertical' ? ' h-48' : ' h-full')
])}}>
    {{ $slot }}
</div>
