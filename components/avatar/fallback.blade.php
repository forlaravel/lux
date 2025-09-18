@props([
    'tag' => 'div',
])

@open($tag)
class="flex h-full w-full items-center justify-center rounded-full bg-gray-200"
@content
    {{ $slot }}
@close