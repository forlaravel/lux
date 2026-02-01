@blaze
@props(['tag' => 'div', 'open' => false])
<{{ $tag }}
    x-data="{ open: @wireOr($open, handlePersist: true) }"
    x-modelable="open"
    x-id="['collapsible-content']"
    {{ $attributes->merge(['class' => 'lux-collapsible']) }}
>{{ $slot }}</{{ $tag }}>
