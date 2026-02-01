@blaze
@props([
    'tag' => 'textarea',
    'type' => 'text',
    'autogrow' => false,
    'size' => 'md',
])

<{{ $tag }}
    type="{{ $type }}"
    x-data="{ value: @wireOr((string) $slot, handlePersist: true)}"
    x-model="value"
    autocomplete="off"
    @if($autogrow)
    x-init="$nextTick(() => { $el.style.height = 'auto'; $el.style.height = $el.scrollHeight + 'px' })"
    x-on:input="$el.style.height = 'auto'; $el.style.height = $el.scrollHeight + 'px'"
    @endif
    {{ $attributes->merge(['class' => "lux-textarea lux-textarea-size-{$size}" . ($autogrow ? ' lux-textarea-autogrow' : '')]) }}
>{{ $slot }}</{{ $tag }}>
