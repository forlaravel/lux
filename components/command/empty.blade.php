@blaze
<div
    x-show="resultCount === 0"
    x-cloak
    {{ $attributes->mergeTailwind(['class' => 'lux-command-empty']) }}
>
    {{ $slot }}
</div>
