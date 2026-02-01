@props(['tag' => 'div', 'index'])
<{{ $tag }}
    :class="activeIndex === {{ $index }} && 'lux-input-otp-slot-active'"
    {{ $attributes->merge(['class' => 'lux-input-otp-slot']) }}
    @click="focus({{ $index }})"
>
    <input
        type="text"
        inputmode="numeric"
        maxlength="1"
        aria-label="Digit {{ $index + 1 }} of {{ $length ?? 6 }}"
        class="absolute inset-0 w-full h-full text-center bg-transparent border-none outline-none text-sm"
        x-ref="slot-{{ $index }}"
        :value="digits[{{ $index }}]"
        @input="handleInput({{ $index }}, $event)"
        @keydown="handleKeydown({{ $index }}, $event)"
        @focus="activeIndex = {{ $index }}"
        @blur="activeIndex = -1"
        autocomplete="one-time-code"
    />
    <template x-if="!digits[{{ $index }}] && activeIndex === {{ $index }}">
        <div class="lux-input-otp-caret">
            <div class="lux-input-otp-caret-blink"></div>
        </div>
    </template>
</{{ $tag }}>
