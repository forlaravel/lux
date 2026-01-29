@blaze
@props(['tag' => 'tr'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-table-row']) }}>{{ $slot }}</{{ $tag }}>
