@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'flex flex-col gap-2 p-4 w-64']) }}>
    {{ $slot }}
</{{ $tag }}>
