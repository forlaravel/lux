@aware([
    'searchable' => false,
    'multiple' => false,
    'placeholder' => 'Select an option',
])

@if($searchable)
<div x-ref="input" {{ $attributes->class(["flex w-full self-start flex-wrap", "gap-1.5" => $multiple]) }}>
@endif
    <span 
    wire:ignore
    @mergeAttributes
        class="flex gap-1.5 flex-wrap self-start"
        :class="{
            'text-muted-foreground': isEmpty,
            'text-text': !isEmpty,
        }"
    @endMergeAttributes
    >
        <template x-if="multiple && !isEmpty">
            <template x-for="item in selectedLabels" :key="item.value">
                <span x-text="item.label" class="bg-secondary py-1 px-2.5 rounded text-xs"></span>
            </template>
        </template>
        <template x-if="!multiple && !isEmpty">
            <span x-text="selectedLabels.label || '{{ $placeholder ?? '' }}'" class="truncate"></span>
        </template>
        @if(!$searchable)
        <template x-if="isEmpty">
            <span x-text="'{{ $placeholder ?? '' }}'" class="truncate"></span>
        </template>
        @endif
    </span>
@if($searchable)
    <input 
        wire:ignore
        class="bg-transparent text-text focus:outline-none grow w-0 placeholder:text-muted-foreground" 
        @focus="hasInputFocus = true"
        @blur="hasInputFocus = false; close()"
        @keydown.backspace="inputText.length === 0 ? reset() : null"
        :placeholder="isEmpty ? '{{ $placeholder }}' : null"
        x-model="inputText"
        {{ $attributes }} 
        />
</div>
@endif

