@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-dialog-trigger focus-visible:outline-none']) }}
    @click.stop="show()"
>
    {{ $slot }}
</{{ $tag }}>
