@props([
    'tag' => 'h4',
])

@open($tag) class="scroll-m-20 text-xl font-semibold tracking-tight" @content
    {{ $slot }}
@close
