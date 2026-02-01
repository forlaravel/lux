@props(['tag' => 'div', 'type' => 'bar', 'data' => [], 'options' => []])
<{{ $tag }} {{ $attributes->merge(['class' => 'lux-chart']) }}
    x-data x-chart="{ type: @js($type), data: @js($data), options: @js($options) }">
    <canvas x-ref="canvas"></canvas>
</{{ $tag }}>
