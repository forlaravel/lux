@props([
    'tag' => 'div',
])

@aware([
    'variant' => 'switch',
])

@open($tag)
    data-lux="tabs.list"
    data-variant="{{ $variant }}"
@content
    {{ $slot }}
@close
