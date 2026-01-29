@blaze
<!-- resources/views/components/command-input.blade.php -->
<div class="lux-command-input-wrapper" cmdk-input-wrapper="">
    {{-- <x-icon name="search" class="mr-2 h-4 w-4 shrink-0 opacity-50" /> --}}
    <input 
        {{ $attributes->mergeTailwind(['class' => 'lux-command-input']) }}
        x-ref="input"
        x-model="search"
        type="text"
    />
</div>
