@props([
    'tag' => 'h4',
])

@tag($tag) class="scroll-m-20 text-xl font-semibold tracking-tight" @content
    {{ $slot }}
@endTag
