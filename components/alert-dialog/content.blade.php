@blaze
@props(['tag' => 'dialog'])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog-content']) }}
    x-ref="dialog"
    x-trap.noscroll="open"
>
    {{ $slot }}
</{{ $tag }}>
