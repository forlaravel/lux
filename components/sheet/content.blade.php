@blaze
@props([
    'tag' => 'dialog',
    'side' => 'right',
    'showCloseButton' => true,
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => "lux-sheet-content lux-sheet-content-side-{$side}"]) }}
    x-ref="dialog"
    x-trap.noscroll="open"
    @click="closeOnOutsideClick"
>
    <div class="lux-sheet-content-inner">
        {{ $slot }}
    </div>

    @if($showCloseButton)
        <button class="lux-sheet-close-button" @click="close" type="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
            <span class="sr-only">Close</span>
        </button>
    @endif
</{{ $tag }}>
