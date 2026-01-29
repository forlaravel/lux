@blaze
@props(['tag' => 'th'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-table-head']) }}>{{ $slot }}</{{ $tag }}>
