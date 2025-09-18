@props([
    'tag' => 'div',
    'value'
])

@tag($tag)
    data-lux="tabs.content"
    data-tab="{{ $value }}"
    x-show="activeTab === '{{ $value }}'"
    x-cloak
@content
    {{ $slot }}
@endTag
