@blaze
<div {{ $attributes->mergeTailwind(['class' => 'lux-steps-item']) }}>
    <div data-step="{{ $step }}" class="lux-steps-item-title">
        {{ $title }}
    </div>
    <div class="lux-steps-item-content">
        {{ $slot }}
    </div>
</div>
