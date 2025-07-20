# Theming

Lux uses Tailwind CSS v4's new `@theme` block syntax for theming. This allows you to define custom design tokens directly in your CSS.

## Basic Theme Configuration

In your main CSS file (typically `app.css`), you can define your theme using the `@theme` block:

```css
@import "tailwindcss";

@theme {
  --color-primary: hsl(240 5.9% 10%);
  --color-primary-foreground: hsl(0 0% 98%);
  --color-secondary: hsl(240 4.8% 95.9%);
  --color-secondary-foreground: hsl(240 5.9% 10%);
  --color-background: hsl(0 0% 100%);
  --color-foreground: hsl(240 10% 3.9%);
  --color-border: hsl(240 5.9% 90%);
  --color-ring: hsl(240 5.9% 10%);
  
  --radius: 0.75rem;
}
```

## Dark Mode Theming

For dark mode support, define your dark theme colors outside the `@theme` block using the `.dark` selector:

```css
/* Dark mode variables */
.dark {
  --color-background: hsl(240 10% 3.9%);
  --color-foreground: hsl(0 0% 98%);
  --color-primary: hsl(0 0% 98%);
  --color-primary-foreground: hsl(240 5.9% 10%);
  --color-secondary: hsl(240 3.7% 15.9%);
  --color-secondary-foreground: hsl(0 0% 98%);
  --color-border: hsl(240 3.7% 15.9%);
  --color-ring: hsl(240 4.9% 83.9%);
}
```

## Using Theme Variables

Once defined, you can use these variables in your Lux components. The components automatically pick up the custom properties:

```html
<div class="bg-background text-foreground border-border">
  Content styled with theme variables
</div>
```

## Customizing Component Colors

You can extend the theme with custom colors for specific use cases:

```css
@theme {
  --color-accent: hsl(210 40% 95%);
  --color-accent-foreground: hsl(210 40% 15%);
  --color-destructive: hsl(0 84.2% 60.2%);
  --color-destructive-foreground: hsl(0 0% 98%);
  --color-muted: hsl(210 40% 95%);
  --color-muted-foreground: hsl(215.4 16.3% 46.9%);
}
```

## Migration from Tailwind CSS v3

If you're upgrading from Tailwind CSS v3, note these key changes:

1. **No `tailwind.config.js`**: Configuration is now done in CSS using `@theme` blocks
2. **No PostCSS configuration**: Tailwind v4 includes built-in CSS processing
3. **New import syntax**: Use `@import "tailwindcss"` instead of `@tailwind` directives
4. **Automatic content detection**: No need to configure content paths

## Best Practices

- Keep all theme variables in the `@theme` block for light mode
- Use the `.dark` selector for dark mode overrides
- Use semantic color names that describe their purpose rather than their appearance
- Test your theme in both light and dark modes
- Consider accessibility when choosing color combinations

For more information about Tailwind CSS v4 theming, visit the [official Tailwind CSS documentation](https://tailwindcss.com/docs).