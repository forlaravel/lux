@props([
    'tag' => 'div',
])

@tag($tag)
class="text-sm [&_p]:leading-relaxed"
@content
    {{ $slot }}
@endTag