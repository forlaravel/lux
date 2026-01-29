
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-drawer-footer']) }}>{{ $slot }}</{{ $tag }}>
