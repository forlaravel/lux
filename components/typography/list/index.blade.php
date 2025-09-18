@props([
    'tag' => 'ul',
])

@open($tag) class="my-6 ml-6 list-disc space-y-2" @content
    {{ $slot }}
@close
