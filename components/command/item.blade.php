@blaze
@props([
    'disabled' => false,
])
<template x-if="$el.content.textContent.toLowerCase().includes(search.toLowerCase())">
<button
    type="button"
    role="option"
    aria-disabled="{{ $disabled ? 'true' : 'false' }}"
    data-disabled="{{ $disabled ? 'true' : 'false' }}"
    x-on:mouseover="$el.dataset.focusSource = 'mouse'; $el.focus()"
    x-on:mouseleave="if ($el.dataset.focusSource === 'mouse') $el.blur()"
    {{ $attributes->mergeTailwind(['class' => 'lux-command-item command-item w-full focus:bg-accent focus:text-accent-foreground data-[disabled=true]:pointer-events-none data-[disabled=true]:opacity-50']) }}
>
    {{ $slot }}
</button>
</template>
