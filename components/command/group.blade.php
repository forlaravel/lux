@blaze
<div
    x-show="search.length === 0 || Array.from($el.querySelectorAll('.command-item')).some(item => item.textContent.toLowerCase().includes(search.toLowerCase()))"
    {{ $attributes->merge(['class' => 'lux-command-group']) }}
>
    <div class="lux-command-group-heading">
        {{ $heading }}
    </div>
    {{ $slot }}
</div>
