<template x-if="search.length == 0 || 
    Array.from($el.content.firstElementChild.children)
    .map(x => (x.content?.textContent ?? '').toLowerCase())
    .some(x => x.includes(search.toLowerCase()))">
    <div 
        {{ $attributes->mergeTailwind(['class' => 'lux-command-group']) }}
    >
        <div class="lux-command-group-heading">
            {{ $heading }}
        </div>
        {{ $slot }}
    </div>
</template>
