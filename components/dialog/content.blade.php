@props([
    'tag' => 'dialog',
    'showCloseButton' => true,
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'fixed left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] w-full max-w-lg border bg-background p-6 shadow-lg sm:rounded-lg text-foreground opacity-0 scale-95 transition-[opacity,scale,overlay,display] duration-300 ease-out [transition-behavior:allow-discrete] open:opacity-100 open:scale-100 [@starting-style]:open:opacity-0 [@starting-style]:open:scale-95 backdrop:[transition-behavior:allow-discrete] backdrop:bg-black/80 backdrop:opacity-0 backdrop:transition-[opacity,display,overlay] backdrop:duration-300 open:backdrop:opacity-100 [@starting-style]:open:backdrop:opacity-0']) }}
    x-ref="dialog"
    x-trap.noscroll="open"
    @click="closeOnOutsideClick"
>
    {{ $slot }}

    @if($showCloseButton)
        <button
            class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none"
            @click="close"
        >
            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
            <span class="sr-only">Close</span>
        </button>
    @endif
</{{ $tag }}>
