@props([
    'name' => '',
    'tag' => 'div',
])

<{{ $tag }}
    x-form:item
    @error($name) error="true" @enderror
    {{ $attributes->mergeTailwind(['class' => 'space-y-2']) }}
>
    {{ $slot }}
</{{ $tag }}>
