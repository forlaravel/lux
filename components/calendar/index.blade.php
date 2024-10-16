@props([
    'inline' => false,
    'value' => [],
    'mode' => 'single',
    'dateFormat' => 'd-m-Y',
    'mask' => '',
    'name' => null,
    'placeholder' => 'Select a date',
    'config' => [],
])

<div
    x-data="{
        value: {!! $attributes->tryWireModelWithFallbackTo($value) !!},
        init() {
            let options = {
                mode: '{{ $mode }}',
                dateFormat: '{{ $dateFormat }}',
                defaultDate: this.value,
                allowInput: true,
                inline: {{ $inline ? 'true' : 'false' }},
                onChange: (date, dateString) => {
                    this.value = dateString.split(', ');
                },
                ...@json($config),
            };

            let picker = flatpickr(this.$refs.picker, options);

            this.$watch('value', (newValue) => picker.setDate(newValue));
        },
    }"
    {{ $attributes->class("max-w-sm w-full") }}
>
    <x-input 
        :class="($inline ? 'hidden' : '')"
        x-ref="picker"
        mask="{{ $mask }}"
        type="text"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->except('class') }}
    />
</div>