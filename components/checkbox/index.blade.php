@blaze
@props([
    'tag' => 'button',
    'id' => null,
    'checked' => false,
    'name' => null,
    'value' => null,
])

<{{ $tag }}
    x-data="{
        checked: @wireOr($checked, handlePersist: true),
    }"
    type="button"
    id="{{ $id }}"
    x-on:click="checked = !checked"
    x-modelable="checked"
    :aria-checked="checked?.toString()"
    :data-checked="checked?.toString()"
    role="checkbox"
    class="peer lux-checkbox"
    {{ $attributes }}
>
    @if($name)
        <input autocomplete="off" tabindex="-1" {{ $attributes->only(['required']) }} wire:ignore x-model="checked" type="checkbox" class="opacity-0 absolute" name="{{ $name }}" value="{{ $value ?? 'on' }}" x-ref="hiddenInput">
    @endif

    <div x-show="checked" class="lux-checkbox-indicator">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon h-4 w-4"><path d="M20 6 9 17l-5-5"></path></svg>
    </div>
</{{ $tag }}>
