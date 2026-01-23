@props([
    'tag' => 'img',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'aspect-square h-full w-full']) }}
/>
