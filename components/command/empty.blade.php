@blaze
<div
    x-show="resultCount === 0"
    x-cloak
    {{ $attributes->merge(['class' => 'lux-command-empty']) }}
>
    {{ $slot }}
</div>
