@blaze
@props(['tag' => 'tbody'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-table-body']) }}>{{ $slot }}</{{ $tag }}>
