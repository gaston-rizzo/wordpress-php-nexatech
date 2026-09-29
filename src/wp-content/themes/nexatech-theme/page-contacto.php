<?php
if ( ! defined('ABSPATH') ) exit;

/* =============================================================================================
   PROCESAR FORMULARIO
   Este bloque se ejecuta solo cuando el formulario se envía por método POST
   ============================================================================================= */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    /* ===============================
       SANITIZACIÓN DE DATOS
       Limpiamos TODO lo que viene del usuario para evitar:
       - XSS
       - inyección de código
       - datos corruptos
    =============================== */

    // Limpia texto plano (elimina HTML, JS, espacios raros)
    $first_name = sanitize_text_field($_POST['first_name'] ?? '');

    // Apellido, mismo tratamiento que nombre
    $last_name  = sanitize_text_field($_POST['last_name'] ?? '');

    // Limpia y valida estructura básica de email
    $email      = sanitize_email($_POST['email'] ?? '');

    // Nombre de empresa: texto simple, sin etiquetas
    $company    = sanitize_text_field($_POST['company'] ?? '');

    // Texto largo: permite saltos de línea pero elimina scripts
    $message    = sanitize_textarea_field($_POST['message'] ?? '');

    /* ===============================
       VALIDACIÓN BACKEND (CRÍTICA)
       Aunque el HTML tenga `required`, el backend SIEMPRE debe validar.
    =============================== */

    if (
        empty($first_name) ||   // Nombre vacío → inválido
        empty($last_name)  ||   // Apellido vacío → inválido
        empty($email)      ||   // Email vacío → inválido
        empty($company)    ||   // Empresa vacía → inválido
        empty($message)    ||   // Mensaje vacío → inválido
        !is_email($email)       // Email mal formado → inválido
    ) {        
        // wp_redirect() es la función oficial de WordPress para redirigir al navegador a otra URL usando headers HTTP.
        // Redirige a la misma página con flag de error
        wp_redirect(			
			/* get_permalink: Devuelve la URL completa de la página actual en WordPress. */
			/* add_query_arg: Agrega parámetros GET (?clave=valor) a una URL. */
			/* add_query_arg( 'clave', 'valor', $url ); */
            add_query_arg('error', '1', get_permalink())
        );
        exit; // Corta ejecución (MUY importante)
    }

    /* ===============================
       PUNTO DE EXPANSIÓN
       Acá es donde el formulario hace
       algo real con los datos:
    =============================== */

    // ✔ Enviar email con wp_mail()
    // ✔ Guardar en base de datos
    // ✔ Enviar a CRM (HubSpot, etc)

    /* ===============================
       REDIRECCIÓN DE ÉXITO
       Evita reenvío del formulario
       y permite mostrar mensaje UX
    =============================== */

    wp_redirect(
        add_query_arg('sent', '1', get_permalink())
    );

    exit; // Siempre terminar después de wp_redirect
}

get_header();
?>

<div class="site-wrapper site-wrapper-contact">

    <section class="contact-hero">

        <div class="contact-container">

            <!-- COLUMNA IZQUIERDA -->
            <div class="contact-copy" data-aos="fade-up" data-aos-delay="0">
                <h1>Hablemos de tu proyecto</h1>
                <p>
                    Somos una consultora tecnológica B2B enfocada en desarrollo web,
                    automatización y arquitectura frontend robusta para empresas.
                </p>
            </div>

            <!-- COLUMNA DERECHA -->
            <div class="contact-form" data-aos="fade-left" data-aos-delay="150">
				
				<?php if (isset($_GET['sent']) && $_GET['sent'] === '1') : ?>
                    <div class="form-success">
                        Gracias, recibimos tu consulta. Te responderemos a la brevedad.
                    </div>
				    <!-- CTA POST-CONVERSIÓN -->
                    <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn btn-secondary">
                        Volver al inicio
                    </a>                
      			<?php elseif (isset($_GET['error']) && $_GET['error'] === '1') : ?>
                    <!-- MENSAJE DE ERROR -->
                    <div class="form-error">
                        Hubo un error. Por favor completá todos los campos correctamente.
                    </div>
                <?php endif; ?>
				
				<?php if (!isset($_GET['sent']) ) : ?>
				
					<form class="b2b-form" method="post">

						<div class="form-row">
							<input type="text" name="first_name" placeholder="Nombre*" required>
							<input type="text" name="last_name" placeholder="Apellido*" required>
						</div>

						<div class="form-row">
							<input type="email" name="email" placeholder="Email corporativo*" required>
						</div>

						<div class="form-row">
							<input type="text" name="company" placeholder="Empresa*" required>
						</div>

						<div class="form-row">
							<textarea name="message" rows="4" placeholder="¿Qué necesitás resolver?*" required></textarea>
						</div>

						<button type="submit" class="btn btn-primary">
							Enviar consulta
						</button>

					</form>
				
				 <?php endif; ?>

            </div>

        </div>

    </section>

</div>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
	AOS.init({
		// Duración de la animación en milisegundos (900ms = 0.9 segundos)
		duration: 900,
		 // Tipo de aceleración de la animación (cómo se "suaviza" al final)
		/* easing: 'ease-out-cubic', */
		easing: 'cubic-bezier(0.22, 1, 0.36, 1)',
		/* La animacion se repite siempre */
		once: false,
		/* La animación se activa cuando la parte superior del elemento está a 200px del viewport. */
		offset: 200
	});
</script>

<?php get_footer(); ?>