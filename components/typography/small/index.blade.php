@props([
    'tag' => 'small',
])

@tag($tag) class="text-sm font-medium leading-none" @content
    {{ $slot }}
@endTag
