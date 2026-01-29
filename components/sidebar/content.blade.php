@props([
    'tag' => 'div',
])

@aware([
    'fixed' => true,
])

@php
    $fixedClass = $fixed ? 'lux-sidebar-content-fixed' : '';
@endphp

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => "lux-sidebar-content $fixedClass"]) }}>
    {{ $slot }}
</{{ $tag }}>
