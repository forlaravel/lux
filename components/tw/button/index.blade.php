```blade
{{-- resources/views/components/button.blade.php --}}
@props([
    'variant' => 'default',
    'size' => 'default',
    'asChild' => false
])

@php
    $baseClasses = 'inline-flex items-center justify-center whitespace-nowrap text-xs leading-5 font-semibold bg-slate-400/10 rounded-full py-1 px-3 flex items-center space-x-2 hover:bg-slate-400/20 dark:highlight-white/5 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50';

    $variantClasses = [
        'default' => 'bg-primary text-primary-foreground hover:bg-primary/90',
        'destructive' => 'bg-destructive text-destructive-foreground hover:bg-destructive/90',
        'outline' => 'border border-input bg-background hover:bg-accent hover:text-accent-foreground',
        'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80',
        'ghost' => 'hover:bg-accent hover:text-accent-foreground',
        'link' => 'text-primary underline-offset-4 hover:underline',
    ];

    $sizeClasses = [
        'default' => '', // Already applied in the base classes.
        'sm' => 'h-9 rounded-md px-3 ',
        'lg' => 'h-11 rounded-md px-8 ',
        'icon' => 'h-10 w-10 ',
    ];

    $variantClass = $variantClasses[$variant] ?? $variantClasses['default'];
    $sizeClass = $sizeClasses[$size] ?? $sizeClasses['default'];

    $componentClasses = $baseClasses . ' ' . $variantClass . ' ' . $sizeClass;
@endphp

@if ($asChild)
    <div {{ $attributes->merge(['class' => $componentClasses]) }}>
        {{ $slot }}
    </div>
@else
    <button {{ $attributes->merge(['class' => $componentClasses]) }}>
        {{ $slot }}
        <svg width="6" height="3" class="ml-2 overflow-visible" aria-hidden="true">
            <path d="M0 0L3 3L6 0" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
        </svg>
    </button>
@endif
```