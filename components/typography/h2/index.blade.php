@props([
    'tag' => 'h2',
])

@tag($tag) class="scroll-m-20 border-b pb-2 text-3xl font-semibold tracking-tight first:mt-0" @content
    {{ $slot }}
@endTag
