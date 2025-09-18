@props([
    'tag' => 'blockquote',
])

@tag($tag) class="mt-6 border-l-2 pl-6 italic" @content
    {{ $slot }}
@endTag
