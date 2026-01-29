@blaze
@aware(['name'])

@props([
    'name' => '',
    'tag' => 'p',
])

@error($name)
    <{{ $tag }}
        x-form:message.assertive
        {{ $attributes->mergeTailwind(['class' => 'lux-form-message']) }}
    >
        {{ $message }}
    </{{ $tag }}>
@enderror
