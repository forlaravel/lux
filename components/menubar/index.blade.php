@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-data="menubar"
    role="menubar"
    {{ $attributes->mergeTailwind(['class' => 'lux-menubar']) }}
>{{ $slot }}</{{ $tag }}>
