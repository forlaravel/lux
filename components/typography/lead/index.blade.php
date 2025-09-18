@props([
    'tag' => 'p',
])

@tag($tag) class="text-xl text-muted-foreground" @content
    {{ $slot }}
@endTag
