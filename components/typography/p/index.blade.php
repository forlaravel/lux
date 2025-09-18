@props([
    'tag' => 'p',
])

@open($tag) class="leading-7 [&:not(:first-child)]:mt-6" @content
    {{ $slot }}
@close
