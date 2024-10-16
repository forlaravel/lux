@aware(['name'])

@props([
    'name' => '',
    'tag' => 'p',
])

@error($name)
    <{{ $tag }}
        @mergeAttributes
        x-form:message.assertive
        class="text-[0.8rem] font-medium text-destructive"
        @endMergeAttributes
    >
        {{ $message }}
    </{{ $tag }}>
@enderror
