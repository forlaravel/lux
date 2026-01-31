@props([
    'tag' => 'div',
    'value',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-tab-bar-content']) }}
    data-tab="{{ $value }}"
    x-show="activeTab === '{{ $value }}'"
    x-cloak
>
    {{ $slot }}
</{{ $tag }}>
