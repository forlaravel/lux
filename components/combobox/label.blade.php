
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-combobox-label']) }}>{{ $slot }}</{{ $tag }}>
