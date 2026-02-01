@props(['tag' => 'div'])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-input-otp-group']) }}>{{ $slot }}</{{ $tag }}>
