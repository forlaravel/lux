@blaze
@props(['name'])

<div {{ $attributes->mergeTailwind(['class' => 'lux-context-menu-radio-group']) }}>
    <input type="radio" name="{{ $name }}" class="hidden" />
    {{ $slot }}
</div>