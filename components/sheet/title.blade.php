@blaze
@props(['tag' => 'h2'])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-sheet-title']) }}>{{ $slot }}</{{ $tag }}>
