@props([
    'tag' => 'p',
])

@tag($tag) class="text-sm text-muted-foreground" @content
    {{ $slot }}
@endTag
