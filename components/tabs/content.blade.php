@props(['value'])

<div
@mergeAttributes
    data-lux="tabs.content"
    data-tab="{{ $value }}"
    x-show="activeTab === '{{ $value }}'"
    x-cloak
@endMergeAttributes
>
    {{ $slot }}
</div>
