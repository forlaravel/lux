@php
    $multiple = $multiple ?? false;
    $accept = $accept ?? null;
    $disabled = $disabled ?? false;
    $maxFiles = $maxFiles ?? null;
    $minFiles = $minFiles ?? null;
    $maxSize = $maxSize ?? null;
    $maxSizeBytes = $maxSize ? $maxSize * 1024 * 1024 : null;
    $hint = '';
    if ($accept) $hint .= strtoupper(str_replace(',', ', ', str_replace('.', '', $accept)));
    if ($accept && $maxSize) $hint .= ' · ';
    if ($maxSize) $hint .= 'Max ' . $maxSize . 'MB';
@endphp

<div
    {{ $attributes->except(['multiple', 'accept', 'disabled', 'maxFiles', 'minFiles', 'maxSize'])->merge(['class' => 'lux-file-upload']) }}
    x-data="{
        dragging: false,
        uploading: false,
        progress: 0,
        files: [],
        errors: [],
        maxFiles: {{ $maxFiles ?? 'null' }},
        minFiles: {{ $minFiles ?? 'null' }},
        maxSize: {{ $maxSizeBytes ?? 'null' }},

        handleDrop(e) {
            if ({{ $disabled ? 'true' : 'false' }}) return;
            this.dragging = false;
            this.addFiles(e.dataTransfer.files);
        },

        handleInput(e) {
            this.addFiles(e.target.files);
        },

        addFiles(fileList) {
            this.errors = [];
            const newFiles = Array.from(fileList).map(f => ({
                id: crypto.randomUUID(),
                name: f.name,
                size: f.size,
                type: f.type,
                preview: null,
                raw: f,
            }));

            if (this.maxSize) {
                const tooBig = newFiles.filter(f => f.size > this.maxSize);
                if (tooBig.length) {
                    this.errors.push(tooBig.map(f => f.name).join(', ') + ' exceeds ' + this.formatSize(this.maxSize));
                    return;
                }
            }

            if ({{ $multiple ? 'true' : 'false' }}) {
                this.files = this.files.concat(newFiles);
            } else {
                this.files = newFiles.slice(0, 1);
            }

            if (this.maxFiles && this.files.length > this.maxFiles) {
                this.files = this.files.slice(0, this.maxFiles);
                this.errors.push('Maximum ' + this.maxFiles + ' file(s) allowed');
            }

            this.files.forEach(f => {
                if (f.type.startsWith('image/') && f.raw && !f.preview) {
                    const reader = new FileReader();
                    reader.onload = (e) => { f.preview = e.target.result; };
                    reader.readAsDataURL(f.raw);
                }
            });

            this.syncInput();
        },

        removeFile(id) {
            this.files = this.files.filter(f => f.id !== id);
            this.errors = [];
            this.syncInput();
        },

        syncInput() {
            const dt = new DataTransfer();
            this.files.forEach(f => { if (f.raw) dt.items.add(f.raw); });
            this.$refs.input.files = dt.files;
            this.$refs.input.dispatchEvent(new Event('change', { bubbles: true }));
        },

        get canSubmit() {
            if (this.files.length === 0) return false;
            if (this.minFiles && this.files.length < this.minFiles) return false;
            if (this.errors.length > 0) return false;
            return true;
        },

        formatSize(bytes) {
            if (bytes === 0) return '0 B';
            const k = 1024;
            const sizes = ['B', 'KB', 'MB', 'GB'];
            const i = Math.floor(Math.log(bytes) / Math.log(k));
            return parseFloat((bytes / Math.pow(k, i)).toFixed(1)) + ' ' + sizes[i];
        },
    }"
    x-on:livewire-upload-start="uploading = true"
    x-on:livewire-upload-finish="uploading = false; progress = 0"
    x-on:livewire-upload-cancel="uploading = false; progress = 0"
    x-on:livewire-upload-error="uploading = false; progress = 0"
    x-on:livewire-upload-progress="progress = $event.detail.progress"
>
    <label
        class="lux-file-upload-zone"
        aria-label="Upload files by clicking or dragging and dropping"
        x-bind:class="{
            'lux-file-upload-zone-dragging': dragging,
            'lux-file-upload-zone-disabled': {{ $disabled ? 'true' : 'false' }},
        }"
        x-on:dragover.prevent="dragging = true"
        x-on:dragleave.prevent="dragging = false"
        x-on:drop.prevent="handleDrop($event)"
    >
        <input
            x-ref="input"
            type="file"
            class="sr-only"
            {!! $multiple ? 'multiple' : '' !!}
            {!! $accept ? 'accept="' . e($accept) . '"' : '' !!}
            {!! $disabled ? 'disabled' : '' !!}
            x-on:change="handleInput($event)"
        >

        <div class="lux-file-upload-icon">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
            </svg>
        </div>

        <div class="lux-file-upload-text">
            <span class="lux-file-upload-text-primary">Click to upload</span>
            <span class="lux-file-upload-text-secondary">or drag and drop</span>
        </div>

        {!! $hint ? '<p class="lux-file-upload-hint">' . e($hint) . '</p>' : '' !!}

        {{ $slot }}
    </label>

    <template x-for="error in errors" :key="error">
        <p class="lux-file-upload-error" role="alert" aria-live="assertive" x-text="error"></p>
    </template>

    <div x-show="uploading" x-cloak class="lux-file-upload-progress">
        <div class="lux-file-upload-progress-bar" x-bind:style="'width: ' + progress + '%'"></div>
    </div>

    <div x-show="files.length > 0 && !uploading" x-cloak class="lux-file-upload-files">
        <template x-for="file in files" :key="file.id">
            <div class="lux-file-upload-file">
                <template x-if="file.preview">
                    <img :src="file.preview" class="lux-file-upload-file-preview" alt="">
                </template>
                <template x-if="!file.preview">
                    <svg class="lux-file-upload-file-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                    </svg>
                </template>

                <div class="lux-file-upload-file-info">
                    <span class="lux-file-upload-file-name" x-text="file.name"></span>
                    <span class="lux-file-upload-file-size" x-text="formatSize(file.size)"></span>
                </div>

                <button type="button" class="lux-file-upload-file-remove" x-on:click="removeFile(file.id)" aria-label="Remove file">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </template>

        <div class="lux-file-upload-footer">
            <span class="lux-file-upload-footer-count" x-text="files.length + ' file' + (files.length !== 1 ? 's' : '') + ' selected'"></span>
            {!! $minFiles ? '<span class="lux-file-upload-footer-hint" x-show="files.length < ' . (int)$minFiles . '">(minimum ' . (int)$minFiles . ')</span>' : '' !!}
        </div>
    </div>
</div>
