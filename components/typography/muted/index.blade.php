@props([
    'tag' => 'p',
])

@open($tag) class="text-sm text-muted-foreground" @content
    {{ $slot }}
@close
