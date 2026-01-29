
@aware(['orientation' => 'vertical'])
@props(['tag' => 'div'])
<{{ $tag }}
    x-show="showScrollbar"
    x-cloak
    {{ $attributes->mergeTailwind(['class' => "lux-scroll-area-scrollbar lux-scroll-area-scrollbar-{$orientation}"]) }}
>
    <div
        class="lux-scroll-area-thumb"
        :style="orientation === 'vertical'
            ? 'height:' + thumbSize + '%; top:' + thumbPosition + '%'
            : 'width:' + thumbSize + '%; left:' + thumbPosition + '%'"
    ></div>
</{{ $tag }}>
