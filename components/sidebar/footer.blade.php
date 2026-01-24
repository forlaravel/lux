@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-sidebar-footer']) }}>
    {{ $slot }}
</{{ $tag }}>
