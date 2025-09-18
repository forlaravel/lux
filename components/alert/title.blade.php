@props([
    'tag' => 'h5',
])

@tag($tag)
class="mb-1 font-medium leading-none tracking-tight"
@content
    {{ $slot }}
@endTag