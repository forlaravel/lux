@props([
    'tag' => 'ul',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-list my-6 ml-6 list-disc space-y-2']) }}>
    {{ $slot }}
</{{ $tag }}>
