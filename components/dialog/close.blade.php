@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-dialog-close']) }}
    @click="close()"
>
    {{ $slot }}
</{{ $tag }}>
