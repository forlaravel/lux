@props([
    'tag' => 'button',
    'variant' => '',
    'size' => 'md',
])

<{{ $tag }} 
@mergeAttributes 
{{ $attributes->class([
    'cursor-pointer inline-flex gap-1.5 items-center justify-center whitespace-nowrap rounded-md font-medium ring-offset-background transition-colors',
    'disabled:pointer-events-none disabled:opacity-50',
    'active:scale-[0.97]',
    'focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2' => $tag === 'button',
    'group-focus-visible:outline-none group-focus-visible:ring-2 group-focus-visible:ring-ring group-focus-visible:ring-offset-2' => $tag !== 'button',
    'bg-primary text-primary-foreground hover:bg-primary/90' => $variant === '',
    'bg-destructive text-destructive-foreground hover:bg-destructive/90' => $variant === 'destructive',
    'border border-input bg-background hover:bg-accent hover:text-accent-foreground' => $variant === 'outline',
    'bg-secondary text-secondary-foreground hover:bg-secondary/80' => $variant === 'secondary',
    'hover:bg-accent hover:text-accent-foreground' => $variant === 'ghost',
    'text-primary underline-offset-4 hover:underline' => $variant === 'link',
    'px-3 py-2 text-xs' => $size === 'sm',
    'px-4 py-2.5 text-sm' => $size === 'md',
    'px-6 py-3 text-lg' => $size === 'lg',
    'px-8 py-4 text-2xl' => $size === 'xl',
    'w-10 h-10' => $size === 'icon',
])}}
@endMergeAttributes>
{{ $slot }}
</{{ $tag }}>
