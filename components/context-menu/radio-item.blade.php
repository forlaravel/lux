@props(['name', 'value'])

<div 
    role="menuitemradio"
    tabindex="0"
    {{ $attributes->mergeTailwind(['class' => 'relative flex items-center rounded-sm py-1.5 pl-8 pr-2 text-sm focus:bg-accent focus:text-accent-foreground cursor-default select-none']) }}
    @click="$dispatch('change', {name: '{{ $name }}', value: '{{ $value }}'})"
    @mouseover="$el.focus()"
    @mouseleave="$el.blur()"
    x-data="{ checked: @entangle('checked') }">
    <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center">
        <input type="radio" x-model="checked" name="{{ $name }}" value="{{ $value }}" class="hidden" />
        <template x-if="checked">
            <svg class="h-2 w-2 fill-current" viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="3" />
            </svg>
        </template>
    </span>
    {{ $slot }}
</div>