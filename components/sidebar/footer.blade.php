@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'border-t p-4 w-64']) }}>
    {{ $slot }}
</{{ $tag }}>
