@blaze
@props(['tag' => 'p'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-field-description']) }}>{{ $slot }}</{{ $tag }}>
