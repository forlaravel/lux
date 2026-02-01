{{-- @blaze --}}
@props([
    'tag' => 'img',
])

<{{ $tag }}
    {{ $attributes->merge(['class' => 'lux-avatar-image']) }}
/>
