# Chart
A Chart.js wrapper component using an Alpine.js directive.

## Example
### Bar Chart
```html
<x-chart
    type="bar"
    :data="[
        'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        'datasets' => [
            [
                'label' => 'Revenue',
                'data' => [186, 305, 237, 73, 209, 214],
                'backgroundColor' => 'oklch(0.55 0.2 250)',
            ]
        ]
    ]"
/>
```

## Example
### Line Chart
```html
<x-chart
    type="line"
    :data="[
        'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        'datasets' => [
            [
                'label' => 'Users',
                'data' => [100, 200, 150, 300, 250, 400],
                'borderColor' => 'oklch(0.55 0.2 250)',
                'fill' => false,
            ]
        ]
    ]"
/>
```

## Example
### Pie Chart
```html
<x-chart
    type="pie"
    :data="[
        'labels' => ['Red', 'Blue', 'Yellow'],
        'datasets' => [
            [
                'data' => [300, 50, 100],
                'backgroundColor' => ['#f87171', '#60a5fa', '#fbbf24'],
            ]
        ]
    ]"
/>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish chart
```

> **Note:** This component requires [Chart.js](https://www.chartjs.org/) to be loaded. Install it via npm:
> ```bash
> npm install chart.js
> ```
> Then import it in your JavaScript:
> ```javascript
> import Chart from 'chart.js/auto';
> window.Chart = Chart;
> ```

## Properties

### chart
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `type` | Chart.js chart type | `string` | `bar` |
| `data` | Chart.js data configuration | `array` | `[]` |
| `options` | Chart.js options configuration | `array` | `[]` |
