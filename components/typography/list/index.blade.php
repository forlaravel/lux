@props([
    'tag' => 'ul',
])

@tag($tag) class="my-6 ml-6 list-disc space-y-2" @content
    {{ $slot }}
@endTag
