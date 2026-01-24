<template x-if="resultCount === 0">
<div 
    {{ $attributes->mergeTailwind(['class' => 'lux-command-empty']) }}
>
    {{ $slot }}
</div>
</template>
