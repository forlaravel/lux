@props([
    'tag' => 'p',
])
@open($tag)
x-form:description
class="text-[0.8rem] text-muted-foreground"
@content
    {{ $slot }}
@close
