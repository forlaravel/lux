@props([
    'tag' => 'h3',
])

@open($tag) class="scroll-m-20 text-2xl font-semibold tracking-tight" @content
    {{ $slot }}
@close
