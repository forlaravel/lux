@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    x-ref="trigger"
    :aria-describedby="show ? $id('tooltip') : null"
    {{ $attributes->mergeTailwind(['class' => 'lux-tooltip-trigger']) }}
>{{ $slot }}</{{ $tag }}>
