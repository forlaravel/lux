@blaze
@props(['tag' => 'p'])

<{{ $tag }} :id="$id('alert-dialog-description')" {{ $attributes->mergeTailwind(['class' => 'lux-alert-dialog-description']) }}>{{ $slot }}</{{ $tag }}>
