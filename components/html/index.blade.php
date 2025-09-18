@props([
    'tag' => 'html',
])

@open($tag)
lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    x-data
    x-darkmode
    class="{{ array_key_exists('darkMode', request()->cookie()) ? 'dark' : '' }}"
@content
{{ $slot }}
@close