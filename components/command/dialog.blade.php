@blaze
<x-dialog {{ $attributes->merge(['class' => 'lux-command-dialog']) }}>
    <x-dialog-content class="lux-command-dialog">
        <x-command>
            {{ $slot }}
        </x-command>
    </x-dialog-content>
</x-dialog>
