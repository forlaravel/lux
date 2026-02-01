@blaze
@props([
    'disabled' => false,
])
<button
    type="button"
    role="option"
    x-show="$el.textContent.toLowerCase().includes(search.toLowerCase())"
    aria-disabled="{{ $disabled ? 'true' : 'false' }}"
    data-disabled="{{ $disabled ? 'true' : 'false' }}"
    x-on:mouseover="$el.dataset.focusSource = 'mouse'; $el.focus()"
    x-on:mouseleave="if ($el.dataset.focusSource === 'mouse') $el.blur()"
    {{ $attributes->merge(['class' => 'lux-command-item command-item']) }}
>
    {{ $slot }}
</button>
