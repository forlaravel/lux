
@aware(['variant' => 'default', 'size' => 'md'])
@props(['tag' => 'button', 'value'])
<{{ $tag }}
    type="button"
    x-on:click="toggle(@js($value))"
    :aria-pressed="isPressed(@js($value))?.toString()"
    :data-pressed="isPressed(@js($value))?.toString()"
    {{ $attributes->mergeTailwind(['class' => "lux-toggle lux-toggle-variant-{$variant} lux-toggle-size-{$size}"]) }}
>{{ $slot }}</{{ $tag }}>
