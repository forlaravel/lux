<div x-ref="trigger" @click="open = !open" :aria-expanded="open.toString()" {{ $attributes->mergeTailwind(['class' => 'lux-popover-trigger']) }}>
    {{ $slot }}
</div>
