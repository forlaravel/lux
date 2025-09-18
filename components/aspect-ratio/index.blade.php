@props([
    'tag' => 'div',
    'ratio'
])

@tag($tag)
    style="aspect-ratio: {{ $ratio }};"
    class="relative overflow-hidden"
@content
    {{ $slot }}
@endTag
