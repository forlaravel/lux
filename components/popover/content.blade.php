<template x-teleport="body" >
<div
    x-trap.inert="open"
    x-show="open"
    x-ref="content"
    x-anchor.bottom-start="$refs.trigger"
    :data-state="open ? 'open' : 'closed'"
    :data-side="$refs.trigger.offsetTop < $anchor.y ? 'bottom' : 'top'"
    x-cloak
    @click.outside="open = false"
    {{ $attributes->merge(['class' => "absolute z-50 rounded-md border bg-popover p-4 text-popover-foreground shadow-md outline-none data-[state=open]:animate-in data-[state=closed]:animate-out data-[state=closed]:fade-out-0 data-[state=open]:fade-in-0 data-[state=closed]:zoom-out-95 data-[state=open]:zoom-in-95 data-[side=bottom]:slide-in-from-top-2 data-[side=left]:slide-in-from-right-2 data-[side=right]:slide-in-from-left-2 data-[side=top]:slide-in-from-bottom-2 w-80"]) }}
    role="dialog"
    aria-modal="true"
>
    {{ $slot }}
</div>
</template>