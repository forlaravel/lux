@props([
    'tag' => 'blockquote',
])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'mt-6 border-l-2 pl-6 italic']) }}>
    {{ $slot }}
</{{ $tag }}>
