@blaze
@props([
    'tag' => 'input',
    'type' => 'text',
    'mask' => null,
    'value' => null,
    'size' => 'md',
])

<{{ $tag }}
    type="{{ $type }}"
    autocomplete="off"
    x-data="{
        persist: @js($attributes->getWithModifiers('persist')),
        init() {
           // todo make persist work
        }
    }"
    @if($mask)
    x-mask="{{ $mask }}"
    @endif
    {{ $attributes->mergeTailwind(['class' => "lux-input lux-input-size-{$size}"]) }}
/>
