@props([
    'tag' => 'div',
])

@open($tag)
class="text-sm [&_p]:leading-relaxed"
@content
    {{ $slot }}
@close