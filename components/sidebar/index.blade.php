@props([
    'tag' => 'aside',
    'side' => 'left',
])

@aware([
    'fixed' => true,
])

@php
    if ($fixed) {
        $baseClasses = 'fixed inset-y-0 z-40 flex flex-col bg-sidebar transition-transform duration-300 ease-in-out w-64';
        if ($side === 'left') {
            $baseClasses .= ' left-0 border-r';
        } else {
            $baseClasses .= ' right-0 border-l';
        }
    } else {
        $baseClasses = 'relative flex flex-col bg-sidebar transition-all duration-300 ease-in-out';
        if ($side === 'left') {
            $baseClasses .= ' order-first border-r';
        } else {
            $baseClasses .= ' order-last border-l';
        }
    }
@endphp

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => $baseClasses]) }}
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
