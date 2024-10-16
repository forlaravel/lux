@props(['name'])

<div {{ $attributes }}>
    <input type="radio" name="{{ $name }}" class="hidden" />
    {{ $slot }}
</div>