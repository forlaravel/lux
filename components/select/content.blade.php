@props([
    'tag' => 'div',
])

{{-- <template x-teleport="body"> --}}
    <{{ $tag }} 
        @mergeAttributes
        x-ref="content"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="transition ease-in duration-50"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95"
        x-show="open" 
        x-anchor.bottom-start="$refs.trigger"
        @click.away="close()"
        role="listbox"
        :data-side="$refs.trigger.offsetTop < $anchor.y ? 'bottom' : 'top'"
        x-cloak
        x-bind:style="{ width: `${dropdownWidth}px` }"
        class="absolute
            p-1
            top-0
            left-0
            z-50
            max-h-96
            min-w-[8rem]
            overflow-hidden
            rounded-md
            border
            bg-popover
            text-popover-foreground
            shadow-md
            data-[side=bottom]:slide-in-from-top-2 
            data-[side=left]:slide-in-from-right-2 
            data-[side=right]:slide-in-from-left-2 
            data-[side=top]:slide-in-from-bottom-2"
        @endMergeAttributes>
        {{ $slot }}
    </{{ $tag }}>
{{-- </template> --}}
