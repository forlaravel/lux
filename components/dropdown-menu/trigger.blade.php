@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    @if($tag === 'button')
    type="button"
    aria-haspopup="menu"
    :aria-expanded="open.toString()"
    @endif
    x-ref="trigger"
    @click="open = !open"
    {{ $attributes->merge(['class' => 'lux-dropdown-menu-trigger']) }}
>
    {{ $slot }}
</{{ $tag }}>
