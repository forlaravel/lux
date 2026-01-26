<div x-show="openSub" x-transition x-cloak
    x-ref="sub-content"
    {{-- x-trap="openSub" --}}
    {{ $attributes->mergeTailwind(['class' => 'lux-dropdown-menu-sub-content left-full top-0 mt-[-1px] w-48']) }}>
    {{ $slot }}
</div>
