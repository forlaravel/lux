@props([
    'tag' => 'small',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'text-sm font-medium leading-none']) }}>
    {{ $slot }}
</{{ $tag }}>
