
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-drawer-header']) }}>{{ $slot }}</{{ $tag }}>
