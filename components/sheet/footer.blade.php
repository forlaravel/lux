@blaze
@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-sheet-footer']) }}>{{ $slot }}</{{ $tag }}>
