@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-data="{ activeMenu: null }"
    role="menubar"
    {{ $attributes->mergeTailwind(['class' => 'lux-menubar']) }}
>{{ $slot }}</{{ $tag }}>
