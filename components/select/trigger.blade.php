{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@aware([
    'searchable' => false,
])

@props([
    'tag' => 'div',
])

@open($tag)
    @if(!$searchable)
    tabindex="0"
    @endif
    @click="onTrigger"
    x-ref="trigger"
    aria-haspopup="listbox"
    :id="$id('select-trigger')"
    :aria-expanded="open"
    :aria-pressed="open || hasInputFocus"
    class="flex w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground
        focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2
        aria-pressed:ring-2 aria-pressed:ring-ring aria-pressed:ring-offset-2
        disabled:cursor-not-allowed disabled:opacity-50 {{ $searchable ? 'cursor-text' : 'cursor-pointer' }}"
@content
    {{ $slot }}
    <svg class="h-4 w-4 opacity-50 shrink-0 grow-0"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"></path></svg>
@close