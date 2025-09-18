@props([
    'tag' => 'div',
])

@tag($tag) class="text-lg font-semibold" @content
    {{ $slot }}
@endTag
