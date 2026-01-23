@props([
    'tag' => 'code',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'relative rounded bg-muted px-[0.3rem] py-[0.2rem] font-mono text-sm font-semibold']) }}>{{ $slot }}</{{ $tag }}>
