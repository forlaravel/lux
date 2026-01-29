@blaze
@props(['tag' => 'h2'])

<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog-title']) }}>{{ $slot }}</{{ $tag }}>
