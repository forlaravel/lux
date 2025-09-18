@props([
    'tag' => 'h1',
])

@open($tag) class="scroll-m-20 text-4xl font-extrabold tracking-tight lg:text-5xl" @content
    {{ $slot }}
@close
