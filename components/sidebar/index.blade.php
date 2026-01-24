@props([
    'tag' => 'aside',
    'side' => 'left',
])

@aware([
    'fixed' => true,
])

@php
    $positionClass = $fixed
        ? 'lux-sidebar-fixed ' . ($side === 'left' ? 'lux-sidebar-fixed-left' : 'lux-sidebar-fixed-right')
        : 'lux-sidebar-relative ' . ($side === 'left' ? 'lux-sidebar-relative-left' : 'lux-sidebar-relative-right');
@endphp

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => "lux-sidebar $positionClass"]) }}
    data-lux="sidebar"
    x-bind:class="{
        @if($fixed)
            'translate-x-0': sidebarOpen,
            @if($side === 'left')
                '-translate-x-full': !sidebarOpen,
            @else
                'translate-x-full': !sidebarOpen,
            @endif
        @else
            'w-64 opacity-100': sidebarOpen,
            'w-0 overflow-hidden border-0 opacity-0': !sidebarOpen,
        @endif
    }"
>
    {{ $slot }}
</{{ $tag }}>
