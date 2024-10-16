<template x-teleport="body">
<div 
    x-show="openSub" 
    x-transition
    x-cloak
    {{ $attributes->merge(['class' => 'absolute left-full top-0 min-w-[8rem] rounded-md border bg-popover p-1 text-popover-foreground shadow-md']) }}>
    {{ $slot }}
</div>
</template>