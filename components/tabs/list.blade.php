@props([
    'tag' => 'div',
])

@aware([
    'variant' => 'switch',
])

@php
$variantClasses = match ($variant) {
    'switch' => 'h-10 justify-center rounded-md bg-muted p-1 text-muted-foreground',
    'underline' => 'h-9 w-full justify-start text-muted-foreground border-b bg-transparent p-0',
    'simple' => 'h-9 w-full justify-start text-muted-foreground bg-transparent p-0 gap-5',
    default => '',
};
@endphp

<{{ $tag }}
    {{ $attributes->mergeTailwind(['class' => 'inline-flex items-center ' . $variantClasses]) }}
>
    {{ $slot }}
</{{ $tag }}>
