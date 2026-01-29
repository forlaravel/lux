@blaze
<span role="presentation" aria-hidden="true" {{ $attributes->mergeTailwind(['class' => 'lux-breadcrumb-separator']) }}>
    @if(!((string) $slot))
        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right "><path d="m9 18 6-6-6-6"></path></svg>
    @else
        {{ $slot }}
    @endif
    <span class="sr-only">More</span>
</span>
