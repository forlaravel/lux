<div x-ref="trigger" @click="open = !open" {{ $attributes->mergeTailwind(['class' => 'lux-dropdown-menu-trigger']) }}>
    {{ $slot }}
</div>
