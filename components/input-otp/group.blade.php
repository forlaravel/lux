@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->mergeTailwind(['class' => 'lux-input-otp-group']) }}>{{ $slot }}</{{ $tag }}>
