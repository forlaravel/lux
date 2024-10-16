@props(['placeholder' => ''])

<button @click="open = !open" type="button"
    {{ $attributes->merge(['class' => 'flex items-center justify-between w-full px-3 py-2 text-left bg-white border rounded-md']) }}>
    <span x-text="selected ? selected.label : '{{ $placeholder }}'"></span>
    <svg class="w-4 h-4 ml-2 text-muted-foreground" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
    </svg>
</button>
