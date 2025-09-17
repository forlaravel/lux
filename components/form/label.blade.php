@inject('lux', 'lux')

<x-dynamic-component :component="$lux->componentPath('label')"
x-form:label
>
    {{ $slot }}
</x-dynamic-component>