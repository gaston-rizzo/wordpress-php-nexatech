<?php
if ( ! defined('ABSPATH') ) exit;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">		
	
	<!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>	
    <div class="container nav">
    	<div class="logo">NEXATECH</div>
			<nav class="nav-links">
				
				<a href="<?php echo home_url('/'); ?>"
				   class="<?php echo is_front_page() ? 'active' : ''; ?>">
					Inicio
				</a>

				<a href="<?php echo home_url('/servicios/'); ?>"
				   class="<?php echo is_page('servicios') ? 'active' : ''; ?>">
					Servicios
				</a>

				<a href="<?php echo home_url('/proceso/'); ?>"
				   class="<?php echo is_page('proceso') ? 'active' : ''; ?>">
					Proceso
				</a>

				<a href="<?php echo home_url('/casos-de-estudio/'); ?>"
				   class="<?php echo is_page('casos-de-estudio') ? 'active' : ''; ?>">
					Casos
				</a>

				<a href="<?php echo home_url('/contacto/'); ?>"
				   class="<?php echo is_page('contacto') ? 'active' : ''; ?>">
					Contacto
				</a>
		</nav>
    </div>
</header>