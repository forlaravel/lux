@props([
    'side' => 'left',
])

<aside
@mergeAttributes
    data-lux="sidebar"
    data-side="{{ $side }}"
    :data-open="sidebarOpen ? 'true' : 'false'"
@endMergeAttributes
>
    {{ $slot }}
</aside>