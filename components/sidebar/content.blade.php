@props([
    'tag' => 'div',
])

@aware([
    'fixed' => true,
])

@php
    $classes = 'lux-sidebar-content flex-1 overflow-y-auto p-4 w-64';
    if ($fixed) {
        $classes .= ' max-h-[calc(100vh-theme(spacing.32))]';
    }
@endphp

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => $classes]) }}>
    {{ $slot }}
</{{ $tag }}>
