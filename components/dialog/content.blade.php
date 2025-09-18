@props([
    'tag' => 'dialog',
    'showCloseButton' => true,
])

@tag($tag)
    data-lux="dialog.content"
    x-ref="dialog"
    x-trap.noscroll="open"
    @click="closeOnOutsideClick"
@content
    {{ $slot }}

    @if($showCloseButton)
        <button
            data-lux="dialog.cross"
            @click="close"
        >
            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
            <span class="sr-only">Close</span>
        </button>
    @endif
@endTag
