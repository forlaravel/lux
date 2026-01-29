@blaze
@props([
    'tag' => 'p',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-lead']) }}>
    {{ $slot }}
</{{ $tag }}>
