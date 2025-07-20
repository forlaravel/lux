<div x-show="openSub" x-transition x-cloak
    x-ref="sub-content"
    {{-- x-trap="openSub" --}}
    {{ $attributes->merge(['class' => 'absolute border left-full top-0 mt-[-1px] w-48 rounded-md shadow-lg bg-popover text-popover-foreground']) }}>
    {{ $slot }}
</div>
