@blaze
@props(['tag' => 'thead'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-table-header']) }}>{{ $slot }}</{{ $tag }}>
