@props([
    'tag' => 'h2',
])

@open($tag) class="scroll-m-20 border-b pb-2 text-3xl font-semibold tracking-tight first:mt-0" @content
    {{ $slot }}
@close
