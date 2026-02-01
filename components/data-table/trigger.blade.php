@blaze
@props(['tag' => 'button'])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2']) }} @click="open = !open">
    {{ $slot }}
    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m6 9 6 6 6-6"></path>
    </svg>
</{{ $tag }}>
