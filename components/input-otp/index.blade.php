@blaze
@props(['tag' => 'div', 'length' => 6, 'name' => null, 'value' => ''])

<{{ $tag }}
    x-data="{
        length: {{ $length }},
        digits: Array({{ $length }}).fill(''),
        activeIndex: -1,
        get value() { return this.digits.join(''); },
        set value(val) {
            const chars = String(val).split('');
            this.digits = Array(this.length).fill('').map((_, i) => chars[i] || '');
        },
        init() {
            this.value = @wireOr($value, handlePersist: true);
        },
        focus(index) {
            this.activeIndex = index;
            this.$nextTick(() => {
                const input = this.$refs['slot-' + index];
                if (input) input.focus();
            });
        },
        handleInput(index, event) {
            const val = event.target.value.slice(-1);
            this.digits[index] = val;
            if (val && index < this.length - 1) this.focus(index + 1);
        },
        handleKeydown(index, event) {
            if (event.key === 'Backspace') {
                if (this.digits[index]) {
                    this.digits[index] = '';
                } else if (index > 0) {
                    this.focus(index - 1);
                    this.digits[index - 1] = '';
                }
                event.preventDefault();
            } else if (event.key === 'ArrowLeft' && index > 0) {
                this.focus(index - 1);
            } else if (event.key === 'ArrowRight' && index < this.length - 1) {
                this.focus(index + 1);
            }
        },
        handlePaste(event) {
            event.preventDefault();
            const text = event.clipboardData.getData('text').replace(/\D/g, '').slice(0, this.length);
            text.split('').forEach((char, i) => { this.digits[i] = char; });
            this.focus(Math.min(text.length, this.length - 1));
        }
    }"
    x-modelable="value"
    {{ $attributes->mergeTailwind(['class' => 'lux-input-otp']) }}
    @paste="handlePaste($event)"
>
    {{ $slot }}
    @if($name)
        <input type="hidden" name="{{ $name }}" :value="value" wire:ignore>
    @endif
</{{ $tag }}>
