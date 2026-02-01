@props([
    'tag' => 'nav',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-tab-bar']) }}
    role="tablist"
    @keydown.arrow-right.prevent="focusTab(1)"
    @keydown.arrow-left.prevent="focusTab(-1)"
>
    {{ $slot }}
</{{ $tag }}>
