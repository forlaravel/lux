<div
    x-on:click="show()"
    {{ $attributes->merge(['class' => 'lux-drawer-trigger']) }}
>{{ $slot }}</div>
