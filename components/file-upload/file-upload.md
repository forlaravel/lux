# File Upload

A drag-and-drop file upload zone with Livewire support. Shows upload progress, file previews, and accepts configuration for file types and multiple uploads.

## Example
```html
<x-file-upload />
```

## Example
With file type restrictions, multiple uploads, and a max file size of 5MB:
```html
<x-file-upload accept=".png,.jpg,.pdf" multiple :maxSize="5" />
```

## Example
With limits on number of files (min 1, max 3) and max 10MB per file:
```html
<x-file-upload multiple :maxFiles="3" :minFiles="1" :maxSize="10" accept=".png,.jpg" />
```

## Example
Disabled state:
```html
<x-file-upload disabled />
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish file-upload
```

## Properties

### file-upload
| Prop       | Description                                                              | Type      | Default |
|------------|--------------------------------------------------------------------------|-----------|---------|
| `multiple` | Allow selecting multiple files.                                          | `boolean` | `false` |
| `accept`   | Comma-separated list of accepted file types (e.g. `.png,.jpg,.pdf`).     | `string`  | `null`  |
| `disabled` | Disable the upload zone.                                                 | `boolean` | `false` |
| `maxFiles` | Maximum number of files allowed.                                         | `integer` | `null`  |
| `minFiles` | Minimum number of files required.                                        | `integer` | `null`  |
| `maxSize`  | Maximum file size in megabytes (per file).                               | `integer` | `null`  |

### Features

- **Drag and drop** — drag files onto the zone to upload
- **Image previews** — automatically shows thumbnail previews for image files
- **Remove files** — click the X button on any file to remove it
- **File count** — shows how many files are selected
- **Validation** — enforces max file size, max files, and min files with error messages
- **Livewire compatible** — use `wire:model` to bind uploads, with automatic progress bar

### Livewire Integration

Add `wire:model` to bind the uploaded file(s) to a Livewire property. The component will automatically:

- Show a progress bar during upload
- Listen to `livewire-upload-start`, `livewire-upload-finish`, `livewire-upload-error`, and `livewire-upload-progress` events
- Display selected file names, sizes, and image previews

## Accessibility

- When used within a form, wrap the component in a `<x-field>` with a `<x-field.label>` or provide a visible label so screen readers can identify the upload field's purpose.

### Livewire Integration

In your Livewire component, use the `WithFileUploads` trait:

```php
use Livewire\WithFileUploads;
use Livewire\Component;

class MyForm extends Component
{
    use WithFileUploads;

    public $photos = [];

    public function save()
    {
        $this->validate(['photos.*' => 'image|max:5120']);

        foreach ($this->photos as $photo) {
            $photo->store('photos');
        }
    }
}
```
