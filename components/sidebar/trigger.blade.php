@blaze
@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-sidebar-trigger']) }}
    data-lux="sidebar.trigger"
    @click="$dispatch('toggle-sidebar')"
    @if($tag === 'button')
    :aria-expanded="sidebarOpen?.toString()"
    aria-controls="lux-sidebar"
    aria-label="Toggle sidebar"
    @endif
>
    {{ $slot }}
</{{ $tag }}>
