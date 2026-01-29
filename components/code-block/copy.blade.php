@blaze
@props(['text'])

@inject('lux', 'lux')

<x-lux
component="button"
x-data="{ copied: false }"
:attributes="$attributes->merge(['class' => 'lux-code-block-copy'])"
variant="outline"
size="icon"
:data-copy-text="$text"
x-on:click="navigator.clipboard.writeText($el.dataset.copyText); copied = true; setTimeout(() => copied = false, 2000);"
>
    <span x-show="!copied"> <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19 3h-2.25a1 1 0 0 0-1-1h-7.5a1 1 0 0 0-1 1H5c-1.103 0-2 .897-2 2v15c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2zm0 17H5V5h2v2h10V5h2v15z"/></svg> </span>
    <span x-show="copied" x-cloak> <svg class="w-4 h-4" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg></span>
</x-lux>