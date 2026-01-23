@props([
    'orientation' => 'horizontal',
])
<div {{ $attributes->mergeTailwind([
    'class' => 'lux-carousel-item flex flex-col justify-center items-center' . ($orientation === 'vertical' ? ' h-48' : ' h-full')
])}}>
    {{ $slot }}
</div>
