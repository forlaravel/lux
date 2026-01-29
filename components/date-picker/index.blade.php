@blaze
@props(['tag' => 'div', 'value' => null, 'format' => 'Y-m-d', 'placeholder' => 'Pick a date', 'name' => null])
<{{ $tag }}
    x-data="{
        value: @wireOr($value, handlePersist: true),
        format: @js($format),
        get formattedDate() {
            if (!this.value) return null;
            try {
                const date = new Date(this.value);
                return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
            } catch(e) {
                return this.value;
            }
        }
    }"
    x-modelable="value"
    {{ $attributes->mergeTailwind(['class' => 'lux-date-picker']) }}
>
    <x-popover>
        <x-popover.trigger>
            <button type="button" class="lux-button lux-button-variant-outline lux-button-size-md w-[280px] justify-start text-left font-normal" :class="!value && 'text-muted-foreground'">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 size-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg>
                <span x-text="formattedDate || '{{ $placeholder }}'">{{ $placeholder }}</span>
            </button>
        </x-popover.trigger>
        <x-popover.content class="w-auto p-0">
            <x-calendar x-model="value" />
        </x-popover.content>
    </x-popover>
    @if($name)
        <input type="hidden" name="{{ $name }}" x-model="value" wire:ignore>
    @endif
</{{ $tag }}>
