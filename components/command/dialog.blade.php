@blaze
@inject('lux', 'lux')

<x-dynamic-component :component="$lux->componentPath('dialog')" {{ $attributes->merge(['class' => 'lux-command-dialog']) }}>
    <x-dynamic-component :component="$lux->componentPath('dialog.content')" class="lux-command-dialog">
        <x-dynamic-component :component="$lux->componentPath('command')">
            {{ $slot }}
        </x-dynamic-component>
    </x-dynamic-component>
</x-dynamic-component>
