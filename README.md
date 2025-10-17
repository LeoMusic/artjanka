# Artjanka - Twenty Twenty-Five Child Theme

A WordPress child theme for the Twenty Twenty-Five theme.

## Description

Artjanka is a child theme designed to extend and customize the WordPress Twenty Twenty-Five theme. It provides a foundation for adding custom styles and functionality while maintaining compatibility with the parent theme's updates.

## Requirements

- WordPress 6.4 or higher
- Twenty Twenty-Five parent theme installed and activated

## Installation

1. Download or clone this repository
2. Upload the `artjanka` folder to `/wp-content/themes/` directory
3. Make sure the Twenty Twenty-Five parent theme is installed
4. Go to WordPress Admin > Appearance > Themes
5. Activate the Artjanka theme

## Features

- Properly enqueues parent theme styles
- Ready for custom CSS additions in `style.css`
- Follows WordPress coding standards
- Includes theme screenshot for WordPress admin

## Customization

### Adding Custom Styles
Add your custom CSS in the `style.css` file below the comment:
```css
/* Add your custom styles below this line */
```

### Adding Custom Functions
Add your custom PHP functions in the `functions.php` file.

## File Structure

```
artjanka/
├── functions.php    # Theme functions and enqueue scripts
├── style.css        # Main stylesheet with theme headers
├── screenshot.png   # Theme screenshot (1200x900)
└── README.md        # This file
```

## Support

For issues and questions, please visit the [GitHub repository](https://github.com/LeoMusic/artjanka).

## License

This theme is licensed under the GNU General Public License v2 or later.
