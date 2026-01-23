@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-sidebar-footer border-t p-4 w-64']) }}>
    {{ $slot }}
</{{ $tag }}>
