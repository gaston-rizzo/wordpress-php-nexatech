<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// ========================================================================================================
// Fuerza no-cache para desarrollo en todas las páginas
// Evita que WordPress y el navegador cacheen la página HTML.
// Cada recarga sirve la versión más reciente del template (front-page.php, page-{slug}.php, etc.).
// ======================================================================================================== 
function force_nocache_for_dev() {
    if( !is_admin() ) {
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Pragma: no-cache");
        header("Expires: 0");
    }
}
add_action('send_headers', 'force_nocache_for_dev');

/* ==========================================================================================
 * ENQUEUE DE CSS – NEXATECH (FORZADO, SIN CACHE) 
 * - Carga el archivo nexatech.css desde el theme
 * - Usa filemtime() como versión para evitar que el navegador use una versión vieja del CSS. 
 * - Cada vez que el archivo se modifica, cambia la versión del CSS
 * - Se inyecta automáticamente dentro del <head> vía wp_head()
 * - Prioridad 20 para asegurarse de cargar después de estilos base
 * ========================================================================================== */
add_action('wp_enqueue_scripts', function () {

    // Ruta absoluta al archivo CSS dentro del theme
    $css_path = get_template_directory() . '/nexatech.css';

    // URL pública del archivo CSS
    $css_uri  = get_template_directory_uri() . '/nexatech.css';

    // Verifica que el archivo exista antes de encolarlo
    if ( file_exists( $css_path ) ) {

        wp_enqueue_style(
            'nexatech-main',     // Handle único del estilo
            $css_uri,            // URL del CSS
            [],                  // Dependencias (ninguna)
            filemtime( $css_path ), // Versión dinámica (anti-cache)
            'all'                // Media
        );

    }
}, 20);

// Habilita imágenes destacadas (featured image) para Páginas y Entradas (pages y posts)
// Esto es necesario porque el tema es un tema personalizado, no es blocksy. Parece que en blocksy por defecto si pone
// imagenes destacadas a las paginas que quiero que sean articulos.
add_theme_support( 'post-thumbnails', array( 'page', 'post' ) );

/* ================================================================================= 
 * Carga el CSS de Splide únicamente en la página "casos-de-estudio"
 * El archivo se inyecta correctamente en el <head> mediante wp_head()
 * ================================================================================= */
function nexatech_enqueue_splide_css_only_cases() {

    // Verifica que estemos en la página con slug "casos-de-estudio"
    if ( is_page('casos-de-estudio') ) {

        // Encola la hoja de estilos oficial de Splide desde CDN
        wp_enqueue_style(
            'splide-css', // Handle (identificador único del estilo)
            'https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css', // URL del CSS
            array(), // Dependencias (ninguna)
            '4.1.4' // Versión del archivo (para control de caché)
        );

    }

}

// Hook que asegura que el CSS se cargue en el <head> de la página
add_action('wp_enqueue_scripts', 'nexatech_enqueue_splide_css_only_cases');

/* =====================================================================
   Quitar EMOJIS (JS + CSS + DNS)
   Desactivar emojis en frontend
   ✔ Elimina:
		wp-emoji-release.min.js
		<style id="wp-emoji-styles-inline-css">   
===================================================================== */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

/* =====================================================================
   Quitar BLOCK LIBRARY (Gutenberg CSS)
   Si no se usa bloques en frontend
   ✔ Elimina:
	 	wp-block-library-inline-css
		classic-theme-styles-inline-css
		global-styles-inline-css (en la mayoría de los casos)
		NO hacerlo  si se renderiza bloques en frontend.   
===================================================================== */
add_action('wp_enqueue_scripts', function () {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('classic-theme-styles');
}, 100);

/* =====================================================================
   Quitar GLOBAL STYLES (WordPress 5.9+)
   ✔ Elimina:
	 	global-styles-inline-css
		variables CSS de WP
===================================================================== */
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');

/* =====================================================================
   Quitar DASHICONS (solo frontend)
    ✔ Elimina:
	  	dashicons.min.css
===================================================================== */
add_action('wp_enqueue_scripts', function () {
    if ( ! is_user_logged_in() ) {
        wp_deregister_style('dashicons');
    }
}, 100);

/* =====================================================================
   Quitar ADMIN BAR EN FRONTEND
   ✔ Elimina:
	 	<div id="wpadminbar">
		admin-bar.min.css
		admin-bar.min.js
		el margin-top: 32px
===================================================================== */
add_filter('show_admin_bar', '__return_false');

/* =====================================================================
   Quitar CSS auto sizes de imágenes (opcional)
===================================================================== */
add_filter('wp_img_tag_add_auto_sizes', '__return_false');