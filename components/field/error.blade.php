@blaze
@props(['tag' => 'p'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-field-error']) }}>{{ $slot }}</{{ $tag }}>
