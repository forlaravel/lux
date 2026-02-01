@blaze
@props([
    'tag' => 'div',
    'open' => false,
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog']) }}
    x-id="['alert-dialog-title', 'alert-dialog-description']"
    x-data="{
        open: @wireOr($open, handlePersist: true),
        show() {
            this.open = true;
            $refs.dialog.showModal();
        },
        close() {
            this.open = false;
            $refs.dialog.close();
        }
    }"
    x-modelable="open"
>
    {{ $slot }}
</{{ $tag }}>
