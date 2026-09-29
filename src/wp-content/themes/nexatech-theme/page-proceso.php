<?php
if ( ! defined('ABSPATH') ) exit;
get_header();
?>

<div class="site-wrapper">
<section id="proceso" class="process-workflow">
<div class="container">
	
		<div class="process-workflow-header">

			<!-- COLUMNA IZQUIERDA -->
			<div class="process-workflow-header-text" data-aos="fade-up" data-aos-delay="0">
				<h2>Proceso de trabajo</h2>
				<p>
					Un enfoque estructurado, técnico y medible
					para construir soluciones digitales reales.
				</p>
			</div>

			<!-- DERECHA: MÉTRICAS DE PROCESO -->
			<div class="process-workflow-metrics" data-aos="fade-left" data-aos-delay="150">
				<div class="metric-card">
					<div class="metric-value" data-target="4">
						<span class="number">0</span>
					</div>
					<p>Fases del proceso</p>
				</div>
				<div class="metric-card">
					<div class="metric-value metric-range"
						 data-min="6"
						 data-max="12">
						<span class="min">0</span>–<span class="max">0</span>
					</div>
					<p>Iteraciones por proyecto</p>
				</div>
				<div class="metric-card">
					<div class="metric-value" data-target="100">
						<span class="number">0</span><span class="suffix">%</span>
					</div>
					<p>Entregables medibles</p>
				</div>
			</div>

		</div>

        <div class="process-workflow-timeline">

            <div class="process-workflow-step" data-aos="fade-right" data-aos-delay="0">
                <span class="process-workflow-index">01</span>				
				   <div class="process-workflow-card">
				   		<div class="process-workflow-content">
							<h3>Análisis</h3>
							<p>
								Entendemos el negocio, el contexto y las restricciones
								técnicas antes de definir cualquier solución.
							</p>
						</div>
				   </div>				
            </div>

            <div class="process-workflow-step" data-aos="fade-left" data-aos-delay="120">
                <span class="process-workflow-index">02</span>		
				<div class="process-workflow-card">
					<div class="process-workflow-content">
						<h3>Estrategia</h3>
						<p>
							Diseñamos una arquitectura clara priorizando impacto,
							escalabilidad y sostenibilidad técnica.
						</p>
					</div>
				</div>
            </div>

            <div class="process-workflow-step" data-aos="fade-right" data-aos-delay="240">
                <span class="process-workflow-index">03</span>
				<div class="process-workflow-card">
					<div class="process-workflow-content">
						<h3>Desarrollo</h3>
						<p>
							Construimos con foco en performance, calidad
							y buenas prácticas profesionales.
						</p>
					</div>
				</div>					
            </div>

            <div class="process-workflow-step" data-aos="fade-left" data-aos-delay="360">
                <span class="process-workflow-index">04</span>
				<div class="process-workflow-card">
					<div class="process-workflow-content">
						<h3>Optimización</h3>
						<p>
							Medimos, iteramos y mejoramos continuamente
							para asegurar resultados reales.
						</p>
					</div>
				</div>
            </div>		

        </div>

    </div>
</section>	
</div>

<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
	AOS.init({
		duration: 900,
		/*easing: 'ease-out-cubic',*/
		easing: 'cubic-bezier(0.22, 1, 0.36, 1)',
		once: true,
		offset: 200
	});
</script>

<script>
window.addEventListener('load', () => {

	const container = document.querySelector('.process-workflow-metrics');
	if (!container) return;

	const metrics = container.querySelectorAll('.metric-value');
	let animated = false;

	const aosDelay = parseInt(container.dataset.aosDelay || 0, 10);
	const aosDuration = 900; // igual que AOS.init
	const startAfter = aosDelay + aosDuration;

	setTimeout(() => {

		if (animated) return;

		metrics.forEach(metric => {

			// MÉTRICA RANGO (0–0 → 6–12)
			if (metric.classList.contains('metric-range')) {
				const minTarget = parseInt(metric.dataset.min, 10);
				const maxTarget = parseInt(metric.dataset.max, 10);

				const minEl = metric.querySelector('.min');
				const maxEl = metric.querySelector('.max');

				let minCurrent = 0;
				let maxCurrent = 0;

				const minSpeed = minTarget / 35;
				const maxSpeed = maxTarget / 35;

				function animateRange() {
					minCurrent += minSpeed;
					maxCurrent += maxSpeed;

					if (minCurrent < minTarget || maxCurrent < maxTarget) {
						minEl.textContent = Math.min(Math.ceil(minCurrent), minTarget);
						maxEl.textContent = Math.min(Math.ceil(maxCurrent), maxTarget);
						requestAnimationFrame(animateRange);
					} else {
						minEl.textContent = minTarget;
						maxEl.textContent = maxTarget;
					}
				}

				animateRange();
				return;
			}

			// MÉTRICAS SIMPLES (0 → 4, 0 → 100%)
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