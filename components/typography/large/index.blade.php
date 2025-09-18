@props([
    'tag' => 'div',
])

@open($tag) class="text-lg font-semibold" @content
    {{ $slot }}
@close
