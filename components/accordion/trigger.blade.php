@aware([
    'combobox' => false,
])

@props([
    'tag' => $combobox ? 'div' : 'button',
])

@open($tag)
    {{ $attributes->class([
        "flex w-full flex-1 items-center justify-between py-4 font-medium hover:underline",
        'focus-visible:underline focus-visible:outline-none',
    ]) }}
    :aria-expanded="selected == $id('accordion-item')"
    role="button"
    :aria-controls="$id('accordion-content')"
    :id="$id('accordion-trigger')"
    x-on:click="select($id('accordion-item'))"
@content
    {{ $slot }}
    <svg :class="{ 'rotate-180': selected == $id('accordion-item') }" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 shrink-0 transition-transform duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
@close
