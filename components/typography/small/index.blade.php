@props([
    'tag' => 'small',
])

@open($tag) class="text-sm font-medium leading-none" @content
    {{ $slot }}
@close
