@props([
    'tag' => 'button',
    'id' => null,
    'checked' => false,
    'name' => null,
    'value' => null,
])

@open($tag)
    x-data="{
        checked: @wireOr($checked, handlePersist: true),
    }"
    type="button"
    id="{{ $id }}"
    x-on:click="checked = !checked"
    x-modelable="checked"
    :aria-checked="checked?.toString()"
    role="checkbox"
    class="peer h-4 w-4 shrink-0 rounded-sm border border-input ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
    :class="{ 'bg-primary border-primary text-primary-foreground': checked }"
@content
    @if($name)
        <input autocomplete="off" tabindex="-1" {{ $attributes->only(['required']) }} wire:ignore x-model="checked" type="checkbox" class="opacity-0 absolute" name="{{ $name }}" value="{{ $value ?? 'on' }}" x-ref="hiddenInput">
    @endif

    <div x-show="checked" class="flex items-center justify-center text-current">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon h-4 w-4"><path d="M20 6 9 17l-5-5"></path></svg>
    </div>
@close
