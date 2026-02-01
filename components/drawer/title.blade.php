@blaze
@props(['tag' => 'h2'])

<{{ $tag }} :id="$id('drawer-title')" {{ $attributes->merge(['class' => 'lux-drawer-title']) }}>{{ $slot }}</{{ $tag }}>
