@inject('lux', 'lux')

<x-dynamic-component :component="$lux->componentPath('label')"
x-form:label
class="lux-form-label"
>
    {{ $slot }}
</x-dynamic-component>