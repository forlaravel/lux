@props([
    'tag' => 'nav',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-tab-bar']) }}
    role="tablist"
    @keydown.arrow-right.prevent="focusTab(1)"
    @keydown.arrow-left.prevent="focusTab(-1)"
>
    {{ $slot }}
</{{ $tag }}>
