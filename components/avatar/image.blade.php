@blaze
@props([
    'tag' => 'img',
])

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'lux-avatar-image aspect-square h-full w-full']) }}
/>
