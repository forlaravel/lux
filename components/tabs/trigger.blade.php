@props(['value'])
@aware([
    'variant' => 'switch',
])

<button
@mergeAttributes
    data-lux="tabs.trigger"
    data-variant="{{ $variant }}"
    data-value="{{ $value }}"
    x-bind:data-active="activeTab === '{{ $value }}' ? 'true' : 'false'"
    x-on:click="activeTab = '{{ $value }}'"
@endMergeAttributes
>
    {{ $slot }}
</button>
