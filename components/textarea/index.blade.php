@props([
    'tag' => 'textarea',
    'type' => 'text',
])

<{{ $tag }}
    type="{{ $type }}"
    x-data="{ value: @wireOr((string) $slot, handlePersist: true)}"
    x-model="value"
    autocomplete="off"
    {{ $attributes->mergeTailwind(['class' => 'lux-textarea']) }}
>{{ $slot }}</{{ $tag }}>
