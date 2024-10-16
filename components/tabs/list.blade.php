@aware([
    'variant' => 'switch',
])

<div 
    {{ $attributes->class([
        'inline-flex h-10 items-center justify-center rounded-md bg-muted p-1 text-muted-foreground' => $variant == 'switch',
        'inline-flex h-9 items-center w-full justify-start text-muted-foreground border-b bg-transparent p-0' => $variant == 'underline',
    ]) }}
>
    {{ $slot }}
</div>
