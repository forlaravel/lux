@blaze
@aware([
    'combobox' => false,
])

@props([
    'tag' => $combobox ? 'div' : 'button',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-accordion-trigger']) }}
    :aria-expanded="selected == $id('accordion-item')"
    role="button"
    :aria-controls="$id('accordion-content')"
    :id="$id('accordion-trigger')"
    x-on:click="select($id('accordion-item'))"
>
    {{ $slot }}
    <svg :class="{ 'rotate-180': selected == $id('accordion-item') }" xmlns="http://www.w3.org/2000/svg" class="lux-accordion-trigger-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
</{{ $tag }}>
