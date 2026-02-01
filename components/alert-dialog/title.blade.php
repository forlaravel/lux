@blaze
@props(['tag' => 'h2'])

<{{ $tag }} :id="$id('alert-dialog-title')" {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog-title']) }}>{{ $slot }}</{{ $tag }}>
