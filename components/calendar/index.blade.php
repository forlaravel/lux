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
@mergeAttributes
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
                ...@json($config),
            };

            let $picker = this.$el.children[0];

            let picker = flatpickr($picker, options);

            this.$watch('value', (newValue) => picker.setDate(newValue));
        },
    }"
    x-modalable="value"
    class="max-w-sm w-full"
@endMergeAttributes
>
    <x-input 
        class="{{ $inline ? 'hidden' : '' }}"
        x-ref="picker"
        mask="{{ $mask }}"
        type="text"
        name="{{ $name }}"
        placeholder="{{ $placeholder }}"
        {{ $attributes->except('class') }}
    />
</div>