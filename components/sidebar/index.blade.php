@props([
    'side' => 'left',
])

@aware([
    'fixed' => true,
])

<aside
@mergeAttributes
    data-lux="sidebar"
    data-side="{{ $side }}"
    data-fixed="{{ $fixed ? 'true' : 'false' }}"
    :data-open="sidebarOpen ? 'true' : 'false'"
@endMergeAttributes
>
    {{ $slot }}
</aside>