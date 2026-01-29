@blaze
@props(['tag' => 'button', 'disabled' => false])
<{{ $tag }}
    type="button" role="menuitem"
    x-on:click="activeMenu = null"
    @disabled($disabled)
    :data-disabled="@js($disabled) || undefined"
    {{ $attributes->mergeTailwind(['class' => 'lux-menubar-item']) }}
>{{ $slot }}</{{ $tag }}>
