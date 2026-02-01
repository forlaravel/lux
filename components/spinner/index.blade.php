@blaze
@props(['tag' => 'div', 'size' => 'md'])
<{{ $tag }} role="status" aria-label="Loading" {{ $attributes->mergeTailwind(['class' => "lux-spinner lux-spinner-size-{$size}"]) }}>
    <svg class="lux-spinner-icon" aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12a9 9 0 1 1-6.219-8.56" stroke-linecap="round"/></svg>
</{{ $tag }}>
