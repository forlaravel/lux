
@props(['tag' => 'div', 'open' => false, 'direction' => 'bottom'])
<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-drawer']) }}
    x-data="{
        open: @wireOr($open, handlePersist: true),
        direction: @js($direction),
        show() { this.open = true; },
        close() { this.open = false; }
    }"
    x-modelable="open"
>
    {{ $slot }}
</{{ $tag }}>
