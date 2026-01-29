@blaze
@props([
    'tag' => 'div',
    'open' => false,
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-sheet']) }}
    x-data="{
        open: @wireOr($open, handlePersist: true),
        show() {
            this.open = true;
            $refs.dialog.showModal();
        },
        close() {
            this.open = false;
            $refs.dialog.close();
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
