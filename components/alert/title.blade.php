@props([
    'tag' => 'h5',
])

@open($tag)
class="mb-1 font-medium leading-none tracking-tight"
@content
    {{ $slot }}
@close