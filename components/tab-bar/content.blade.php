@props([
    'tag' => 'div',
    'value',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-tab-bar-content']) }}
    data-tab="{{ $value }}"
    role="tabpanel"
    :id="$id('tabpanel-{{ $value }}')"
    :aria-labelledby="$id('tab-{{ $value }}')"
    tabindex="0"
    x-show="activeTab === '{{ $value }}'"
    x-cloak
>
    {{ $slot }}
</{{ $tag }}>
