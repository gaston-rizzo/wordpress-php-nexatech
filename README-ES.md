# NexaTech

NexaTech es un proyecto de portfolio que simula una consultora tecnológica B2B, desarrollado con **WordPress y PHP** mediante un tema propio.

El sitio utiliza un tema WordPress propio, sin tema padre. El tema define sus plantillas en PHP, WordPress administra páginas, contenido e imágenes, `nexatech.css` define la interfaz y JavaScript agrega las interacciones dinámicas.

## Tecnologías principales

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

## Qué incluye el sitio

- Portada para consultora tecnológica B2B con servicios, métricas y casos de estudio.
- Sección de servicios.
- Página de proceso con timeline y métricas animadas.
- Casos de estudio administrados desde WordPress.
- Carrusel continuo de marcas.
- Filtros dinámicos de casos en la portada.
- Texto animado en el hero.
- Imágenes destacadas para los casos de estudio.
- Formulario de contacto con validación en HTML y PHP, y sanitización de los datos recibidos.
- Diseño adaptable mediante CSS propio.

El formulario actual valida los datos, los sanitiza y muestra estados de éxito o error, pero **no envía correos ni guarda las consultas**.

## Estructura del proyecto

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

## Tema personalizado

El código propio del sitio se encuentra en:

```text
src/wp-content/themes/nexatech-theme/
```

Los archivos principales son:

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

`style.css` registra ante WordPress el tema **NexaTech Custom**.

`functions.php` contiene la configuración global del tema, carga `nexatech.css`, habilita imágenes destacadas y realiza ajustes sobre los recursos que WordPress carga en el frontend.

`front-page.php` construye la portada y utiliza AOS, Typed.js e Isotope para las interacciones principales.

`page-casos-de-estudio.php` utiliza Splide y su extensión Auto Scroll para el carrusel de marcas.

## Contenido administrado con WordPress

El tema `nexatech-theme` utiliza la estructura estándar de WordPress: no crea tablas propias ni registra Custom Post Types específicos.

Los tres casos desarrollados se almacenan como páginas de WordPress:

```text
Vantix Retail
Stratum Solutions
Axionis Pharma
```

Cada caso utiliza `page-articulo.php` como plantilla común. El contenido se obtiene mediante el Loop de WordPress y `the_content()`, mientras la imagen destacada se relaciona mediante los attachments del CMS.

Las páginas principales como Inicio, Servicios, Proceso, Casos de estudio y Contacto mantienen gran parte de su estructura directamente en los templates PHP.

## Recursos externos

El frontend carga algunas librerías desde servicios externos:

- AOS para animaciones durante el scroll.
- Typed.js para el texto dinámico de la portada.
- Isotope para los filtros de casos.
- Splide para el carrusel de marcas.
- Google Fonts para la tipografía Inter.

Por este motivo, las interacciones asociadas a estas librerías requieren conexión a Internet si se utiliza la configuración actual.

## Requisitos

Para restaurar el proyecto se necesita:

- una instalación de WordPress;
- PHP y un servidor web compatible con WordPress;
- MariaDB o MySQL;
- los archivos incluidos en `src/wp-content/`;
- acceso a Internet para cargar las librerías y fuentes externas.

El tema funciona de forma independiente y no requiere Blocksy ni WooCommerce.

La base original registra algunos plugins de Hostinger y Media Sync, pero el código de `nexatech-theme` no los utiliza como dependencias funcionales para construir las páginas principales.

## Instalación

1. Instalar WordPress en el entorno local o servidor.
2. Crear una base de datos MariaDB/MySQL.
3. Importar:

```text
database/u679645666_QLcZe.sql
```

4. Configurar `wp-config.php` con los datos de la nueva base.
5. Copiar:

```text
src/wp-content/themes/nexatech-theme/
```

dentro de:

```text
wp-content/themes/
```

6. Copiar el contenido de:

```text
src/wp-content/uploads/
```

dentro de `wp-content/uploads/`.
7. Activar **NexaTech Custom** desde `Apariencia > Temas`.
8. Si cambia el dominio o la ruta de la instalación, actualizar `siteurl` y `home`.
9. Revisar la estructura de enlaces permanentes y regenerarlos si es necesario.
10. Comprobar Inicio, Servicios, Proceso, Casos de estudio, Contacto y los tres casos individuales.

## Alcance actual

NexaTech está planteado como una demostración corporativa para portfolio.

Actualmente incluye la interfaz completa, contenido administrable para los casos y procesamiento básico del formulario de contacto.

El formulario deja preparado un punto de ampliación para integrar posteriormente:

- `wp_mail()`;
- almacenamiento en base de datos;
- un CRM u otro servicio externo.

## Documentación

El proyecto incluye documentación técnica y guía visual en español e inglés.

### Español

- [`docs/es/NexaTech_Documentacion_Tecnica.pdf`](docs/es/NexaTech_Documentacion_Tecnica.pdf)
- [`docs/es/NexaTech_Guia_Visual.pdf`](docs/es/NexaTech_Guia_Visual.pdf)

### English

- [`docs/en/NexaTech_Technical_Documentation.pdf`](docs/en/NexaTech_Technical_Documentation.pdf)
- [`docs/en/NexaTech_Visual_Guide.pdf`](docs/en/NexaTech_Visual_Guide.pdf)

La documentación técnica desarrolla en profundidad la jerarquía de templates, la base de datos, los casos de estudio, el formulario, las librerías JavaScript, el CSS y el proceso de instalación.

## Demostración

El repositorio incluye un video del sitio en funcionamiento:

```text
video-sitio-nexatech.mp4
```
