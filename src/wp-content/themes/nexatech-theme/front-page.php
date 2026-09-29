<?php
if ( ! defined('ABSPATH') ) exit;
get_header();
?>

<main>
	  <div class="site-wrapper">	
      <section class="hero">
        <div class="container hero-grid">

			<!-- COLUMNA IZQUIERDA -->
            <!-- Texto -->
            <div data-aos="fade-up">								
				<h1>
					Construimos<br>
					<span id="typed"></span><br>
					que escalan.
				</h1>
                <p>
                    Somos una consultora tecnológica enfocada en desarrollo web,
                    automatización y arquitectura frontend robusta para empresas.
                </p>
                <div class="hero-actions">
                    <a href="/contacto" class="btn btn-primary">Hablar con un experto</a>                    
                </div>
            </div>

			<!-- COLUMNA DERECHA -->
            <!-- Visual -->
			<div class="hero-right" data-aos="fade-up" data-aos-delay="150">

				<div class="hero-visual">
					<div class="card">
						<h3>Performance promedio</h3>
						<div class="metric" data-target="98">0<span>/100</span></div>
					</div>

					<div class="card">
						<h3>Proyectos entregados</h3>
						<div class="metric" data-target="120">0<span>+</span></div>
					</div>

					<div class="card">
						<h3>Clientes B2B</h3>
						<div class="metric" data-target="40">0<span>+</span></div>
					</div>
				</div>

				<div class="demo-credit">
					Sitio web demo creado por <strong>Gaston Rizzo</strong>
				</div>

			</div>

        </div>
    </section>
		  
	<section id="servicios" class="services">
		<div class="container">

			<!-- Header -->
			<div class="services-header" data-aos="fade-up">
				<h2>Servicios</h2>
				<p>
					Ayudamos a empresas a construir productos digitales sólidos,
					escalables y bien diseñados.
				</p>
			</div>

			<!-- Grid -->
			<div class="services-grid">

				<div class="service-card" data-aos="fade-up" data-aos-delay="0">
					<h3>Desarrollo Web</h3>
					<p>
						Sitios y aplicaciones web rápidas, accesibles y mantenibles,
						enfocadas en objetivos reales de negocio.
					</p>
				</div>

				<div class="service-card" data-aos="fade-up" data-aos-delay="150">
					<h3>Arquitectura Frontend</h3>
					<p>
						Estructuras frontend claras y escalables, pensadas para crecer
						sin volverse frágiles con el tiempo.
					</p>
				</div>

				<div class="service-card" data-aos="fade-up" data-aos-delay="300">
					<h3>Automatización</h3>
					<p>
						Procesos automatizados que reducen errores, ahorran tiempo
						y mejoran la eficiencia operativa.
					</p>
				</div>

				<div class="service-card" data-aos="fade-up" data-aos-delay="450">
					<h3>Consultoría Técnica</h3>
					<p>
						Análisis, auditoría y acompañamiento técnico para tomar
						mejores decisiones digitales.
					</p>
				</div>

			</div>
		</div>
	</section>
	
	<section id="proceso" class="process">
		<div class="container">

			<!-- Header -->
			<div class="process-header" data-aos="fade-up">
				<h2>Proceso de trabajo</h2>
				<p>
					Un enfoque claro y estructurado para entregar soluciones
					digitales eficientes y sostenibles.
				</p>
			</div>

			<!-- Steps -->
			<div class="process-grid">

				<div class="process-step" data-aos="fade-up" data-aos-delay="0">
					<div class="step-number">01</div>
					<h3>Análisis</h3>
					<p>
						Entendemos el negocio, los objetivos y las limitaciones
						técnicas antes de tomar decisiones.
					</p>
				</div>

				<div class="process-step" data-aos="fade-up" data-aos-delay="150">
					<div class="step-number">02</div>
					<h3>Estrategia</h3>
					<p>
						Definimos una solución clara, priorizando impacto,
						escalabilidad y mantenibilidad.
					</p>
				</div>

				<div class="process-step" data-aos="fade-up" data-aos-delay="300">
					<div class="step-number">03</div>
					<h3>Desarrollo</h3>
					<p>
						Construimos con foco en calidad, performance y buenas
						prácticas técnicas.
					</p>
				</div>

				<div class="process-step" data-aos="fade-up" data-aos-delay="450">
					<div class="step-number">04</div>
					<h3>Optimización</h3>
					<p>
						Medimos, iteramos y optimizamos para asegurar resultados
						reales a largo plazo.
					</p>
				</div>

			</div>
		</div>
	</section>
		
	<section id="casos" class="cases">
		<div class="container">

			<div class="cases-header" data-aos="fade-up">
				<h2>Casos de estudio</h2>
			</div>

			<!-- Filtros -->
			<div class="cases-filters" data-aos="fade-up">
				<button class="filter active" data-filter="*">Todos</button>
				<button class="filter" data-filter=".web">Web</button>
				<button class="filter" data-filter=".frontend">Frontend</button>
				<button class="filter" data-filter=".automation">Automatización</button>
			</div>

			<!-- Grid -->
			<div class="cases-grid">
				<div class="case-item web">
					<h3>Plataforma corporativa</h3>
					<p>Website institucional para empresa B2B.</p>
				</div>

				<div class="case-item frontend">
					<h3>Dashboard interno</h3>
					<p>Interfaz frontend para gestión de datos.</p>
				</div>

				<div class="case-item automation">
					<h3>Automatización de procesos</h3>
					<p>Optimización de flujos operativos.</p>
				</div>

				<div class="case-item web frontend">
					<h3>Landing de producto</h3>
					<p>Conversión y performance optimizada.</p>
				</div>
			</div>

		</div>
	</section>
	</div>
	
</main>
	
<!-- ===========================================================
     Librería AOS (Animate On Scroll)
     ===========================================================
     AOS permite animar elementos al hacer scroll en la página.
     Se puede aplicar fade, slide, zoom, flip, etc.
     Muy útil para que los sitios se vean dinámicos y modernos.
     Se carga desde un CDN para no depender de archivos locales.
-->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script>
  /**
   * Inicialización de AOS
   * Configura cómo y cuándo se disparan las animaciones al hacer scroll
   */
  AOS.init({
    // Duración de cada animación en milisegundos
    // 800ms = fluido y profesional (ni demasiado lento ni brusco)
    duration: 800,
    // Curva de aceleración de la animación
    // 'ease-out-cubic' → entrada suave y salida natural
    /*easing: 'ease-out-cubic',*/
	/* Suave al final, sensación premium. */
	/* Un poco más rápido */
	easing: 'cubic-bezier(0.4, 0, 0.2, 1)',
    // Ejecuta la animación una sola vez
    // Si es true, no se vuelve a disparar al hacer scroll arriba/abajo
    once: false,
    // Offset en píxeles antes de que el elemento entre en viewport
    // 80px permite que la animación arranque un poco antes de que el elemento esté completamente visible
    offset: 80
  });
</script>
			
<script>
/**
 * Espera a que la página cargue completamente
 * (HTML + CSS + imágenes + fuentes + JS)
 * para evitar desfasajes visuales.
 */
window.addEventListener('load', () => {

    // Contenedor principal del hero donde viven las métricas
    const hero = document.querySelector('.hero-visual');

    // Si no existe el hero (ej: otra página), salimos sin hacer nada
    if (!hero) return;

    // Selecciona todos los elementos contadores dentro del hero
    const metrics = hero.querySelectorAll('.metric');

    // Flag para evitar que la animación se ejecute más de una vez
    let animated = false;

    /**
     * Sincronización con AOS
     * La animación de los números arranca cuando termina la animación AOS del hero
     *
     * data-aos-delay   → delay configurado en el HTML
     * aosDuration      → duración fija configurada en AOS.init()
     */
    const aosDelay = parseInt(hero.dataset.aosDelay || 0, 10);
    const aosDuration = 800; // duración en ms de AOS (fade, slide, etc.)
    const startAfter = aosDelay + aosDuration;

    // Espera a que finalice la animación AOS antes de animar los números
    setTimeout(() => {

        // Si ya se animó, no vuelve a ejecutarse
        if (animated) return;

        // Recorre cada métrica individual
        metrics.forEach(metric => {

            // Valor final al que debe llegar el contador
            const target = parseInt(metric.dataset.target, 10);

            // Valor inicial del contador
            let current = 0;

            // Velocidad de incremento (ajusta suavidad / duración)
            const speed = target / 35;

            /**
             * Función de animación del número
             * Usa requestAnimationFrame para animar de forma fluida y eficiente
             */
            function animate() {
                current += speed;

                if (current < target) {
                    // Actualiza el número visible (redondeado)
                    metric.firstChild.textContent = Math.ceil(current);
                    // Solicita el siguiente frame de animación
                    requestAnimationFrame(animate);
                } else {
                    // Asegura que termine exactamente en el valor final
                    metric.firstChild.textContent = target;
                }
            }

            // Inicia la animación del contador
            animate();
        });

        // Marca la animación como ejecutada
        animated = true;

    }, startAfter);
});
</script>
		
<!-- Carga la librería Isotope desde un CDN -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script>
/* ===========================================================
   1. ¿Qué es Isotope?
   ===========================================================
   Isotope es una librería JavaScript que permite:
   - Filtrar elementos de un contenedor dinámicamente.
   - Reorganizar automáticamente la posición de los elementos.
   - Aplicar diferentes layouts (grid, masonry, filas ajustadas, etc.).
   Es muy usada para portfolios, galerías de productos, casos de estudio, etc.
*/

/* Selecciona el contenedor principal de los items que se van a organizar */
var grid = document.querySelector('.cases-grid');

/* Inicializa Isotope sobre ese contenedor */
var iso = new Isotope(grid, {
    itemSelector: '.case-item', // Define qué elementos dentro del contenedor se van a mover/filtrar
    layoutMode: 'fitRows'       // Layout en filas ajustadas (tipo grid simple)
});

/* Selecciona todos los botones o links que sirven como filtros */
var filters = document.querySelectorAll('.filter');

/* Se agrega un listener a cada botón de filtro para detectar clicks */
filters.forEach(btn => {
    btn.addEventListener('click', function () {
        /* Quita la clase 'active' de todos los botones para que solo uno se vea activo */
        filters.forEach(b => b.classList.remove('active'));
        /* Agrega la clase 'active' al botón que fue clickeado */
        this.classList.add('active');

        /* Obtiene el valor del filtro desde el atributo 'data-filter' */
        var filterValue = this.getAttribute('data-filter');

        /* Aplica el filtro en Isotope:
           - Muestra los items que coinciden con filterValue
           - Oculta los que no coinciden
           - Reorganiza automáticamente el layout */
        iso.arrange({ filter: filterValue });
    });
});
</script>	
	
<!-- Carga la librería Typed.js desde un CDN -->
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<script>
/* ===========================================================
   1. ¿Qué es Typed.js?
   ===========================================================
   Typed.js es una librería JavaScript que permite crear efectos
   de escritura animada, simulando que el texto se escribe y borra
   automáticamente, ideal para encabezados, slogans o landing pages.
*/

/* Inicializa Typed.js sobre el elemento con id 'typed' */
new Typed('#typed', {
    /* Array de textos que se van a escribir uno tras otro */
    strings: [
        'empresas B2B',
        'plataformas web',
        'productos digitales'
    ],
    
    typeSpeed: 50,       // Velocidad de escritura (ms por caracter)
    backSpeed: 25,       // Velocidad de borrado (ms por caracter)
    backDelay: 1200,     // Tiempo que se mantiene el texto antes de borrarlo (en ms)
    loop: true,          // Repite la animación en bucle infinito
    smartBackspace: true // Solo borra lo que cambia entre cadenas, más natural
});
</script>

<?php get_footer(); ?>