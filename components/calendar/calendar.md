# Calendar
A date picker component powered by Flatpickr that allows users to select a single date or a range of dates, with optional inline display and custom formatting.

## Example
```html
<x-calendar mode="single" :inline="true" value="05-10-2022" dateFormat="d-m-Y" />
```

## Example
### Display the calendar as an input field
```html
<x-calendar mode="single" :inline="false" dateFormat="d-m-Y" mask="99-99-9999" placeholder="Pick a type a date: dd-mm-yyyy" />
<br>
<x-calendar mode="single" :inline="false" dateFormat="m/d/Y" mask="99/99/9999" placeholder="Pick a type a date: mm/dd/yyyy" />
```

## Example
### Mutliple date selection
```html
<x-calendar mode="multiple" :inline="true" dateFormat="d-m-Y" :value="['05-10-2022', '06-10-2022']" />
```

## Installation

1. Run the following command to publish the calendar component:

```bash
php artisan lux:publish calendar
```

2. Install flatpickr via npm

```bash
npm i flatpickr --save
```

3. Include CSS

Add the Flatpickr CSS to the top of your `app.css` stylesheet:
```css
@import '../../vendor/forlaravel/lux/resources/css/flatpicker.css';

@tailwind base;
@tailwind components;
@tailwind utilities;
...
```

4. Include JS
Import Flatpickr in your `app.js` file and assign it to the window object:

```javascript
import flatpickr from "flatpickr";

...

window.flatpickr = flatpickr;
```

## Properties

### calendar
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `wire:model` | The selected accordion-item via livewire (takes precedence over `value`). | `array` | `null`
| `value` | The selected accordion-item. | `array` | `[]`
| `inline` | Display the calendar inline or as a dropdown | `boolean` | `false` |
| `mode` | Selection mode (`single`, `multiple`, `range`) | `string` | `multiple` |
| `dateFormat` | Date format string | `string` | `d-m-Y` |
| `name` | Input name attribute | `string` | `null` |
| `placeholder` | Placeholder text for the input field | `string` | `Select a date` |
| `config` | Additional Flatpickr configuration options | `array` | `[]` |