@props([
    'title' => null,
])

<div
@mergeAttributes
    data-lux="sidebar.group"
@endMergeAttributes
>
    @if($title)
        <div data-lux="sidebar.group-title">{{ $title }}</div>
    @endif
    {{ $slot }}
</div>