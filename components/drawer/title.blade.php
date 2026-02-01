@blaze
@props(['tag' => 'h2'])

<{{ $tag }} :id="$id('drawer-title')" {{ $attributes->mergeTailwind(['class' => 'lux-drawer-title']) }}>{{ $slot }}</{{ $tag }}>
