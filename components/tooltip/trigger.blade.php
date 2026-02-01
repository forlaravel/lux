@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    x-ref="trigger"
    :aria-describedby="show ? $id('tooltip') : null"
    {{ $attributes->merge(['class' => 'lux-tooltip-trigger']) }}
>{{ $slot }}</{{ $tag }}>
