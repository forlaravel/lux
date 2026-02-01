@blaze
<div
    {{ $attributes->merge(['class' => 'lux-command-list']) }}
    x-ref="list"
    role="listbox"
>
    {{ $slot }}
</div>
