@props([
    'tag' => 'button',
    'variant' => 'primary',
    'size' => 'md',
    'loading' => false
])

@php
    $variantClasses = match ($variant) {
        'primary' => 'bg-primary text-primary-foreground hover:bg-primary/90 [&_svg]:text-primary-foreground',
        'destructive' => 'bg-destructive text-destructive-foreground hover:bg-destructive/90 focus-visible:ring-destructive [&_svg]:text-destructive-foreground',
        'outline' => 'bg-background border border-input hover:bg-accent hover:text-accent-foreground focus-visible:ring-border [&_svg]:hover:text-accent-foreground',
        'secondary' => 'bg-secondary text-secondary-foreground hover:bg-secondary/80 focus-visible:ring-secondary [&_svg]:text-secondary-foreground',
        'ghost' => 'hover:bg-accent hover:text-accent-foreground focus-visible:ring-accent [&_svg]:text-accent-foreground',
        'link' => 'underline-offset-4 hover:underline focus-visible:ring-accent',
        default => 'bg-primary text-primary-foreground hover:bg-primary/90 [&_svg]:text-primary-foreground',
    };

    $sizeClasses = match ($size) {
        'sm' => 'px-3 py-2 text-xs',
        'md' => 'px-4 py-2.5 text-sm',
        'lg' => 'px-6 py-3 text-lg',
        'xl' => 'px-8 py-4 text-2xl',
        'icon' => 'p-2',
        default => 'px-4 py-2.5 text-sm',
    };

    $baseClasses = 'cursor-pointer inline-flex gap-1.5 items-center justify-center whitespace-nowrap rounded-md font-medium ring-offset-background text-foreground disabled:pointer-events-none disabled:opacity-50 active:scale-[0.97] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 [transition:transform_50ms_ease-out,color_300ms_ease-in-out]';

    $loadingClasses = $loading ? 'relative !text-transparent' : '';

    $classes = implode(' ', array_filter([$baseClasses, $variantClasses, $sizeClasses, $loadingClasses]));
@endphp

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => $classes]) }}>
    {{ $slot }}
    @if($loading)
    <span class="animate-spin absolute text-foreground">
        <svg class="w-6 h-6" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"> <path d="M10 3.5C6.41015 3.5 3.5 6.41015 3.5 10C3.5 10.4142 3.16421 10.75 2.75 10.75C2.33579 10.75 2 10.4142 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10C18 14.4183 14.4183 18 10 18C9.58579 18 9.25 17.6642 9.25 17.25C9.25 16.8358 9.58579 16.5 10 16.5C13.5899 16.5 16.5 13.5899 16.5 10C16.5 6.41015 13.5899 3.5 10 3.5Z"/> </svg>
    </span>
    @endif
</{{ $tag }}>
