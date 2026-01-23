@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'focus-visible:outline-none']) }}
    @click.stop="show()"
>
    {{ $slot }}
</{{ $tag }}>
