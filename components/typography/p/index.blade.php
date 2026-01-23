@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'leading-7 [&:not(:first-child)]:mt-6']) }}>
    {{ $slot }}
</{{ $tag }}>
