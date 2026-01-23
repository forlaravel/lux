@props([
    'tag' => 'div',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-dialog-footer flex flex-col-reverse sm:flex-row sm:justify-end sm:space-x-2 mt-4']) }}>
    {{ $slot }}
</{{ $tag }}>
