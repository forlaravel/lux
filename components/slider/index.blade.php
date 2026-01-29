@blaze
@props(['tag' => 'div', 'value' => 0, 'min' => 0, 'max' => 100, 'step' => 1, 'name' => null, 'disabled' => false])
<{{ $tag }}
    x-data="{
        value: @wireOr($value, handlePersist: true),
        min: {{ $min }},
        max: {{ $max }},
        step: {{ $step }},
        dragging: false,
        get percentage() {
            return ((this.value - this.min) / (this.max - this.min)) * 100;
        },
        updateFromEvent(e) {
            const rect = this.$refs.track.getBoundingClientRect();
            const pct = Math.max(0, Math.min(1, (e.clientX - rect.left) / rect.width));
            const raw = this.min + pct * (this.max - this.min);
            this.value = Math.round(raw / this.step) * this.step;
        }
    }"
    x-modelable="value"
    role="slider"
    :aria-valuenow="value"
    aria-valuemin="{{ $min }}"
    aria-valuemax="{{ $max }}"
    :data-disabled="@js($disabled) || undefined"
    {{ $attributes->mergeTailwind(['class' => 'lux-slider']) }}
    @if($disabled) data-disabled @endif
>
    <span class="lux-slider-track" x-ref="track"
        @mousedown.prevent="dragging = true; updateFromEvent($event)"
        @touchstart.prevent="dragging = true; updateFromEvent($event.touches[0])"
    >
        <span class="lux-slider-range" :style="'width:' + percentage + '%'"></span>
    </span>
    <span class="lux-slider-thumb"
        tabindex="0"
        :style="'left:' + percentage + '%'"
        style="position:absolute; transform: translateX(-50%);"
        @mousedown.prevent="dragging = true"
        @touchstart.prevent="dragging = true"
        @keydown.right.prevent="value = Math.min(max, value + step)"
        @keydown.left.prevent="value = Math.max(min, value - step)"
        @keydown.up.prevent="value = Math.min(max, value + step)"
        @keydown.down.prevent="value = Math.max(min, value - step)"
    ></span>
    @if($name)
        <input type="hidden" name="{{ $name }}" x-model="value" wire:ignore>
    @endif
</{{ $tag }}>
