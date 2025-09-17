@props(['value'])
@aware([
    'variant' => 'switch',
])

<button
@mergeAttributes
    {{ $attributes->class([
        'lux-tabs__trigger',
        'lux-tabs__trigger--switch' => $variant === 'switch',
        'lux-tabs__trigger--underline' => $variant === 'underline',
        'lux-tabs__trigger--simple' => $variant === 'simple',
    ]) }}
    @click="activeTab = '{{ $value }}'"
    x-bind:class="{ 'active': activeTab === '{{ $value }}' }"
@endMergeAttributes
>
    {{ $slot }}
</button>
