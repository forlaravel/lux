# Chart
A Chart.js wrapper component using an Alpine.js directive. Chart.js is loaded automatically from CDN when the component is used. The chart renders with clean, minimal defaults — no legend, no Y-axis labels, subtle grid lines, and rounded bars.

## Example
### Bar Chart
```html
<x-chart
    type="bar"
    :data="[
        'labels' => ['Apr 1','Apr 2','Apr 3','Apr 4','Apr 5','Apr 6','Apr 7','Apr 8','Apr 9','Apr 10','Apr 11','Apr 12','Apr 13','Apr 14','Apr 15','Apr 16','Apr 17','Apr 18','Apr 19','Apr 20','Apr 21','Apr 22','Apr 23','Apr 24','Apr 25','Apr 26','Apr 27','Apr 28','Apr 29','Apr 30'],
        'datasets' => [
            [
                'label' => 'Desktop',
                'data' => [120,86,156,210,178,245,290,62,198,310,168,225,195,142,110,125,360,340,280,245,180,135,165,190,270,248,98,180,255,310],
            ],
            [
                'label' => 'Mobile',
                'data' => [80,55,110,140,125,170,195,40,135,210,115,155,130,95,75,85,240,230,190,165,120,90,112,128,182,168,65,122,172,208],
            ],
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
        'labels' => ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
        'datasets' => [
            [
                'label' => 'Revenue',
                'data' => [1200,1900,1500,2200,2800,2400,3100,2900,3400,3000,3600,4100],
            ],
            [
                'label' => 'Expenses',
                'data' => [900,1100,1300,1400,1600,1500,1800,1700,2000,1900,2100,2300],
            ],
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
        'labels' => ['Direct', 'Organic', 'Referral', 'Social', 'Email'],
        'datasets' => [
            [
                'data' => [420, 315, 180, 130, 95],
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

> **Note:** Chart.js is loaded automatically from CDN. To self-host instead, install via npm and expose it globally:
> ```bash
> npm install chart.js
> ```
> ```javascript
> import Chart from 'chart.js/auto';
> window.Chart = Chart;
> ```

## Properties

### chart
| Prop | Description | Type | Default |
| --- | --- | --- | --- |
| `tag` | HTML tag to render | `string` | `div` |
| `type` | Chart.js chart type (`bar`, `line`, `pie`, `doughnut`, `radar`, etc.) | `string` | `bar` |
| `data` | Chart.js data configuration (labels + datasets) | `array` | `[]` |
| `options` | Chart.js options (merged over the built-in defaults) | `array` | `[]` |
