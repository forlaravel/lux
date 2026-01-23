@props([
    'tag' => 'small',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-small text-sm font-medium leading-none']) }}>
    {{ $slot }}
</{{ $tag }}>
