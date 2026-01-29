@blaze
@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-input-group-addon lux-input-group-addon-end']) }}>{{ $slot }}</{{ $tag }}>
