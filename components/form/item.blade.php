@props([
    'name' => '',
    'tag' => 'div',
])

<{{ $tag }}
    x-form:item
    @error($name) error="true" @enderror
    {{ $attributes->merge(['class' => 'lux-form-item']) }}
>
    {{ $slot }}
</{{ $tag }}>
