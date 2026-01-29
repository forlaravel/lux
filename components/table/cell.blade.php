@blaze
@props(['tag' => 'td'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-table-cell']) }}>{{ $slot }}</{{ $tag }}>
