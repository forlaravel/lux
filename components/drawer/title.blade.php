
@props(['tag' => 'h2'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-drawer-title']) }}>{{ $slot }}</{{ $tag }}>
