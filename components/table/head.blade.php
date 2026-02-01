@blaze
@props(['tag' => 'th'])
<{{ $tag }} scope="col" {{ $attributes->mergeTailwind(['class' => 'lux-table-head']) }}>{{ $slot }}</{{ $tag }}>
