# Copilot Instructions for Artjanka WordPress Child Theme

## Project Overview
This is a WordPress child theme extending Twenty Twenty-Five, designed for Janka Art's website. The theme follows WordPress child theme conventions and maintains compatibility with parent theme updates.

## Key Architecture Patterns

### Child Theme Structure
- **Parent Dependency**: Always references `twentytwentyfive` as the Template in `style.css` header
- **Style Enqueuing**: Uses proper WordPress hooks in `functions.php` to load parent styles first, then child styles with dependency
- **Version Management**: Dynamically pulls versions from `wp_get_theme()` to ensure cache busting on updates

### File Organization
```
artjanka/
├── functions.php    # WordPress hooks and theme functionality
├── style.css        # Theme header + custom CSS after comment marker
├── screenshot.png   # WordPress admin preview (1200x900px)
└── README.md        # Installation and customization guide
```

## Development Workflows

### Adding Custom Styles
- Place all custom CSS in `style.css` after the comment: `/* Add your custom styles below this line */`
- Never modify the theme header block at the top of `style.css`
- Child theme styles automatically override parent styles due to CSS cascade order

### Adding Custom Functions
- Add PHP functions to `functions.php` using WordPress hooks and filters
- Follow WordPress coding standards (spaces, not tabs; proper docblocks)
- Prefix all custom functions with `artjanka_` to avoid conflicts
- Use `add_action()` and `add_filter()` instead of direct function calls

### WordPress Integration Points
- **Style Loading**: `wp_enqueue_scripts` action handles CSS dependencies
- **Parent Theme**: Twenty Twenty-Five must be installed; child theme won't activate without it
- **Theme Detection**: WordPress reads `Template: twentytwentyfive` from style.css header

## Critical Development Patterns

### WordPress Child Theme Requirements
1. `style.css` must contain proper theme header with `Template:` pointing to parent
2. `functions.php` must enqueue parent styles before child styles using dependencies
3. Never directly `@import` parent styles - always use `wp_enqueue_style()`

### Version Management Pattern
```php
// Parent theme version for cache busting
wp_get_theme()->parent()->get('Version')

// Child theme version
wp_get_theme()->get('Version')
```

### Local Development Environment
- Project runs in XAMPP at `c:\xampp\htdocs\jankaschuringa\wp-content\themes\artjanka`
- WordPress install is at `c:\xampp\htdocs\jankaschuringa`
- Theme is activated through WordPress admin, not directly accessed

## Debugging and Testing
- Test theme activation/deactivation in WordPress admin
- Verify parent theme styles load before child theme styles in browser dev tools
- Check that custom CSS additions don't break responsive design from parent theme
- Test with different WordPress versions (6.4+ required)

## External Dependencies
- **Parent Theme**: Twenty Twenty-Five (must be installed and available)
- **WordPress Core**: 6.4+ (specified in README requirements)
- **PHP**: Compatible with WordPress requirements

## Common Modification Patterns
- Override parent theme templates by copying them to child theme root
- Add theme support features using `add_theme_support()` in functions.php
- Customize WordPress features using standard WordPress hooks, not direct modifications
- Maintain GPL v2+ licensing for all custom code additions