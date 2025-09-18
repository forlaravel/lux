@props([
    'tag' => 'div',
    'ratio'
])

@open($tag)
    style="aspect-ratio: {{ $ratio }};"
    class="relative overflow-hidden"
@content
    {{ $slot }}
@close
