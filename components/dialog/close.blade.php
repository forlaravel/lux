@props([
    'tag' => 'button',
])

<{{ $tag }}
    {{ $attributes }}
    @click="close()"
>
    {{ $slot }}
</{{ $tag }}>
