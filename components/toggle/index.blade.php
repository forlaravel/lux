@blaze
@props(['tag' => 'button', 'variant' => 'default', 'size' => 'md', 'pressed' => false])
<{{ $tag }}
    x-data="{ pressed: @wireOr($pressed, handlePersist: true) }"
    type="button"
    x-on:click="pressed = !pressed"
    x-modelable="pressed"
    :aria-pressed="pressed?.toString()"
    :data-pressed="pressed?.toString()"
    {{ $attributes->merge(['class' => "lux-toggle lux-toggle-variant-{$variant} lux-toggle-size-{$size}"]) }}
>{{ $slot }}</{{ $tag }}>
