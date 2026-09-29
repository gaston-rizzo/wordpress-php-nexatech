<?php
if ( ! defined('ABSPATH') ) exit;
get_header();
?>

<div class="site-wrapper site-wrapper-cases">

    <!-- ================= HERO ================= -->
	<section class="services-hero">
		<div class="container services-hero-grid">

			<!-- COLUMNA IZQUIERDA -->
			<div class="services-hero-text" data-aos="fade-up">
				<h1>Casos de estudio</h1>
				<p>
					Cómo ayudamos a empresas reales a resolver problemas reales
					con tecnología.
				</p>
			</div>

			<!-- COLUMNA DERECHA: MÉTRICAS -->
			<div class="services-hero-metrics" data-aos="fade-left" data-aos-delay="150">
				<div class="metric-card">
					<div class="metric-value" data-target="35">
						<span class="suffix">-</span><span class="number">0</span><span class="suffix">%</span>
					</div>
					<p>Mantenibilidad del código</p>
				</div>
				<div class="metric-card">
					<div class="metric-value" data-target="40">
						<span class="suffix">-</span><span class="number">0</span><span class="suffix">%</span>
					</div>
					<p>Reducción en tiempos de carga</p>
				</div>
				
				<div class="metric-card">
					<div class="metric-value" data-target="100">
						<span class="number">0</span><span class="suffix">%</span>
					</div>
					<p>Casos con resultados verificables</p>
				</div>
				
			</div>
			
		</div>
	</section>
	
    <!-- ================= BLOQUE CONFIANZA / LOGOS ================= -->
    <section class="cases-trust">
        <div class="container">

            <h2 class="cases-trust-title" data-aos="fade-up" data-aos-delay="100">
                Trabajamos con equipos y marcas que exigen resultados
            </h2>

            <!-- SLIDER LOGOS -->
            <div class="splide cases-logos" aria-label="Clientes" data-aos="fade-up" data-aos-delay="200">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="<?php echo content_url('/uploads/001_nordexia.webp'); ?>" alt="Nordexia">
                        </li>
                        <li class="splide__slide">
							<img src="<?php echo content_url('/uploads/002_helion_group.webp'); ?>" alt="Helion Group">
                        </li>
                        <li class="splide__slide">							
							<img src="<?php echo content_url('/uploads/003_stratum.webp'); ?>" alt="Stratum Solutions">
                        </li>
                        <li class="splide__slide">							
							<img src="<?php echo content_url('/uploads/004_axionis_pharma.webp'); ?>" alt="Axionis Pharma">
                        </li>
                        <li class="splide__slide">
							<img src="<?php echo content_url('/uploads/005_corevia_motors.webp'); ?>" alt="Corevia Motors">
                        </li>
                        <li class="splide__slide">
							<img src="<?php echo content_url('/uploads/006_vantix_retail.webp'); ?>" alt="Vantix Retail">
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- ================= CASOS DESTACADOS ================= -->
	<section class="cases-featured">
		<div class="container">

			<div class="cases-grid">

				<!-- ================= CASO 1: VANTIX RETAIL ================= -->
				<article class="case-card" data-aos="fade-right" data-aos-delay="0">

					<a href="/casos/vantix-retail" class="case-card-link">

						<div class="case-logo">
							<img src="<?php echo content_url('/uploads/006_vantix_retail.webp'); ?>" alt="Vantix Retail">
						</div>

						<h3 class="case-title">
							Optimización de plataforma e-commerce
						</h3>

						<p class="case-problem">
							Plataforma con tiempos de carga elevados y fricción en el proceso de compra.
						</p>

						<p class="case-result">
							<span>Resultado</span>
							−42% en tiempos de carga y mejora en conversión.
						</p>

						<a href="#" class="case-link">Ver caso completo</a>

					</a>

				</article>

				<!-- ================= CASO 2: STRATUM SOLUTIONS ================= -->
				<article class="case-card" data-aos="fade-up" data-aos-delay="100">
					
					<a href="/casos/stratum-solution" class="case-card-link">

						<div class="case-logo">
							<img src="<?php echo content_url('/uploads/003_stratum.webp'); ?>" alt="Stratum Solutions">
						</div>

						<h3 class="case-title">
							Escalabilidad frontend para plataforma financiera
						</h3>

						<p class="case-problem">
							Código difícil de mantener que ralentizaba la incorporación de nuevos módulos y cambios funcionales.
						</p>

						<p class="case-result">
							<span>Resultado</span>
							Mayor velocidad de desarrollo, base de código más clara y plataforma preparada para crecer.
						</p>

						<a href="#" class="case-link">Ver caso completo</a>

					</a>

				</article>

				<!-- ================= CASO 3: AXIONIS PHARMA ================= -->
				<article class="case-card" data-aos="fade-left" data-aos-delay="200">

					<a href="/casos/axionis-pharma" class="case-card-link">

						<div class="case-logo-axionis">
							<img src="<?php echo content_url('/uploads/004_axionis_pharma.webp'); ?>" alt="Axionis Pharma">
						</div>

						<h3 class="case-title">
							Automatización de procesos internos críticos
						</h3>

						<p class="case-problem">
							Procesos manuales, riesgo operativo y falta de trazabilidad.
						</p>

						<p class="case-result">
							<span>Resultado</span>
							Ahorro operativo y mayor control regulatorio.
						</p>

						<a href="#" class="case-link">Ver caso completo</a>

					</a>

				</article>

			</div>

		</div>
	</section>
	
	<!-- ================= CTA ================= -->
    <section class="cases-cta" data-aos="fade-up" data-aos-delay="100" data-aos-anchor-placement="top-bottom">
        <div class="container">
            <h2>¿Querés ver qué podríamos hacer en tu caso?</h2>
            <a href="/contacto" class="btn btn-primary">Hablemos</a>
        </div>
    </section>

</div>

<!-- SCRIPT AOS para animaciones -->
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

<!-- SPLIDE CORE: librería principal del slider -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>

<!-- SPLIDE AUTO SCROLL: extensión para desplazamiento automático continuo -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"></script>

<!-- INICIALIZACIÓN DEL SLIDER -->
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Crear una nueva instancia de Splide sobre el contenedor .cases-logos
    new Splide('.cases-logos', {

        // Slider infinito (no tiene principio ni fin)
        type : 'loop',
        // Desactiva el drag con mouse / touch
        drag : false,
        // Oculta las flechas de navegación
        arrows : false,
        // Oculta la paginación (dots)
        pagination : false,
        // Cada slide mantiene su ancho natural
        autoWidth : true,
        // Espacio entre slides
        gap : '72px',

        // Configuración del auto scroll continuo
        autoScroll: {
            speed: 0.7,           // Velocidad del desplazamiento
            pauseOnHover: true,   // Pausa al pasar el mouse
            pauseOnFocus: false,  // No pausa al recibir foco
        }

    // Monta Splide junto con sus extensiones
    }).mount(window.splide.Extensions);

});
</script>

<script>
	// Espera a que toda la página esté cargada
	window.addEventListener('load', () => {
		
		// Contenedor principal de las métricas
		const container = document.querySelector('.services-hero-metrics');

		// Si el contenedor no existe, no se ejecuta nada
		if (!container) return;

		// Selecciona todos los valores numéricos a animar
		const metrics = container.querySelectorAll('.metric-value');

		// Flag para evitar que la animación se ejecute más de una vez
		let animated = false;

		// Delay antes de iniciar la animación
		// Coincide con la duración de la animación AOS (en ms)
		const startAfter = 900;

		// Espera el tiempo definido antes de comenzar
		setTimeout(() => {

			// Si ya se animó, corta la ejecución
			if (animated) return;

			// Recorre cada métrica
			metrics.forEach(metric => {

				// Elemento donde se muestra el número visible
				const numberEl = metric.querySelector('.number');

				// Si no existe el span .number, salta esta métrica
				if (!numberEl) return;

				// Convierte el valor objetivo desde data-target a número decimal
				// 10 = base decimal
				const target = parseInt(metric.dataset.target, 10);

				// Valor inicial del contador
				let current = 0;

				// Incremento por frame (controla la velocidad de la animación)
				const speed = target / 35;

				// Función recursiva de animación
				function animate() {
					current += speed;

					// Mientras no llegue al valor objetivo
					if (current < target) {
						numberEl.textContent = Math.ceil(current);
						requestAnimationFrame(animate);
					} else {
						// Asegura que el valor final sea exacto
						numberEl.textContent = target;
					}
				}

				// Inicia la animación del contador
				animate();
			});

			// Marca la animación como completada
			animated = true;

		}, startAfter);
	});
</script>

<?php get_footer(); ?>