@props([
    'tag' => 'div',
    'variant' => '',
])

@open($tag)
    role="alert"
    {{ $attributes->class([
        "text-left relative w-full rounded-lg border p-4",
        "[&>svg~*]:pl-8 [&>svg+div]:translate-y-[-3px] [&>svg]:absolute [&>svg]:left-4 [&>svg]:top-4 [&>svg]:text-foreground ",
        "bg-background text-foreground" => $variant == '',
        // destructive
        "border-destructive/50 text-destructive dark:border-destructive [&>svg]:text-destructive" => $variant == 'destructive',
    ]) }}
@content
    {{ $slot }}
@close