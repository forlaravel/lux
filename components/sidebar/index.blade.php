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
    {{ $attributes->merge(['class' => "lux-sidebar $positionClass"]) }}
    data-lux="sidebar"
    id="lux-sidebar"
    aria-label="Sidebar"
    x-bind:class="{
        @if($fixed)
            'translate-x-0': sidebarOpen,
            @if($side === 'left')
                '-translate-x-full': !sidebarOpen,
            @else
                'translate-x-full': !sidebarOpen,
            @endif
        @else
            'w-64': sidebarOpen,
            'w-0 opacity-0 overflow-hidden': !sidebarOpen,
        @endif
    }"
>
    {{ $slot }}
</{{ $tag }}>
