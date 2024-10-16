@props([
    'id' => null,
    'checked' => false,
])

@php 
$tryWireModelWithFallbackTo = $attributes->whereStartsWith('wire:model')->first() ?? null;
@endphp

<div
    x-data="{ checked: {{ $tryWireModelWithFallbackTo ? "\$wire.entangle('$tryWireModelWithFallbackTo')" : ($checked ? 'true' : 'false') }} }"
    class="flex items-center space-x-2"
>
    <button
        type="button"
        id="{{ $id }}"
        x-on:click="checked = !checked"
        :aria-checked="checked.toString()"
        role="checkbox"
        {{ $attributes->merge(['class' => 'peer h-4 w-4 shrink-0 rounded-sm border border-input ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50']) }}
        :class="{ 'bg-primary border-primary text-primary-foreground': checked }"
    >
        <div x-show="checked" class="flex items-center justify-center text-current">
            <svg name="check" class="h-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16"> <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/> </svg> 
        </div>
    </button>
</div>
