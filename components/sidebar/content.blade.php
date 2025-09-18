@props([])

<div
@mergeAttributes
    data-lux="sidebar.content"
@endMergeAttributes
>
    {{ $slot }}
</div>