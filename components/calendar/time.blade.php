@blaze
@inject('lux', 'lux')

<x-dynamic-component :attributes="$attributes->merge(['class' => 'lux-calendar-time'])" :inline="true" :config="['noCalendar' => true, 'enableTime' => true, 'time_24hr' => true]" dateFormat="H:i" :component="$lux->componentPath('calendar.index')" />