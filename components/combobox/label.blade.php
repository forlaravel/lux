
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-combobox-label']) }}>{{ $slot }}</{{ $tag }}>
