@props([
    'tag' => 'aside',
    'side' => 'left',
])

@aware([
    'fixed' => true,
])

@tag($tag)
    data-lux="sidebar"
    data-side="{{ $side }}"
    data-fixed="{{ $fixed ? 'true' : 'false' }}"
    :data-open="sidebarOpen ? 'true' : 'false'"
@content
    {{ $slot }}
@endTag