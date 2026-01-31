<div
    x-on:click="close()"
    {{ $attributes->merge(['class' => 'lux-drawer-close']) }}
>{{ $slot }}</div>
