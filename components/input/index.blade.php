@props([
    'type' => 'text',
    'mask' => null,
    'value' => null,
])

<input
@mergeAttributes
    type="{{ $type }}"
    autocomplete="off"
    x-data="{
        persist: @js($attributes->getWithModifiers('persist')),
        init() {
           // todo make persist work
        }
    }"
    @if($mask)
    x-mask="{{ $mask }}"
    @endif
    class="
        flex h-11 w-full rounded-md border border-input bg-background px-3 py-2.5 text-sm ring-offset-background
        file:border-0 file:bg-transparent file:text-sm file:font-medium
        placeholder:text-muted-foreground
        focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2
        disabled:cursor-not-allowed disabled:text-muted-foreground
        focus:border-input
    "
@endMergeAttributes
/>
