@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-input-group-addon lux-input-group-addon-start']) }}>{{ $slot }}</{{ $tag }}>
