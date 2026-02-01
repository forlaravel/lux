@blaze
@props([
    'tag' => 'div',
    'open' => false,
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-dialog']) }}
    x-id="['dialog-title', 'dialog-description']"
    x-data="{
        open: @wireOr($open, handlePersist: true),
        _triggerEl: null,
        show() {
            this._triggerEl = document.activeElement;
            this.open = true;
            $refs.dialog.showModal();
        },
        close() {
            this.open = false;
            $refs.dialog.close();
            if (this._triggerEl) {
                this._triggerEl.focus();
                this._triggerEl = null;
            }
        },
        closeOnOutsideClick(event) {
            const rect = this.$refs.dialog.getBoundingClientRect();
            const isOutside =
                event.clientX < rect.left ||
                event.clientX > rect.right ||
                event.clientY < rect.top ||
                event.clientY > rect.bottom;

            if(isOutside) {
                this.close();
            }
        }
    }"
    x-modelable="open"
>
    {{ $slot }}
</{{ $tag }}>
