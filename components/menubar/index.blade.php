@blaze
@props(['tag' => 'div'])
<{{ $tag }}
    x-data="menubar"
    role="menubar"
    {{ $attributes->merge(['class' => 'lux-menubar']) }}
>{{ $slot }}</{{ $tag }}>
