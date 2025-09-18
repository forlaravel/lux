@props([
    'tag' => 'p',
])

@tag($tag) class="leading-7 [&:not(:first-child)]:mt-6" @content
    {{ $slot }}
@endTag
