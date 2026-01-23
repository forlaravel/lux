<template x-if="resultCount === 0">
<div 
    {{ $attributes->mergeTailwind(['class' => 'lux-command-empty command-empty relative flex cursor-default select-none items-center rounded-sm px-3 py-2.5 text-sm outline-none max-h-[300px] overflow-y-auto overflow-x-hidden']) }}
>
    {{ $slot }}
</div>
</template>