@blaze
@props(['tag' => 'nav'])
<{{ $tag }} role="navigation" aria-label="pagination" {{ $attributes->mergeTailwind(['class' => 'lux-pagination']) }}>{{ $slot }}</{{ $tag }}>
