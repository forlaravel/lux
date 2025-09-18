{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@props([
    'tag' => 'span',
])

@open($tag)
class="block py-1.5 pl-8 pr-2 text-sm font-semibold"
@content
    {{ $slot }}
@close
