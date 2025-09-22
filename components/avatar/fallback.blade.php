@props([
    'tag' => 'div',
])

@open($tag)
class="flex h-full w-full items-center justify-center rounded-full bg-accent text-accent-foreground"
@content
    {{ $slot }}
@close