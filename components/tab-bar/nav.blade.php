@props([
    'tag' => 'nav',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-tab-bar']) }}
>
    {{ $slot }}
</{{ $tag }}>
