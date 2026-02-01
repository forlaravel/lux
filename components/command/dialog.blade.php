@blaze
@inject('lux', 'lux')
@props(['open' => false])

<div x-data="{
        open: @wireOr($open),
        openCommand() {
            this.open = true;
            this.$nextTick(() => {
                document.querySelector('.lux-command-dialog .lux-command-input')?.focus();
            });
        }
     }"
     @keydown.meta.k.window.prevent="open ? (open = false) : openCommand()"
     @keydown.ctrl.k.window.prevent="open ? (open = false) : openCommand()"
     x-modelable="open"
     {{ $attributes }}>

    @if(isset($trigger))
        <div @click="openCommand()">
            {{ $trigger }}
        </div>
    @endif

    <template x-teleport="body">
        <div x-show="open" x-cloak class="fixed inset-0 z-50" @keydown.escape.stop="open = false">
            <div x-show="open"
                 x-transition:enter="transition ease-out duration-100"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-100"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 @click="open = false"
                 class="fixed inset-0 isolate z-50 bg-black/10 supports-[backdrop-filter]:backdrop-blur-xs">
            </div>
            <div class="fixed inset-0 z-50 flex items-start justify-center p-4 pt-[15vh] pointer-events-none" @click.self="open = false">
                <div x-show="open"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="w-full max-w-lg pointer-events-auto">
                    <x-dynamic-component :component="$lux->componentPath('command')" class="lux-command-dialog">
                        {{ $slot }}
                    </x-dynamic-component>
                </div>
            </div>
        </div>
    </template>
</div>
