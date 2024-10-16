@props(['item'])

<li @click="selectItem(item)" class="flex items-center justify-between w-full px-3 py-2 cursor-pointer hover:bg-muted/10">
    <span x-text="item.label"></span>
    {{ $icon ?? '' }}
</li>
