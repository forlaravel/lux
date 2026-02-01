@blaze
@props(['tag' => 'nav'])
<{{ $tag }} role="navigation" aria-label="pagination" {{ $attributes->merge(['class' => 'lux-pagination']) }}>{{ $slot }}</{{ $tag }}>
