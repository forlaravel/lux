@props([
    'tag' => 'h1',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-h1 scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl']) }}>
    {{ $slot }}
</{{ $tag }}>
