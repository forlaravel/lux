@props([])

<button
@mergeAttributes
    data-lux="sidebar.trigger"
    @click="$dispatch('toggle-sidebar')"
@endMergeAttributes
>
    {{ $slot }}
</button>