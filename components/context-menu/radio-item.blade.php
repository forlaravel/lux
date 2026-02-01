@blaze
@props(['name', 'value', 'checked' => false])

<div
    role="menuitemradio"
    :aria-checked="(selectedValue === '{{ $value }}').toString()"
    tabindex="0"
    {{ $attributes->merge(['class' => 'lux-context-menu-radio-item']) }}
    @click="$dispatch('radio-select', { value: '{{ $value }}' }); open = false"
    @keydown.enter.prevent="$dispatch('radio-select', { value: '{{ $value }}' }); open = false"
    @keydown.space.prevent="$dispatch('radio-select', { value: '{{ $value }}' }); open = false"
    x-on:mouseover="$el.dataset.focusSource = 'mouse'; $el.focus()"
    x-on:mouseleave="if ($el.dataset.focusSource === 'mouse') $el.blur()">
    <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center">
        <template x-if="selectedValue === '{{ $value }}'">
            <svg class="h-2 w-2 fill-current" aria-hidden="true" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
            </svg>
        </template>
    </span>
    {{ $slot }}
</div>
