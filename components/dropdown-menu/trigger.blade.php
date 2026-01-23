<div x-ref="trigger" @click="open = !open" {{ $attributes->mergeTailwind(['class' => 'cursor-pointer']) }}>
    {{ $slot }}
</div>
