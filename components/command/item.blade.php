@props([
    'disabled' => false,
])
<template x-if="$el.content.textContent.toLowerCase().includes(search.toLowerCase())">
<button 
    type="button"
    aria-disabled="{{ $disabled ? 'true' : 'false' }}"
    data-disabled="{{ $disabled ? 'true' : 'false' }}"
    x-on:mouseover="$el.focus()"
    x-on:mouseleave="$el.blur()"
    {{ $attributes->merge(['class' => 'cursor-pointer command-item w-full relative flex cursor-default select-none items-center rounded-sm px-2 py-1.5 text-sm outline-none 
    focus:bg-accent 
    focus:text-accent-foreground 
    data-[disabled=true]:pointer-events-none 
    data-[disabled=true]:opacity-50']) }}
>
    {{ $slot }}
</button>
</template>