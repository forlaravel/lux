@props([
    'orientation' => 'horizontal',
])
<div {{ $attributes->merge([
    'class' => 'flex flex-col justify-center items-center' . ($orientation === 'vertical' ? ' h-48' : ' h-full')
])}}>
    {{ $slot }}
</div>
