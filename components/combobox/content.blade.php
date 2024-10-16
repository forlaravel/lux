<div x-show="open" x-cloak
    {{ $attributes->merge(['class' => 'absolute left-0 z-10 w-full mt-2 bg-white border rounded-md shadow-md']) }}>
    {{ $slot }}
</div>
