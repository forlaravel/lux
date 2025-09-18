@aware(['name'])

@props([
    'name' => '',
    'tag' => 'p',
])

@error($name)
    @tag($tag)
        x-form:message.assertive
        class="text-[0.8rem] font-medium text-destructive"
    @content
        {{ $message }}
    @endTag
@enderror
