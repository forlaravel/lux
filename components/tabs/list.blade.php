@aware([
    'variant' => 'switch',
])

<div
@mergeAttributes
    {{ $attributes->class([
        'lux-tabs__list',
        'lux-tabs__list--switch' => $variant === 'switch',
        'lux-tabs__list--underline' => $variant === 'underline',
        'lux-tabs__list--simple' => $variant === 'simple',
    ]) }}
@endMergeAttributes
>
    {{ $slot }}
</div>
