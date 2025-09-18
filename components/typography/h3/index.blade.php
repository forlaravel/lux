@props([
    'tag' => 'h3',
])

@tag($tag) class="scroll-m-20 text-2xl font-semibold tracking-tight" @content
    {{ $slot }}
@endTag
