@aware([
    'variant' => 'switch',
])

<div
@mergeAttributes
    data-lux="tabs.list"
    data-variant="{{ $variant }}"
@endMergeAttributes
>
    {{ $slot }}
</div>
