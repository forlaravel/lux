@blaze
@props(['tag' => 'dialog'])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-alert-dialog-content']) }}
    x-ref="dialog"
    x-trap.noscroll="open"
    role="alertdialog"
    aria-modal="true"
    :aria-labelledby="$id('alert-dialog-title')"
    :aria-describedby="$id('alert-dialog-description')"
    @keydown.escape.prevent
    @click="
        const rect = $refs.dialog.getBoundingClientRect();
        if ($event.clientX < rect.left || $event.clientX > rect.right || $event.clientY < rect.top || $event.clientY > rect.bottom) $event.preventDefault();
    "
>
    {{ $slot }}
</{{ $tag }}>
