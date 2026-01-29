
@props(['tag' => 'p'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-drawer-description']) }}>{{ $slot }}</{{ $tag }}>
