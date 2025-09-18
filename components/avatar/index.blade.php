@props([
    'tag' => 'div',
])

@open($tag)
class="relative flex h-10 w-10 shrink-0 overflow-hidden rounded-full"
@content
    {{ $slot }}
@close
