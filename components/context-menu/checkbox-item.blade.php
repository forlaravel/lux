@blaze
@props(['checked' => false])

<div
    role="menuitemcheckbox"
    :aria-checked="checked?.toString()"
    tabindex="0"
    {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-checkbox-item relative flex items-center rounded-sm py-1.5 pl-8 pr-2 text-sm focus:bg-accent focus:text-accent-foreground cursor-default select-none']) }}
    @click="open = false"
    x-data="{ checked: @wireOr($checked) }"
    @keydown.enter.prevent="open = false"
    @keydown.space.prevent="open = false"
    x-on:mouseover="$el.dataset.focusSource = 'mouse'; $el.focus()"
    x-on:mouseleave="if ($el.dataset.focusSource === 'mouse') $el.blur()">
    <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center">
        <input type="checkbox" x-model="checked" class="hidden" />
        <template x-if="checked">
            <svg class="h-4 w-4 text-foreground" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
        </template>
    </span>
    {{ $slot }}
</div>
