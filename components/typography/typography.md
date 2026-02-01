# Typography
A set of sub-components for styling text elements in your application, providing consistent and readable typographic hierarchy.

## Example
```html
<x-typography.h1>Heading 1</x-typography.h1>
<x-typography.h2>Heading 2</x-typography.h2>
<x-typography.h3>Heading 3</x-typography.h3>
<x-typography.h4>Heading 4</x-typography.h4>
<x-typography.p>Paragraph text here.</x-typography.p>
<x-typography.lead>Lead text for introductions.</x-typography.lead>
<x-typography.large>Large emphasis text.</x-typography.large>
<x-typography.small>Small print text.</x-typography.small>
<x-typography.muted>Muted helper text.</x-typography.muted>
<x-typography.blockquote>A notable quotation.</x-typography.blockquote>
<x-typography.inline-code>code()</x-typography.inline-code>
<x-typography.list>
    <li>Item one</li>
    <li>Item two</li>
</x-typography.list>
```

## Installation

1. Run the following command:

```bash
php artisan lux:publish typography
```

## Properties

Each sub-component accepts a `tag` prop that allows you to override the rendered HTML element.

### typography.h1
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `h1`    |

### typography.h2
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `h2`    |

### typography.h3
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `h3`    |

### typography.h4
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `h4`    |

### typography.p
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `p`     |

### typography.lead
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `p`     |

### typography.large
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `div`   |

### typography.small
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `small` |

### typography.muted
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `p`     |

### typography.blockquote
| Prop  | Description                        | Type     | Default       |
|-------|------------------------------------|----------|---------------|
| `tag` | The HTML element to render         | `string` | `blockquote`  |

### typography.inline-code
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `code`  |

### typography.list
| Prop  | Description                        | Type     | Default |
|-------|------------------------------------|----------|---------|
| `tag` | The HTML element to render         | `string` | `ul`    |

## Accessibility

- Maintain a logical heading hierarchy in your page (h1, then h2, then h3, etc.). Do not skip heading levels.
- If you override the `tag` prop to a non-semantic element (e.g., `tag="div"` on a heading), ensure you add the appropriate `role` and `aria-level` attributes to preserve semantics for screen readers.
