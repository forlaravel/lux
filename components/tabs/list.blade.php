@props([
    'tag' => 'div',
])

@aware([
    'variant' => 'switch',
])

@tag($tag)
    data-lux="tabs.list"
    data-variant="{{ $variant }}"
@content
    {{ $slot }}
@endTag
