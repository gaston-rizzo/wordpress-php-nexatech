# NexaTech

NexaTech is a portfolio project that simulates a B2B technology consulting firm, built with **WordPress and PHP** using a fully custom theme.

The site uses a custom WordPress theme with no parent theme. The theme defines its templates in PHP, WordPress manages pages, content, and images, `nexatech.css` defines the interface, and JavaScript adds dynamic interactions.

## Main technologies

- WordPress.
- PHP.
- MariaDB.
- HTML5.
- CSS3.
- JavaScript.
- AOS 2.3.4.
- Typed.js 2.0.12.
- Isotope 3.
- Splide 4.1.4 + Auto Scroll 0.5.3.
- Google Fonts.

## What the site includes

- Homepage for a B2B technology consulting firm with services, metrics, and case studies.
- Services section.
- Process page with a timeline and animated metrics.
- Case studies managed from WordPress.
- Continuous brand carousel.
- Dynamic case study filters on the homepage.
- Animated hero text.
- Featured images for case studies.
- Contact form with validation in HTML and PHP, and sanitization of submitted data.
- Responsive design using custom CSS.

The current form validates and sanitizes the data and displays success or error states, but **does not send emails or store inquiries**.

## Project structure

```text
wordpress-php-nexatech/
├── README-ES.md
├── README-EN.md
├── database/
│   └── u679645666_QLcZe.sql
├── docs/
│   ├── en/
│   │   ├── NexaTech_Technical_Documentation.pdf
│   │   └── NexaTech_Visual_Guide.pdf
│   └── es/
│       ├── NexaTech_Documentacion_Tecnica.pdf
│       └── NexaTech_Guia_Visual.pdf
├── src/
│   └── wp-content/
│       ├── themes/
│       │   └── nexatech-theme/
│       └── uploads/
└── video-sitio-nexatech.mp4
```

## Custom theme

The site's custom code is located in:

```text
src/wp-content/themes/nexatech-theme/
```

The main files are:

```text
front-page.php
page-servicios.php
page-proceso.php
page-casos-de-estudio.php
page-articulo.php
page-contacto.php
header.php
footer.php
functions.php
nexatech.css
style.css
index.php
```

`style.css` registers the **NexaTech Custom** theme in WordPress.

`functions.php` contains the theme's global configuration, loads `nexatech.css`, enables featured images, and applies adjustments to resources that WordPress loads on the frontend.

`front-page.php` builds the homepage and uses AOS, Typed.js, and Isotope for the main interactions.

`page-casos-de-estudio.php` uses Splide and its Auto Scroll extension for the brand carousel.

## Content managed with WordPress

The `nexatech-theme` theme uses the standard WordPress structure: it does not create custom tables or register project-specific Custom Post Types.

The three developed case studies are stored as WordPress pages:

```text
Vantix Retail
Stratum Solutions
Axionis Pharma
```

Each case uses `page-articulo.php` as a common template. Content is retrieved through the WordPress Loop and `the_content()`, while the featured image is linked through the CMS attachments.

The main pages, such as Home, Services, Process, Case Studies, and Contact, keep much of their structure directly in the PHP templates.

## External resources

The frontend loads some libraries from external services:

- AOS for scroll animations.
- Typed.js for dynamic homepage text.
- Isotope for case study filters.
- Splide for the brand carousel.
- Google Fonts for the Inter typeface.

For this reason, the interactions associated with these libraries require an Internet connection when using the current configuration.

## Requirements

To restore the project, you need:

- a WordPress installation;
- PHP and a web server compatible with WordPress;
- MariaDB or MySQL;
- the files included in `src/wp-content/`;
- Internet access to load the external libraries and fonts.

The theme works independently and does not require Blocksy or WooCommerce.

The original database includes some Hostinger and Media Sync plugins, but the `nexatech-theme` code does not use them as functional dependencies for building the main pages.

## Installation

1. Install WordPress in the local environment or on the server.
2. Create a MariaDB/MySQL database.
3. Import:

```text
database/u679645666_QLcZe.sql
```

4. Configure `wp-config.php` with the new database credentials.
5. Copy:

```text
src/wp-content/themes/nexatech-theme/
```

into:

```text
wp-content/themes/
```

6. Copy the contents of:

```text
src/wp-content/uploads/
```

into `wp-content/uploads/`.
7. Activate **NexaTech Custom** from `Appearance > Themes`.
8. If the installation domain or path changes, update `siteurl` and `home`.
9. Review the permalink structure and regenerate it if necessary.
10. Check Home, Services, Process, Case Studies, Contact, and the three individual case studies.

## Current scope

NexaTech is designed as a corporate portfolio demo.

It currently includes the complete interface, manageable content for the case studies, and basic contact form processing.

The form provides an extension point for future integration with:

- `wp_mail()`;
- database storage;
- a CRM or another external service.

## Documentation

The project includes technical documentation and a visual guide in both Spanish and English.

### Spanish

- [`docs/es/NexaTech_Documentacion_Tecnica.pdf`](docs/es/NexaTech_Documentacion_Tecnica.pdf)
- [`docs/es/NexaTech_Guia_Visual.pdf`](docs/es/NexaTech_Guia_Visual.pdf)

### English

- [`docs/en/NexaTech_Technical_Documentation.pdf`](docs/en/NexaTech_Technical_Documentation.pdf)
- [`docs/en/NexaTech_Visual_Guide.pdf`](docs/en/NexaTech_Visual_Guide.pdf)

The technical documentation provides in-depth coverage of the template hierarchy, database, case studies, form, JavaScript libraries, CSS, and installation process.

## Demo

The repository includes a video showing the site in operation:

```text
video-sitio-nexatech.mp4
```
