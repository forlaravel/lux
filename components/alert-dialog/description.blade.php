@blaze
@props(['tag' => 'p'])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog-description']) }}>{{ $slot }}</{{ $tag }}>
