<?php ?>
<!-- Preguntas Frecuentes (FAQ) MEJORADO ------------------------------------------------------------------------------------>
<section id="faq" class="py-5 position-relative overflow-hidden">
    <!-- Fondo con gradiente y patrones -->
    <div class="faq-background">
        <div class="faq-pattern"></div>
    </div>
    
    <div class="container position-relative">
        <!-- Header elegante y sofisticado -->
        <div class="text-center mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <!-- Título principal con efectos visuales -->
                    <div class="faq-title-container mb-4">
                        <div class="title-background-effect"></div>
                        <div class="title-icon-floating">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>
                        <h1 class="faq-main-title">
                            <span class="title-highlight">Preguntas</span>
                            <span class="title-elegant">Frecuentes</span>
                        </h1>
                        <div class="title-underline">
                            <div class="underline-left"></div>
                            <div class="underline-center">
                                <i class="bi bi-stars"></i>
                            </div>
                            <div class="underline-right"></div>
                        </div>
                    </div>
                    
                    <!-- Subtítulo elegante -->
                    <div class="faq-subtitle-container">
                        <p class="faq-subtitle">
                            <span class="subtitle-icon"><i class="bi bi-gear-wide-connected"></i></span>
                            Resolvemos tus dudas sobre aires acondicionados inverter
                            <span class="subtitle-icon"><i class="bi bi-gear-wide-connected"></i></span>
                        </p>
                        <p class="faq-description">
                            Experiencia profesional • Soluciones garantizadas • Atención personalizada
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>

       

        <!-- Categorías de FAQ -->
        <div class="faq-categories mb-5">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="category-buttons d-flex flex-wrap justify-content-center gap-2">
                        <button class="btn btn-outline-primary category-btn active" data-category="all">
                            <i class="bi bi-grid-3x3-gap me-1"></i> Todas
                        </button>
                        <button class="btn btn-outline-primary category-btn" data-category="technical">
                            <i class="bi bi-gear me-1"></i> Técnicas
                        </button>
                        <button class="btn btn-outline-primary category-btn" data-category="maintenance">
                            <i class="bi bi-tools me-1"></i> Mantenimiento
                        </button>
                        <button class="btn btn-outline-primary category-btn" data-category="energy">
                            <i class="bi bi-lightning me-1"></i> Ahorro Energético
                        </button>
                        <button class="btn btn-outline-primary category-btn" data-category="problems">
                            <i class="bi bi-exclamation-triangle me-1"></i> Problemas
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Accordion mejorado -->
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="faq-accordion-container">
                    <div class="accordion accordion-flush" id="faqAccordion">
                        
                        <!-- FAQ 1 - Ventajas inverter -->
                        <div class="accordion-item faq-item" data-category="energy" data-aos="fade-up" data-aos-delay="100">
                            <h2 class="accordion-header" id="faq1-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
                                    <div class="faq-question-content">
                                        <div class="faq-icon">
                                            <i class="bi bi-lightbulb-fill"></i>
                                        </div>
                                        <div class="faq-text">
                                            <h5 class="mb-1">¿Cuáles son las ventajas de un aire acondicionado inverter?</h5>
                                            <small class="text-muted">Ahorro energético • Confort • Eficiencia</small>
                                        </div>
                                    </div>
                                    <div class="faq-toggle-icon">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" aria-labelledby="faq1-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="faq-answer">
                                        <div class="row g-4">
                                            <div class="col-md-6">
                                                <h6 class="text-primary"><i class="bi bi-check2-circle me-2"></i>Principales Ventajas:</h6>
                                                <ul class="list-unstyled">
                                                    <li class="mb-2"><i class="bi bi-arrow-right text-success me-2"></i>Ahorro energético del 30-50%</li>
                                                    <li class="mb-2"><i class="bi bi-arrow-right text-success me-2"></i>Temperatura más estable</li>
                                                    <li class="mb-2"><i class="bi bi-arrow-right text-success me-2"></i>Funcionamiento silencioso</li>
                                                    <li class="mb-2"><i class="bi bi-arrow-right text-success me-2"></i>Mayor vida útil</li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="benefit-card">
                                                    <div class="benefit-stat">
                                                        <span class="stat-big">50%</span>
                                                        <span class="stat-small">menos consumo</span>
                                                    </div>
                                                    <p class="mb-0 text-muted">Comparado con equipos tradicionales</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 2 - Temperatura ideal -->
                        <div class="accordion-item faq-item" data-category="energy" data-aos="fade-up" data-aos-delay="200">
                            <h2 class="accordion-header" id="faq2-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                    <div class="faq-question-content">
                                        <div class="faq-icon">
                                            <i class="bi bi-thermometer-half"></i>
                                        </div>
                                        <div class="faq-text">
                                            <h5 class="mb-1">¿Cuál es la temperatura ideal para usar un aire acondicionado inverter?</h5>
                                            <small class="text-muted">Confort • Eficiencia • Ahorro</small>
                                        </div>
                                    </div>
                                    <div class="faq-toggle-icon">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" aria-labelledby="faq2-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="faq-answer">
                                        <div class="temperature-guide mb-4">
                                            <div class="temp-range">
                                                <div class="temp-optimal">
                                                    <span class="temp-number">22-25°C</span>
                                                    <span class="temp-label">Rango Óptimo</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row g-3">
                                            <div class="col-md-4">
                                                <div class="temp-card comfort">
                                                    <i class="bi bi-emoji-smile"></i>
                                                    <h6>Máximo Confort</h6>
                                                    <p>24°C es ideal para la mayoría de personas</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="temp-card efficiency">
                                                    <i class="bi bi-lightning"></i>
                                                    <h6>Máxima Eficiencia</h6>
                                                    <p>Cada grado menos = 6-8% más consumo</p>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="temp-card tip">
                                                    <i class="bi bi-lightbulb"></i>
                                                    <h6>Consejo Pro</h6>
                                                    <p>Usa modo AUTO para mejor control</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 3 - Apagar o dejar encendido -->
                        <div class="accordion-item faq-item" data-category="energy" data-aos="fade-up" data-aos-delay="300">
                            <h2 class="accordion-header" id="faq3-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                    <div class="faq-question-content">
                                        <div class="faq-icon">
                                            <i class="bi bi-power"></i>
                                        </div>
                                        <div class="faq-text">
                                            <h5 class="mb-1">¿Es mejor apagar o dejar encendido el aire acondicionado inverter?</h5>
                                            <small class="text-muted">Eficiencia • Consumo • Estrategia</small>
                                        </div>
                                    </div>
                                    <div class="faq-toggle-icon">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="faq3" class="accordion-collapse collapse" aria-labelledby="faq3-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="faq-answer">
                                        <div class="strategy-guide">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="strategy-card leave-on">
                                                        <div class="strategy-header">
                                                            <i class="bi bi-play-circle text-success"></i>
                                                            <h6>Dejarlo Encendido</h6>
                                                        </div>
                                                        <div class="strategy-content">
                                                            <p><strong>Cuando:</strong></p>
                                                            <ul>
                                                                <li>Ausencias cortas (1-3 horas)</li>
                                                                <li>Uso continuo durante el día</li>
                                                                <li>Clima muy caluroso</li>
                                                            </ul>
                                                            <div class="strategy-benefit">
                                                                <span class="benefit-text">Ahorro: 15-25%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="strategy-card turn-off">
                                                        <div class="strategy-header">
                                                            <i class="bi bi-stop-circle text-danger"></i>
                                                            <h6>Apagarlo</h6>
                                                        </div>
                                                        <div class="strategy-content">
                                                            <p><strong>Cuando:</strong></p>
                                                            <ul>
                                                                <li>Ausencias largas (+4 horas)</li>
                                                                <li>Durante la noche</li>
                                                                <li>Clima templado</li>
                                                            </ul>
                                                            <div class="strategy-benefit">
                                                                <span class="benefit-text">Ahorro: 40-60%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 4 - Duración -->
                        <div class="accordion-item faq-item" data-category="technical" data-aos="fade-up" data-aos-delay="400">
                            <h2 class="accordion-header" id="faq4-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                    <div class="faq-question-content">
                                        <div class="faq-icon">
                                            <i class="bi bi-clock-history"></i>
                                        </div>
                                        <div class="faq-text">
                                            <h5 class="mb-1">¿Cuánto tiempo puede durar un aire acondicionado inverter?</h5>
                                            <small class="text-muted">Vida útil • Mantenimiento • Marcas</small>
                                        </div>
                                    </div>
                                    <div class="faq-toggle-icon">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="faq4" class="accordion-collapse collapse" aria-labelledby="faq4-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="faq-answer">
                                        <div class="lifespan-info mb-4">
                                            <div class="row text-center g-3">
                                                <div class="col-4">
                                                    <div class="lifespan-stat">
                                                        <span class="lifespan-number">10-15</span>
                                                        <span class="lifespan-unit">años</span>
                                                        <p class="lifespan-label">Vida útil promedio</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="lifespan-stat">
                                                        <span class="lifespan-number">20+</span>
                                                        <span class="lifespan-unit">años</span>
                                                        <p class="lifespan-label">Con buen mantenimiento</p>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="lifespan-stat">
                                                        <span class="lifespan-number">2x</span>
                                                        <span class="lifespan-unit">más</span>
                                                        <p class="lifespan-label">Que equipos tradicionales</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="brand-recommendations">
                                            <h6 class="text-primary mb-3"><i class="bi bi-award me-2"></i>Marcas Recomendadas por RSE:</h6>
                                            <div class="row g-3">
                                                <div class="col-6 col-md-3">
                                                    <div class="brand-card">
                                                        <div class="brand-badge premium">Premium</div>
                                                        <h6>Panasonic</h6>
                                                        <div class="brand-rating">
                                                            <span class="stars">★★★★★</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="brand-card">
                                                        <div class="brand-badge premium">Premium</div>
                                                        <h6>Lennox</h6>
                                                        <div class="brand-rating">
                                                            <span class="stars">★★★★★</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="brand-card">
                                                        <div class="brand-badge good">Buena</div>
                                                        <h6>AirMax</h6>
                                                        <div class="brand-rating">
                                                            <span class="stars">★★★★☆</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3">
                                                    <div class="brand-card">
                                                        <div class="brand-badge good">Buena</div>
                                                        <h6>TGM</h6>
                                                        <div class="brand-rating">
                                                            <span class="stars">★★★★☆</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 5 - Problemas tarjetas -->
                        <div class="accordion-item faq-item" data-category="problems" data-aos="fade-up" data-aos-delay="500">
                            <h2 class="accordion-header" id="faq5-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                    <div class="faq-question-content">
                                        <div class="faq-icon">
                                            <i class="bi bi-exclamation-triangle-fill"></i>
                                        </div>
                                        <div class="faq-text">
                                            <h5 class="mb-1">¿Por qué las tarjetas de los aires inverter dan tanto problema?</h5>
                                            <small class="text-muted">Problemas técnicos • Prevención • Soluciones</small>
                                        </div>
                                    </div>
                                    <div class="faq-toggle-icon">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="faq5" class="accordion-collapse collapse" aria-labelledby="faq5-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="faq-answer">
                                        <div class="problem-explanation mb-4">
                                            <div class="alert alert-warning">
                                                <i class="bi bi-info-circle me-2"></i>
                                                <strong>Las tarjetas inverter son sensibles debido a su tecnología avanzada de control electrónico.</strong>
                                            </div>
                                        </div>

                                        <div class="problems-grid">
                                            <h6 class="text-danger mb-4"><i class="bi bi-exclamation-triangle me-2"></i>Principales Causas de Fallas:</h6>
                                            
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="problem-card voltage">
                                                        <div class="problem-icon">
                                                            <i class="bi bi-lightning-fill"></i>
                                                        </div>
                                                        <div class="problem-content">
                                                            <h6>Fluctuaciones de Voltaje</h6>
                                                            <p>Subidas y bajadas de voltaje dañan los componentes electrónicos sensibles.</p>
                                                            <div class="problem-impact">Impacto: <span class="impact-high">Alto</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="problem-card humidity">
                                                        <div class="problem-icon">
                                                            <i class="bi bi-droplet-fill"></i>
                                                        </div>
                                                        <div class="problem-content">
                                                            <h6>Humedad Excesiva</h6>
                                                            <p>Causa corrosión y cortocircuitos en los componentes de la tarjeta.</p>
                                                            <div class="problem-impact">Impacto: <span class="impact-medium">Medio</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="problem-card installation">
                                                        <div class="problem-icon">
                                                            <i class="bi bi-tools"></i>
                                                        </div>
                                                        <div class="problem-content">
                                                            <h6>Mala Instalación</h6>
                                                            <p>Conexiones defectuosas y exposición a condiciones adversas.</p>
                                                            <div class="problem-impact">Impacto: <span class="impact-high">Alto</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="problem-card components">
                                                        <div class="problem-icon">
                                                            <i class="bi bi-cpu-fill"></i>
                                                        </div>
                                                        <div class="problem-content">
                                                            <h6>Desgaste Natural</h6>
                                                            <p>Los componentes se deterioran con el tiempo y uso intensivo.</p>
                                                            <div class="problem-impact">Impacto: <span class="impact-low">Bajo</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="prevention-tips mt-4">
                                            <h6 class="text-success"><i class="bi bi-shield-check me-2"></i>Cómo Prevenir Estos Problemas:</h6>
                                            <div class="row g-3 mt-2">
                                                <div class="col-md-6">
                                                    <div class="tip-card">
                                                        <i class="bi bi-plug text-primary me-2"></i>
                                                        <strong>Usa un regulador de voltaje</strong>
                                                        <p class="mb-0">Protege contra fluctuaciones eléctricas</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="tip-card">
                                                        <i class="bi bi-person-check text-primary me-2"></i>
                                                        <strong>Instalación profesional</strong>
                                                        <p class="mb-0">Técnicos certificados garantizan instalación correcta</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FAQ 6 - Nueva: Mantenimiento -->
                        <div class="accordion-item faq-item" data-category="maintenance" data-aos="fade-up" data-aos-delay="600">
                            <h2 class="accordion-header" id="faq6-heading">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                    <div class="faq-question-content">
                                        <div class="faq-icon">
                                            <i class="bi bi-tools"></i>
                                        </div>
                                        <div class="faq-text">
                                            <h5 class="mb-1">¿Con qué frecuencia debo hacer mantenimiento a mi aire inverter?</h5>
                                            <small class="text-muted">Mantenimiento • Frecuencia • Cuidados</small>
                                        </div>
                                    </div>
                                    <div class="faq-toggle-icon">
                                        <i class="bi bi-plus-lg"></i>
                                    </div>
                                </button>
                            </h2>
                            <div id="faq6" class="accordion-collapse collapse" aria-labelledby="faq6-heading" data-bs-parent="#faqAccordion">
                                <div class="accordion-body">
                                    <div class="faq-answer">
                                        <div class="maintenance-schedule">
                                            <div class="row g-4">
                                                <div class="col-md-4">
                                                    <div class="maintenance-card monthly">
                                                        <div class="maintenance-frequency">Mensual</div>
                                                        <div class="maintenance-icon">
                                                            <i class="bi bi-calendar-month"></i>
                                                        </div>
                                                        <ul>
                                                            <li>Limpiar filtros</li>
                                                            <li>Revisar funcionamiento</li>
                                                            <li>Limpiar unidad externa</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="maintenance-card quarterly">
                                                        <div class="maintenance-frequency">Trimestral</div>
                                                        <div class="maintenance-icon">
                                                            <i class="bi bi-calendar3"></i>
                                                        </div>
                                                        <ul>
                                                            <li>Limpieza profunda</li>
                                                            <li>Revisión de conexiones</li>
                                                            <li>Verificar refrigerante</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="maintenance-card annual">
                                                        <div class="maintenance-frequency">Anual</div>
                                                        <div class="maintenance-icon">
                                                            <i class="bi bi-calendar-year"></i>
                                                        </div>
                                                        <ul>
                                                            <li>Mantenimiento completo</li>
                                                            <li>Revisión de tarjetas</li>
                                                            <li>Calibración del sistema</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CSS para el FAQ mejorado -->
<style>
/* Fondo y patrones */
.faq-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    opacity: 0.1;
}

.faq-pattern {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        radial-gradient(circle at 2px 2px, rgba(255,255,255,0.15) 1px, transparent 0);
    background-size: 40px 40px;
}

/* ===================================================================================== */
/* TÍTULO ELEGANTE Y SOFISTICADO */
/* ===================================================================================== */

.faq-title-container {
    position: relative;
    padding: 2rem 0;
}

.title-background-effect {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(0,123,255,0.05) 0%, rgba(0,123,255,0.02) 50%, transparent 100%);
    border-radius: 50%;
    animation: titleGlow 3s ease-in-out infinite alternate;
}

.title-icon-floating {
    position: absolute;
    top: -20px;
    right: 20%;
    font-size: 2rem;
    color: #007bff;
    opacity: 0.3;
    animation: iconFloat 4s ease-in-out infinite;
}

.faq-main-title {
    font-size: clamp(2.5rem, 6vw, 4rem);
    font-weight: 800;
    margin: 0;
    position: relative;
    z-index: 2;
    line-height: 1.1;
    letter-spacing: -1px;
}

.title-highlight {
    background: linear-gradient(135deg, #007bff 0%, #0056b3 50%, #17a2b8 100%);
    background-size: 200% 200%;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: gradientShift 3s ease-in-out infinite;
    display: inline-block;
    position: relative;
}

.title-highlight::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(90deg, #007bff, #17a2b8);
    border-radius: 2px;
    opacity: 0.8;
}

.title-elegant {
    color: #2c3e50;
    font-weight: 300;
    font-style: italic;
    margin-left: 0.5rem;
    position: relative;
}

.title-elegant::before {
    content: '';
    position: absolute;
    top: 50%;
    left: -20px;
    width: 15px;
    height: 2px;
    background: linear-gradient(90deg, transparent, #007bff);
    transform: translateY(-50%);
}

.title-underline {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 1.5rem;
    gap: 1rem;
}

.underline-left,
.underline-right {
    height: 2px;
    width: 80px;
    background: linear-gradient(90deg, transparent, #007bff, transparent);
    animation: underlineExpand 2s ease-out;
}

.underline-center {
    font-size: 1.5rem;
    color: #007bff;
    animation: starSpin 4s linear infinite;
}

/* Subtítulo elegante */
.faq-subtitle-container {
    margin-top: 2rem;
    position: relative;
}

.faq-subtitle {
    font-size: 1.3rem;
    font-weight: 600;
    color: #495057;
    margin-bottom: 0.8rem;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 1rem;
    flex-wrap: wrap;
}

.subtitle-icon {
    color: #007bff;
    font-size: 1.1rem;
    opacity: 0.7;
    animation: iconPulse 2s ease-in-out infinite;
}

.faq-description {
    font-size: 1rem;
    color: #6c757d;
    font-style: italic;
    margin: 0;
    padding: 0.5rem 2rem;
    border-left: 3px solid rgba(0,123,255,0.3);
    border-right: 3px solid rgba(0,123,255,0.3);
    background: rgba(0,123,255,0.02);
    border-radius: 25px;
    display: inline-block;
}

/* Animaciones elegantes */
@keyframes titleGlow {
    0% {
        transform: translate(-50%, -50%) scale(0.9);
        opacity: 0.3;
    }
    100% {
        transform: translate(-50%, -50%) scale(1.1);
        opacity: 0.1;
    }
}

@keyframes iconFloat {
    0%, 100% {
        transform: translateY(0) rotate(0deg);
    }
    25% {
        transform: translateY(-10px) rotate(5deg);
    }
    50% {
        transform: translateY(0) rotate(0deg);
    }
    75% {
        transform: translateY(-5px) rotate(-3deg);
    }
}

@keyframes gradientShift {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

@keyframes underlineExpand {
    0% {
        width: 0;
        opacity: 0;
    }
    50% {
        opacity: 1;
    }
    100% {
        width: 80px;
        opacity: 0.8;
    }
}

@keyframes starSpin {
    0% {
        transform: rotate(0deg);
        color: #007bff;
    }
    25% {
        color: #17a2b8;
    }
    50% {
        transform: rotate(180deg);
        color: #007bff;
    }
    75% {
        color: #0056b3;
    }
    100% {
        transform: rotate(360deg);
        color: #007bff;
    }
}

@keyframes iconPulse {
    0%, 100% {
        opacity: 0.7;
        transform: scale(1);
    }
    50% {
        opacity: 1;
        transform: scale(1.1);
    }
}

/* Responsive para título */
@media (max-width: 768px) {
    .faq-title-container {
        padding: 1.5rem 0;
    }
    
    .title-icon-floating {
        display: none;
    }
    
    .faq-subtitle {
        font-size: 1.1rem;
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .subtitle-icon {
        display: none;
    }
    
    .faq-description {
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
    }
    
    .underline-left,
    .underline-right {
        width: 50px;
    }
}

/* Estadísticas */
.stat-card {
    padding: 1rem;
    background: rgba(255,255,255,0.9);
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    text-align: center;
}

.stat-number {
    font-size: 1.8rem;
    font-weight: 700;
    color: #007bff;
    display: block;
}

.stat-label {
    font-size: 0.9rem;
    color: #6c757d;
}

/* Buscador */
.faq-search-container {
    position: relative;
}

.faq-search-suggestions {
    position: absolute;
    top: 100%;
    left: 0;
    right: 0;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    z-index: 1000;
    display: none;
}

/* Categorías */
.category-btn {
    border-radius: 25px;
    padding: 8px 20px;
    transition: all 0.3s ease;
}

.category-btn.active {
    background: #007bff;
    color: white;
    border-color: #007bff;
}

/* Accordion mejorado */
.faq-accordion-container {
    background: rgba(255,255,255,0.95);
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.faq-item {
    border: none !important;
    margin-bottom: 1rem;
    border-radius: 12px !important;
    overflow: hidden;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
}

.faq-item .accordion-button {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border: none;
    padding: 1.5rem 2rem;
    border-radius: 12px !important;
}

.faq-item .accordion-button:not(.collapsed) {
    background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
    color: white;
}

.faq-question-content {
    display: flex;
    align-items: center;
    flex: 1;
}

.faq-icon {
    width: 50px;
    height: 50px;
    border-radius: 12px;
    background: rgba(0,123,255,0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    margin-right: 1rem;
    font-size: 1.5rem;
    color: #007bff;
}

.faq-item .accordion-button:not(.collapsed) .faq-icon {
    background: rgba(255,255,255,0.2);
    color: white;
}

.faq-toggle-icon {
    font-size: 1.2rem;
    transition: transform 0.3s ease;
}

.faq-item .accordion-button:not(.collapsed) .faq-toggle-icon i:before {
    content: "\F62C"; /* bi-dash-lg */
}

/* Contenido de respuestas */
.faq-answer {
    padding: 1rem 0;
}

.benefit-card {
    background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
    padding: 1.5rem;
    border-radius: 12px;
    text-align: center;
}

.benefit-stat .stat-big {
    font-size: 3rem;
    font-weight: 700;
    color: #1976d2;
    display: block;
}

.benefit-stat .stat-small {
    font-size: 1rem;
    color: #1976d2;
}

/* Guía de temperatura */
.temp-range {
    background: linear-gradient(90deg, #ff6b6b 0%, #feca57 30%, #48ca47 70%, #ff6b6b 100%);
    height: 60px;
    border-radius: 30px;
    position: relative;
    margin: 2rem 0;
}

.temp-optimal {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: white;
    padding: 0.5rem 1.5rem;
    border-radius: 20px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.2);
    text-align: center;
}

.temp-number {
    font-size: 1.5rem;
    font-weight: 700;
    color: #28a745;
    display: block;
}

.temp-label {
    font-size: 0.9rem;
    color: #6c757d;
}

.temp-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    border-left: 4px solid #007bff;
}

/* Estrategias */
.strategy-card {
    background: white;
    border-radius: 12px;
    padding: 1.5rem;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    height: 100%;
}

.leave-on {
    border-left: 4px solid #28a745;
}

.turn-off {
    border-left: 4px solid #dc3545;
}

.strategy-header {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}

.strategy-header i {
    font-size: 1.5rem;
    margin-right: 0.5rem;
}

.strategy-benefit {
    background: linear-gradient(135deg, #e8f5e8 0%, #c8e6c9 100%);
    padding: 0.5rem 1rem;
    border-radius: 8px;
    text-align: center;
    margin-top: 1rem;
}

.benefit-text {
    font-weight: 600;
    color: #2e7d32;
}

/* Estadísticas de vida útil */
.lifespan-stat {
    text-align: center;
    padding: 1rem;
}

.lifespan-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: #007bff;
    display: block;
}

.lifespan-unit {
    font-size: 1.2rem;
    color: #007bff;
    display: block;
}

.lifespan-label {
    font-size: 0.9rem;
    color: #6c757d;
    margin-top: 0.5rem;
}

/* Tarjetas de marca */
.brand-card {
    background: white;
    padding: 1rem;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    position: relative;
}

.brand-badge {
    position: absolute;
    top: -8px;
    right: -8px;
    padding: 4px 8px;
    border-radius: 12px;
    font-size: 0.7rem;
    font-weight: 600;
}

.brand-badge.premium {
    background: #ffd700;
    color: #333;
}

.brand-badge.good {
    background: #28a745;
    color: white;
}

.stars {
    color: #ffc107;
    font-size: 0.9rem;
}

/* Problemas */
.problem-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    height: 100%;
    border-left: 4px solid #dc3545;
}

.problem-icon {
    width: 50px;
    height: 50px;
    background: rgba(220,53,69,0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1rem;
    font-size: 1.5rem;
    color: #dc3545;
}

.problem-impact {
    margin-top: 1rem;
    font-weight: 600;
}

.impact-high { color: #dc3545; }
.impact-medium { color: #ffc107; }
.impact-low { color: #28a745; }

/* Tips de prevención */
.tip-card {
    background: #f8f9fa;
    padding: 1rem;
    border-radius: 8px;
    border-left: 4px solid #28a745;
}

/* Mantenimiento */
.maintenance-card {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    height: 100%;
}

.maintenance-frequency {
    background: #007bff;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-weight: 600;
    margin-bottom: 1rem;
    display: inline-block;
}

.maintenance-icon {
    font-size: 2rem;
    color: #007bff;
    margin-bottom: 1rem;
}

.maintenance-card ul {
    text-align: left;
    padding-left: 1rem;
}

/* CTA final */
.contact-cta {
    background: rgba(255,255,255,0.9);
    padding: 2rem;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

/* Responsive */
@media (max-width: 768px) {
    .faq-accordion-container {
        padding: 1rem;
    }
    
    .faq-question-content {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .faq-icon {
        margin-right: 0;
        margin-bottom: 0.5rem;
    }
    
    .stat-card {
        margin-bottom: 1rem;
    }
}
</style>

<!-- JavaScript para funcionalidad -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Funcionalidad de búsqueda de FAQ
    const searchInput = document.getElementById('faqSearchInput');
    const searchBtn = document.getElementById('faqSearchBtn');
    const faqItems = document.querySelectorAll('.faq-item');
    
    function searchFAQ(query) {
        query = query.toLowerCase();
        
        faqItems.forEach(item => {
            const questionText = item.querySelector('.faq-text h5').textContent.toLowerCase();
            const answerText = item.querySelector('.accordion-body').textContent.toLowerCase();
            
            if (questionText.includes(query) || answerText.includes(query)) {
                item.style.display = 'block';
            } else {
                item.style.display = query ? 'none' : 'block';
            }
        });
    }
    
    if (searchInput) {
        searchInput.addEventListener('input', (e) => searchFAQ(e.target.value));
    }
    
    if (searchBtn) {
        searchBtn.addEventListener('click', () => searchFAQ(searchInput.value));
    }
    
    // Filtros por categoría
    const categoryButtons = document.querySelectorAll('.category-btn');
    
    categoryButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            // Remover clase activa
            categoryButtons.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            
            const category = this.dataset.category;
            
            faqItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
    
    // Animación de iconos de toggle
    const accordionButtons = document.querySelectorAll('.accordion-button');
    accordionButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const icon = this.querySelector('.faq-toggle-icon i');
            setTimeout(() => {
                if (this.classList.contains('collapsed')) {
                    icon.style.transform = 'rotate(0deg)';
                } else {
                    icon.style.transform = 'rotate(180deg)';
                }
            }, 100);
        });
    });
});
</script>
