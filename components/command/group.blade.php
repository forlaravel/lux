<template x-if="search.length == 0 || 
    Array.from($el.content.firstElementChild.children)
    .map(x => (x.content?.textContent ?? '').toLowerCase())
    .some(x => x.includes(search.toLowerCase()))">
    <div 
        {{-- x-show="Array.from($el.children).filter(x => x.tagName != 'TEMPLATE').length > 1" --}}
        {{ $attributes->mergeTailwind(['class' => 'overflow-hidden p-1 text-foreground']) }}
    >
        <div class="px-2 py-1.5 text-xs font-medium text-muted-foreground">
            {{ $heading }}
        </div>
        {{ $slot }}
    </div>
</template>