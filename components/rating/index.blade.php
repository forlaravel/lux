@blaze
@props([
    'tag' => 'div',
    'value' => 0,
    'max' => 5,
    'name' => null,
    'disabled' => false,
    'readonly' => false,
    'size' => 'md',
])

<{{ $tag }}
    x-data="{
        value: @wireOr($value, handlePersist: true),
        hovered: 0,
        max: {{ $max }},
        get displayValue() {
            return this.hovered || this.value;
        },
        rate(star) {
            if ({{ $disabled ? 'true' : 'false' }} || {{ $readonly ? 'true' : 'false' }}) return;
            this.value = this.value === star ? 0 : star;
        },
    }"
    x-modelable="value"
    role="radiogroup"
    aria-label="Rating"
    {{ $attributes->mergeTailwind(['class' => "lux-rating lux-rating-size-{$size}"]) }}
    @if($disabled) data-disabled @endif
    @if($readonly) data-readonly @endif
>
    <template x-for="star in max" :key="star">
        <button
            type="button"
            class="lux-rating-star"
            x-on:click="rate(star)"
            x-on:mouseenter="hovered = star"
            x-on:mouseleave="hovered = 0"
            x-bind:class="{
                'lux-rating-star-filled': star <= displayValue,
                'lux-rating-star-empty': star > displayValue,
            }"
            x-bind:aria-label="star + ' star' + (star !== 1 ? 's' : '')"
            x-bind:aria-checked="(star === value).toString()"
            role="radio"
            @if($disabled) disabled @endif
            @if($readonly) tabindex="-1" @endif
        >
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z" clip-rule="evenodd" />
            </svg>
        </button>
    </template>

    @if($name)
        <input type="hidden" name="{{ $name }}" x-model="value" wire:ignore>
    @endif
</{{ $tag }}>
