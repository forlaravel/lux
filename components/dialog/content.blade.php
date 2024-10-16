@props([
    'tag' => 'dialog',
    'showCloseButton' => true,
])

<{{ $tag }}
@mergeAttributes
    x-ref="dialog"
    x-trap.noscroll="open"
    @click="closeOnOutsideClick"
    {{ $attributes->class([
        "w-full max-w-lg border bg-background p-6 shadow-lg sm:rounded-lg text-foreground",
        "transition-[translate,opacity,scale,overlay,display] [transition-behavior:allow-discrete] open:animate-in open:fade-in-0 open:zoom-in-95 animate-out duration-200 fade-out-0 zoom-out-95",
        "open:backdrop:opacity-100 [@starting-style]:open:backdrop:opacity-0",
        "backdrop:[transition-behavior:allow-discrete] backdrop:bg-black/80 backdrop:duration-300 backdrop:opacity-0 backdrop:transition-[opacity,display,overlay]"
    ]) }}
@endMergeAttributes>
    {{ $slot }}

    @if($showCloseButton)
        <button
            class="absolute right-4 top-4 rounded-sm opacity-70 ring-offset-background transition-opacity hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none data-[state=open]:bg-accent data-[state=open]:text-muted-foreground"
            @click="close"
        >
            <svg class="w-5 h-5" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg> 
            <span class="sr-only">Close</span>
        </button>
    @endif
</{{ $tag }}>
