@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-p leading-7 [&:not(:first-child)]:mt-6']) }}>
    {{ $slot }}
</{{ $tag }}>
