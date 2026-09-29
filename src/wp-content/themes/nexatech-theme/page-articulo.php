<?php

/*
Template Name: Articulo
*/
if ( ! defined('ABSPATH') ) exit;
add_filter( 'blocksy:page:title:enabled', '__return_false' );
add_filter( 'blocksy:single:has-hero', '__return_false' );

get_header();
?>

<div class="site-wrapper site-wrapper-case-single">

    <article class="case-single">

        <div class="container">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
                <!-- Imagen destacada del caso -->
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="case-hero-image"
						 data-aos="fade-up">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>
			
                <!-- Contenido del artículo -->
                <div class="case-content"
					 data-aos="fade-up"     				 
     				 data-aos-delay="150">
                    <?php the_content(); ?>
                </div>

            <?php endwhile; endif; ?>

        </div>

    </article>

</div>

<!-- SCRIPT AOS para animaciones -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
	AOS.init({
		// Duración de la animación en milisegundos (900ms = 0.9 segundos)
		duration: 700,
		 // Tipo de aceleración de la animación (cómo se "suaviza" al final)
		/* easing: 'ease-out-cubic', */
		easing: 'cubic-bezier(0.22, 1, 0.36, 1)',
		/* La animacion no se repite */
		once: true,
		/* La animación se activa cuando la parte superior del elemento está a 200px del viewport. */
		offset: 200
	});
</script>

<?php get_footer(); ?>