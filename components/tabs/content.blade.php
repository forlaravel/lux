@props([
    'tag' => 'div',
    'value'
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'mt-2 ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2']) }}
    data-tab="{{ $value }}"
    x-show="activeTab === '{{ $value }}'"
    x-cloak
>
    {{ $slot }}
</{{ $tag }}>
