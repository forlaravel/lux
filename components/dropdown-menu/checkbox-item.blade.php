@blaze
@props(['checked' => false])

<div
    role="menuitemcheckbox"
    :aria-checked="(@js($checked)).toString()"
    tabindex="0"
    @click="open = false"
    @keydown.enter.prevent="open = false"
    @keydown.space.prevent="open = false"
    x-on:mouseover="$el.dataset.focusSource = 'mouse'; $el.focus()"
    x-on:mouseleave="if ($el.dataset.focusSource === 'mouse') $el.blur()"
    {{ $attributes->merge(['class' => 'lux-dropdown-menu-checkbox-item']) }}
>
    <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center">
        @if($checked)
        <svg class="h-4 w-4" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
        </svg>
        @endif
    </span>
    {{ $slot }}
</div>
