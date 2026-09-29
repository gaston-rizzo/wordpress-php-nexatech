<?php
if ( ! defined('ABSPATH') ) exit;
get_header();
?>

<div class="site-wrapper-services">
	
    <!-- HERO -->
<section class="services-hero">
    <div class="container services-hero-grid">

        <!-- COLUMNA IZQUIERDA -->
        <div class="services-hero-text" data-aos="fade-up">
            <h1>Servicios</h1>
            <p>
                Soluciones técnicas diseñadas para escalar, mantenerse
                y evolucionar en entornos reales de negocio.
            </p>
        </div>

        <!-- COLUMNA DERECHA: MÉTRICAS -->
        <div class="services-hero-metrics" data-aos="fade-left" data-aos-delay="150">

            <div class="metric-card">
                <div class="metric-value" data-target="10">
                    <span class="number">0</span><span class="suffix">+</span>
                </div>
                <p>Años de experiencia técnica</p>
            </div>

            <div class="metric-card">
                <div class="metric-value" data-target="40">
                    <span class="number">0</span><span class="suffix">+</span>
                </div>
                <p>Sistemas en producción</p>
            </div>

            <div class="metric-card">
                <div class="metric-value" data-target="100">
                    <span class="number">0</span><span class="suffix">%</span>
                </div>
                <p>Entregables medibles</p>
            </div>

        </div>

    </div>
</section>

</div>

    <!-- BLOQUES DE SERVICIOS -->
    <section class="services-timeline">

		<!-- Servicio 01 -->
		<div class="service-block">
			
			<!-- PANEL IZQUIERDO (ANIMADO) -->
			<div class="service-content"
				 data-aos="fade-right"
				 data-aos-delay="0">
				
				<h2>Desarrollo Web</h2>
				<p>
					Construimos sitios y aplicaciones web rápidas, accesibles
					y mantenibles, pensadas para objetivos reales de negocio.
				</p>

				<ul>
					<li>Arquitectura clara y escalable</li>
					<li>Performance y accesibilidad</li>
					<li>SEO técnico desde el inicio</li>
					<li>Integración con sistemas existentes</li>
				</ul>
			</div>

			<!-- PANEL DERECHO (ESTÁTICO) -->
			<div class="service-facts">
				<span class="service-index">01</span>
			</div>
							
		</div>

		<!-- Servicio 02 -->	
		<div class="service-block reverse" >          
            <div class="service-content" data-aos="fade-left" data-aos-delay="120">
                <h2>Arquitectura Frontend</h2>
                <p>
                    Diseñamos estructuras frontend pensadas para equipos,
                    crecimiento y cambios constantes, evitando deuda técnica.
                </p>
                <ul>
                    <li>Separación de responsabilidades</li>
                    <li>Escalabilidad real</li>
                    <li>Decisiones técnicas conscientes</li>
                </ul>
            </div>			
			<!-- PANEL DERECHO (ESTÁTICO) -->
			<div class="service-facts">
				<span class="service-index">02</span>
			</div>
        </div>

        <!-- Servicio 03 -->
		<div class="service-block">			
            <div class="service-content" data-aos="fade-right" data-aos-delay="240">
                <h2>Automatización</h2>
                <p>
                    Automatizamos procesos para reducir errores,
                    ahorrar tiempo y mejorar eficiencia operativa.
                </p>
                <ul>
                    <li>Flujos internos</li>
                    <li>Reducción de tareas manuales</li>
                    <li>Optimización de procesos</li>
                </ul>
            </div>
			<!-- PANEL DERECHO (ESTÁTICO) -->
			<div class="service-facts">
				<span class="service-index">03</span>
			</div>
        </div>

        <!-- Servicio 04 -->
		<div class="service-block reverse">            			
            <div class="service-content" data-aos="fade-left" data-aos-delay="360">
                <h2>Integraciones & Optimización</h2>
                <p>
                    Conectamos sistemas y optimizamos soluciones existentes
                    para asegurar estabilidad y evolución a largo plazo.
                </p>
                <ul>
                    <li>Integración entre plataformas</li>
                    <li>Auditorías técnicas</li>
                    <li>Mejora continua</li>
                </ul>
            </div>			
			<!-- PANEL DERECHO (ESTÁTICO) -->
			<div class="service-facts">
				<span class="service-index">04</span>
			</div>
        </div>

    </section>

    <!-- CTA FINAL -->
    <section class="services-cta" data-aos="fade-up">
        <div class="container">
            <h2>¿Tenés un desafío técnico?</h2>
            <p>
                Analizamos tu caso y te proponemos una solución clara y viable.
            </p>
            <a href="/contacto" class="btn btn-primary">Hablar con un experto</a>
        </div>
    </section>
	
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

<script>
	window.addEventListener('load', () => {

		const container = document.querySelector('.services-hero-metrics');
		if (!container) return;

		const metrics = container.querySelectorAll('.metric-value');
		let animated = false;

		const startAfter = 900; // igual que duración AOS

		setTimeout(() => {

			if (animated) return;

			metrics.forEach(metric => {

				const numberEl = metric.querySelector('.number');
				if (!numberEl) return;

				const target = parseInt(metric.dataset.target, 10);
				let current = 0;
				const speed = target / 35;

				function animate() {
					current += speed;

					if (current < target) {
						numberEl.textContent = Math.ceil(current);
						requestAnimationFrame(animate);
					} else {
						numberEl.textContent = target;
					}
				}

				animate();
			});

			animated = true;

		}, startAfter);
	});
</script>

<?php get_footer(); ?>