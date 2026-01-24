@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-dialog-trigger']) }}
    @click.stop="show()"
>
    {{ $slot }}
</{{ $tag }}>
