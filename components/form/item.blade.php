@props([
    'name' => '',
    'tag' => 'div',
])
@open($tag)
    x-form:item
    @error($name) error="true" @enderror
    class="space-y-2"
@content
    {{ $slot }}
@close
