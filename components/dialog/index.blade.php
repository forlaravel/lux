@props([
    'tag' => 'div',
    'open' => false,
])

<{{ $tag }} 
@mergeAttributes
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
            if(event.target === this.$refs.dialog) {
                this.close();
            }
        }
    }"
    x-modelable="open"
@endMergeAttributes
>
    {{ $slot }}
</{{ $tag}}>
