@blaze
@props(['tag' => 'button'])
<{{ $tag }}
    type="button"
    x-ref="trigger"
    x-on:click="activeMenu = activeMenu === menuId ? null : menuId"
    :data-state="activeMenu === menuId ? 'open' : 'closed'"
    {{ $attributes->mergeTailwind(['class' => 'lux-menubar-trigger']) }}
>{{ $slot }}</{{ $tag }}>
