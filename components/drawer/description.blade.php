@blaze
@props(['tag' => 'p'])

<{{ $tag }} :id="$id('drawer-description')" {{ $attributes->mergeTailwind(['class' => 'lux-drawer-description']) }}>{{ $slot }}</{{ $tag }}>
