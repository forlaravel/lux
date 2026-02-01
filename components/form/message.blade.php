@aware(['name'])

@props([
    'name' => '',
    'tag' => 'p',
])

@error($name)
    <{{ $tag }}
        x-form:message.assertive
        {{ $attributes->merge(['class' => 'lux-form-message']) }}
    >
        {{ $message }}
    </{{ $tag }}>
@enderror
