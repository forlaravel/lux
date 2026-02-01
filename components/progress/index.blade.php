@blaze
@props(['tag' => 'div', 'value' => 0, 'max' => 100, 'label' => null])
<{{ $tag }} role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="{{ $max }}" @if($label) aria-label="{{ $label }}" @endif {{ $attributes->mergeTailwind(['class' => 'lux-progress']) }}>
    <div class="lux-progress-indicator" style="width: {{ ($value / $max) * 100 }}%"></div>
</{{ $tag }}>
