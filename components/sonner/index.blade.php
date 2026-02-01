{{-- Copyright (c) 2024 forlaravel.com, see LICENSE.md for details. --}}

@blaze

<div
    {{ $attributes->mergeTailwind(['class' => 'lux-sonner']) }}
    x-sonner
    x-data
    :class="richColors ? 'lux-sonner-rich' : ''"
>
    <template x-for="pos in positions()" :key="pos">
        <ol
            :class="'lux-sonner-viewport lux-sonner-position-' + pos + (hasStackedAt(pos) ? ' lux-sonner-stacked' : '')"
            :style="Object.assign({ '--sonner-offset': typeof offset === 'number' ? offset + 'px' : offset, '--sonner-gap': gap + 'px' }, viewportStyle(pos))"
            @mouseenter="hasStackedAt(pos) && (_hoveredPosition = pos)"
            @mouseleave="hasStackedAt(pos) && (_hoveredPosition = null)"
            role="region"
            aria-label="Notifications"
            tabindex="0"
        >
            <template x-for="t in toastsAt(pos)" :key="t.id">
                <li
                    :data-sonner-id="t.id"
                    data-state="entering"
                    :class="'lux-sonner-toast lux-sonner-toast-' + t.type"
                    :style="toastStyle(t.id)"
                    :data-front="isFront(t.id)"
                    :data-expanded="isExpanded(t.id)"
                    role="status"
                    aria-live="polite"
                    aria-atomic="true"
                >
                    {{-- Icon --}}
                    <template x-if="t.type === 'loading'">
                        <div class="lux-sonner-icon">
                            <div class="lux-sonner-spinner"></div>
                        </div>
                    </template>
                    <template x-if="t.type === 'success'">
                        <div class="lux-sonner-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
                        </div>
                    </template>
                    <template x-if="t.type === 'error'">
                        <div class="lux-sonner-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
                        </div>
                    </template>
                    <template x-if="t.type === 'warning'">
                        <div class="lux-sonner-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                        </div>
                    </template>
                    <template x-if="t.type === 'info'">
                        <div class="lux-sonner-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="12" y1="16" x2="12" y2="12"/><line x1="12" y1="8" x2="12.01" y2="8"/></svg>
                        </div>
                    </template>

                    {{-- Content --}}
                    <div class="lux-sonner-content">
                        <div class="lux-sonner-message" x-text="t.message"></div>
                        <template x-if="t.description">
                            <div class="lux-sonner-description" x-text="t.description"></div>
                        </template>
                        <template x-if="t.action || t.cancel">
                            <div class="lux-sonner-actions">
                                <template x-if="t.action">
                                    <button class="lux-sonner-action" x-text="t.action.label" @click="t.action.onClick?.($event); dismiss(t.id);"></button>
                                </template>
                                <template x-if="t.cancel">
                                    <button class="lux-sonner-cancel" x-text="t.cancel.label" @click="t.cancel.onClick?.($event); dismiss(t.id);"></button>
                                </template>
                            </div>
                        </template>
                    </div>

                    {{-- Close button --}}
                    <template x-if="t.closeButton && t.dismissible">
                        <button class="lux-sonner-close" @click="dismiss(t.id)" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
                        </button>
                    </template>
                </li>
            </template>
        </ol>
    </template>
</div>
