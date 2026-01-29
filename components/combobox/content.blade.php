
@aware(['searchPlaceholder' => 'Search...'])
@props(['tag' => 'div'])
<{{ $tag }}
    x-show="open"
    x-cloak
    x-on:click.outside="open = false; search = ''"
    x-trap="open"
    x-transition:enter="transition ease-out duration-100"
    x-transition:enter-start="opacity-0 scale-95"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-75"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-95"
    {{ $attributes->mergeTailwind(['class' => 'lux-combobox-content']) }}
>
    <div class="flex items-center border-b px-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 size-4 shrink-0 opacity-50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/></svg>
        <input x-model="search" placeholder="{{ $searchPlaceholder }}" class="flex h-10 w-full rounded-md bg-transparent py-3 text-sm outline-none placeholder:text-muted-foreground disabled:cursor-not-allowed disabled:opacity-50">
    </div>
    <div class="lux-combobox-list">
        {{ $slot }}
        <template x-if="filtered.length === 0">
            <div class="lux-combobox-empty">No results found.</div>
        </template>
    </div>
</{{ $tag }}>
