
@aware(['placeholder' => 'Select an option'])
@props(['tag' => 'button'])
<{{ $tag }}
    type="button"
    x-ref="trigger"
    x-on:click="open = !open"
    :aria-expanded="open?.toString()"
    role="combobox"
    aria-autocomplete="list"
    aria-haspopup="listbox"
    {{ $attributes->mergeTailwind(['class' => 'lux-combobox-trigger lux-button lux-button-variant-outline lux-button-size-md w-[200px] justify-between']) }}
>
    <span x-text="selectedLabel || '{{ $placeholder }}'" :class="!selectedLabel && 'text-muted-foreground'" class="truncate"></span>
    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" class="ml-2 size-4 shrink-0 opacity-50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m7 15 5 5 5-5"/><path d="m7 9 5-5 5 5"/></svg>
</{{ $tag }}>
