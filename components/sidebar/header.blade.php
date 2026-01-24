@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-sidebar-header']) }}>
    {{ $slot }}
</{{ $tag }}>
