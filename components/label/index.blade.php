@props([
    'tag' => 'label',
    "for" => null,
])

<{{ $tag }}
    x-data
    class="lux-label text-sm font-medium leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70"
    @if($for) for="{{ $for }}" @endif
    :class="{ 'cursor-pointer': $el.hasAttribute('for') }"
    {{ $attributes }}
>
    {{ $slot }}
</{{ $tag }}>
