@blaze
{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@props([
    'tag' => 'span',
])

@aware([
    'searchable' => false,
    'multiple' => false,
    'placeholder' => 'Select an option',
])

@if($searchable)
<div x-ref="input" {{ $attributes->classTailwind(["lux-select-value flex w-full items-center flex-wrap", "gap-1.5" => $multiple]) }}>
@endif
    <{{ $tag }}
        wire:ignore
        class="flex gap-1.5 flex-wrap items-center"
        :class="{
            'text-muted-foreground': isEmpty,
            'text-text': !isEmpty,
        }"
        {{ $attributes }}
    >
        {{-- <span x-text="isEmpty"></span> --}}
        <template x-if="multiple && !isEmpty">
            <template x-for="item in selectedLabels" :key="item.value">
                <span x-text="item.label" class="bg-accent text-accent-foreground py-1 px-2.5 rounded text-xs"></span>
            </template>
        </template>
        <template x-if="!multiple && !isEmpty && !inputText.length && selectedLabels">
            <span x-text="selectedLabels.label || '{{ $placeholder ?? '' }}'" class="truncate"></span>
        </template>
        @if(!$searchable)
        <template x-if="isEmpty">
            <span x-text="'{{ $placeholder ?? '' }}'" class="truncate"></span>
        </template>
        @endif
    </{{ $tag }}>
@if($searchable)
    <input
        wire:ignore
        class="bg-transparent text-text focus:outline-none grow w-0 placeholder:text-muted-foreground   text-sm leading-none border-none py-0.5 px-0 focus:ring-0"
        @focus="hasInputFocus = true"
        @blur="hasInputFocus = false; close()"
        @keydown.backspace="inputText.length === 0 ? reset() : null"
        :placeholder="(isEmpty) ? '{{ $placeholder }}' : null"
        x-model="inputText"
        {{ $attributes }}
        />
</div>
@endif
