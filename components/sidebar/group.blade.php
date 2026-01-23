@props([
    'tag' => 'div',
    'title' => null,
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'flex flex-col gap-1 [&+&]:mt-6']) }}>
    @if($title)
        <div class="mb-2 px-2 text-xs font-semibold uppercase tracking-wider text-muted-foreground">{{ $title }}</div>
    @endif
    {{ $slot }}
</{{ $tag }}>
