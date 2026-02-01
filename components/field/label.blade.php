@blaze
@props(['tag' => 'label'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-field-label']) }}>{{ $slot }}</{{ $tag }}>
