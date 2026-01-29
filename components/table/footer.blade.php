@blaze
@props(['tag' => 'tfoot'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-table-footer']) }}>{{ $slot }}</{{ $tag }}>
