@blaze
{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@props([
    'value' => null,
    'tag' => 'div',
    'name' => null,
    'multiple' => false,
    'searchable' => false,
    'placeholder' => 'Select an option',
    'clientSearch' => true,
    'size' => 'md',
])

@php
$value = $value === null && $multiple ? [] : $value;
@endphp

<{{$tag}} 
    {{ $attributes->whereDoesntStartWith(['required', 'wire:model', 'wire:search'])->mergeTailwind(['class' => 'lux-select']) }}
    x-select="{
        multiple: @js($multiple),
        inputText: @wireOr('', 'wire:search'),
        clientSearch: @js($clientSearch),
        selected: @wireOr($value, handlePersist: true)
    }"
    role="listbox"
    x-modelable="selected"
    x-id="['select-trigger']"
    :aria-labelledby="$id('select-trigger')"
    x-data
>
    {{ $slot }}
    @if($name)
        <input autocomplete="off" tabindex="-1" {{ $attributes->only(['required']) }} wire:ignore type="input" class="opacity-0 absolute" name="{{ $name }}" x-ref="hiddenInput">
    @endif
</{{$tag}}>