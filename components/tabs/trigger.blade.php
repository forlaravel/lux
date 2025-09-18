@props([
    'tag' => 'button',
    'value'
])
@aware([
    'variant' => 'switch',
])

@open($tag)
    data-lux="tabs.trigger"
    data-variant="{{ $variant }}"
    data-value="{{ $value }}"
    x-bind:data-active="activeTab === '{{ $value }}' ? 'true' : 'false'"
    x-on:click="activeTab = '{{ $value }}'"
@content
    {{ $slot }}
@close
