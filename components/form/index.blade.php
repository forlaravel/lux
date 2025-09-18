@props([
    'tag' => 'form',
])
@open($tag)
    x-data
    x-form
    class="space-y-8"
@content
    {{ $slot }}
@close
