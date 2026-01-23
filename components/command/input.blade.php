<!-- resources/views/components/command-input.blade.php -->
<div class="lux-command-input flex items-center border-b px-3" cmdk-input-wrapper="">
    {{-- <x-icon name="search" class="mr-2 h-4 w-4 shrink-0 opacity-50" /> --}}
    <input 
        {{ $attributes->mergeTailwind(['class' => 'flex h-11 w-full rounded-md bg-transparent py-3 text-sm outline-none placeholder:text-muted-foreground disabled:cursor-not-allowed disabled:opacity-50   ']) }}
        x-ref="input"
        x-model="search"
        type="text"
    />
</div>
