@blaze
@props([
    'tag' => 'div',
    'value'
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-tabs-content']) }}
    data-tab="{{ $value }}"
    role="tabpanel"
    :id="tabsId + '-tabpanel-{{ $value }}'"
    :aria-labelledby="tabsId + '-tab-{{ $value }}'"
    tabindex="0"
    x-show="activeTab === '{{ $value }}'"
    x-cloak
>
    {{ $slot }}
</{{ $tag }}>
