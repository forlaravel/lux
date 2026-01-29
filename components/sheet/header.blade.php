@blaze
@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-sheet-header']) }}>{{ $slot }}</{{ $tag }}>
