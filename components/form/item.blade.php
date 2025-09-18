@props([
    'name' => '',
    'tag' => 'div',
])
@tag($tag)
    x-form:item
    @error($name) error="true" @enderror
    class="space-y-2"
@content
    {{ $slot }}
@endTag
