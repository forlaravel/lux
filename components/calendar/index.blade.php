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

@inject('lux', 'lux')

<div
    x-data="{
        value: @wireOr($value),
        init() {    
            let options = {
                mode: '{{ $mode }}',
                dateFormat: '{{ $dateFormat }}',
                defaultDate: this.value,
                allowInput: true,
                inline: {{ $inline ? 'true' : 'false' }},
                onChange: (date, dateString) => {
                    @if($mode === 'single')
                    this.value = dateString;
                    @else
                    this.value = dateString.split(', ');
                    @endif
                },
                ...@js($config),
            };

            if (options.appendTo) {
                options.appendTo = document.querySelector(options.appendTo);
            }

            let $picker = this.$el.children[0];
            let picker = flatpickr($picker, options);

            this.$watch('value', (newValue) => picker.setDate(newValue));

            // Prevents closing modals etc when clicking on the calendar
            [...document.getElementsByClassName('flatpickr-calendar')].forEach($el => {
                $el.addEventListener('click', e => e.stopPropagation());
            });
        },
    }"
    x-modalable="value"
    wire:ignore
    {{ $attributes->only('class')->class('lux-calendar w-full') }}
>
    <x-lux
        component="input"
        class="{{ $inline ? 'hidden' : '' }}"
        x-ref="picker"
        mask="{{ $mask }}"
        type="text"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        :attributes="$attributes->whereDoesntStartWith('wire:model')"
    />
</div>