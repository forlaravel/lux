@blaze
@props([
    'tag' => 'label',
    "for" => null,
])

<{{ $tag }}
    x-data
    class="lux-label"
    @if($for) for="{{ $for }}" @endif
    :class="{ 'cursor-pointer': $el.hasAttribute('for') }"
    {{ $attributes }}
>
    {{ $slot }}
</{{ $tag }}>
