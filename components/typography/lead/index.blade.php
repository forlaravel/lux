@props([
    'tag' => 'p',
])

@open($tag) class="text-xl text-muted-foreground" @content
    {{ $slot }}
@close
