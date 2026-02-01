@blaze
@props(['tag' => 'p'])

<{{ $tag }} :id="$id('drawer-description')" {{ $attributes->merge(['class' => 'lux-drawer-description']) }}>{{ $slot }}</{{ $tag }}>
