@blaze
@props(['tag' => 'fieldset'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-field-set']) }}>{{ $slot }}</{{ $tag }}>
