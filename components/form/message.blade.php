@aware(['name'])

@props([
    'name' => '',
    'tag' => 'p',
])

@error($name)
    <{{ $tag }}
        x-form:message.assertive
        {{ $attributes->mergeTailwind(['class' => 'lux-form-message text-[0.8rem] font-medium text-destructive']) }}
    >
        {{ $message }}
    </{{ $tag }}>
@enderror
