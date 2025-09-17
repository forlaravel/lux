@props(['value'])

<div
@mergeAttributes
    {{ $attributes->class(['lux-tabs__content']) }}
    x-cloak
    data-tab="{{ $value }}"
    x-show="activeTab === '{{ $value }}'"
@endMergeAttributes
>
    {{ $slot }}
</div>
