<div x-ref="trigger" @click="open = !open" :aria-expanded="open.toString()" {{ $attributes }}>
    {{ $slot }}
</div>
