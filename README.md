# Biodata App

A simple PHP-based Biodata form and viewer with modern styling. Collects basic personal information and displays the submitted data neatly.

## Features
- Responsive, modern UI with a dark theme
- Form validation via HTML attributes
- Displays submitted biodata in a clean card layout
- Uses the Lexend font via Google Fonts
- Lightweight, no external PHP frameworks required

## Tech Stack
- PHP (vanilla)
- HTML5
- CSS3 (custom styles in `css/style.css`)
- Google Fonts (Lexend)

## Project Structure
```
.
├── index.php        # Main PHP app: form + handler + display
├── index.html       # (Optional) Static entry or landing page
└── css/
    └── style.css    # Stylesheet (imports Lexend)
```

## Prerequisites
- PHP 7.4+ (or any version supported by your environment)
- A local server (e.g., XAMPP) or PHP built-in server

## Local Setup
Using XAMPP (recommended if you already have it):
1. Place this project in your XAMPP web root (e.g., `c:/xampp/htdocs/biodata` or the provided path you use).
2. Start Apache from the XAMPP Control Panel.
3. Open the app in your browser:
   - `http://localhost/biodata/index.php` (adjust path if different)

Using PHP’s built-in server:
1. Open a terminal in the project directory.
2. Run:
   ```bash
   php -S localhost:8080
   ```
3. Visit `http://localhost:8080/index.php` in your browser.

## Usage
1. Open the app URL (see above).
2. Fill in the biodata form fields.
3. Submit to see your data rendered in a styled card.

## Customization
- Styles: Edit `css/style.css` (colors, spacing, typography). The base font-family is set to `"Lexend", sans-serif`. You can replace or extend the stack as needed.
- Fields: Modify the form inputs and display logic in `index.php`.

## Screenshots
Add screenshots or GIFs here to showcase the form and the result view.

## Deployment
- Upload the project to any PHP-capable hosting.
- Ensure the document root points to this directory or reference files correctly.

## Contributing
Pull requests are welcome. For major changes, open an issue first to discuss what you would like to change.

## License
This project is MIT licensed. See `LICENSE` if included, or feel free to adopt MIT for your fork.
