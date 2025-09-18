@props([
    'tag' => 'form',
])
@tag($tag)
    x-data
    x-form
    class="space-y-8"
@content
    {{ $slot }}
@endTag
