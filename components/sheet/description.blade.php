@blaze
@props(['tag' => 'p'])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-sheet-description']) }}>{{ $slot }}</{{ $tag }}>
