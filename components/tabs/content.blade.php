@props([
    'tag' => 'div',
    'value'
])

@open($tag)
    data-lux="tabs.content"
    data-tab="{{ $value }}"
    x-show="activeTab === '{{ $value }}'"
    x-cloak
@content
    {{ $slot }}
@close
