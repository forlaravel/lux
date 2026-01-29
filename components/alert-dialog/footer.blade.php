@blaze
@props(['tag' => 'div'])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog-footer']) }}>{{ $slot }}</{{ $tag }}>
