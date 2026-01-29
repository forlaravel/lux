@blaze
@props(['tag' => 'caption'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-table-caption']) }}>{{ $slot }}</{{ $tag }}>
