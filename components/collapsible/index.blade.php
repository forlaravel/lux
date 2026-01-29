@blaze
@props(['tag' => 'div', 'open' => false])
<{{ $tag }}
    x-data="{ open: @wireOr($open, handlePersist: true) }"
    x-modelable="open"
    {{ $attributes->mergeTailwind(['class' => 'lux-collapsible']) }}
>{{ $slot }}</{{ $tag }}>
