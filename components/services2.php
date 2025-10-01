<?php ?>
<!-- Servicios Section Ultra Mejorada - VERSIÓN COMPLETA CORREGIDA -->
<section id="servicios" class="py-5 position-relative overflow-hidden" style="
    background: linear-gradient(135deg, rgba(20, 20, 30, 0.95) 0%, rgba(45, 45, 60, 0.95) 100%), 
    url('img/servicio2.jpeg') center center/cover fixed no-repeat;
    background-blend-mode: overlay;
">
    <!-- Elementos decorativos de fondo -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="pointer-events: none;">
        <div class="floating-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
        <div class="dots-pattern"></div>
    </div>

    <div class="container position-relative">
        <!-- Encabezado de sección ultra mejorado -->
        <div class="text-center mb-5">
            <div class="service-header-badge mb-3 d-none" data-aos="fade-down" data-aos-duration="800">
                <span class="badge-glow">
                    <i class="bi bi-tools me-2"></i>
                    Servicios Profesionales
                </span>
            </div>
            <h2 class="text-light fw-bold display-4 mb-3 text-gradient-services" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="200">
                Soluciones <span class="text-warning">Especializadas</span>
            </h2>
            <div class="d-flex justify-content-center mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="divider-animated"></div>
            </div>
            <p class="text-light fs-5 mb-4 lead-enhanced" data-aos="fade-up" data-aos-delay="600" style="max-width: 800px; margin: 0 auto;">
                Tecnología avanzada, experiencia comprobada y garantía total para tus equipos de climatización y refrigeración
            </p>
            
            <!-- Stats rápidas -->
            <div class="row justify-content-center mb-4" data-aos="fade-up" data-aos-delay="800">
                <div class="col-auto">
                    <div class="stat-item">
                        <div class="stat-number">3500+</div>
                        <div class="stat-label">Equipos Reparados</div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="stat-item">
                        <div class="stat-number">95%</div>
                        <div class="stat-label">Éxito en Reparaciones</div>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="stat-item">
                        <div class="stat-number">24/7</div>
                        <div class="stat-label">Soporte Disponible</div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navegación de servicios ultra mejorada -->
        <div class="service-navigation mb-5" data-aos="fade-up" data-aos-delay="400">
            <div class="nav-container">
                <button id="btn-left-services" class="nav-btn nav-btn-left">
                    <i class="bi bi-chevron-left"></i>
                    <div class="btn-ripple"></div>
                </button>
                
                <div class="filter-pills-container">
                    <div class="filter-pills">
                        <button class="filter-pill active" data-filter="all">
                            <i class="bi bi-grid-3x3-gap me-2"></i>Todos
                            <div class="pill-glow"></div>
                        </button>
                        <button class="filter-pill" data-filter="reparacion">
                            <i class="bi bi-tools me-2"></i>Reparación
                            <div class="pill-glow"></div>
                        </button>
                        <button class="filter-pill" data-filter="instalacion">
                            <i class="bi bi-gear me-2"></i>Instalación
                            <div class="pill-glow"></div>
                        </button>
                        <button class="filter-pill" data-filter="asesoria">
                            <i class="bi bi-chat-dots me-2"></i>Asesoría
                            <div class="pill-glow"></div>
                        </button>
                    </div>
                </div>

                <button id="btn-right-services" class="nav-btn nav-btn-right">
                    <i class="bi bi-chevron-right"></i>
                    <div class="btn-ripple"></div>
                </button>
            </div>
        </div>

        <!-- Contenedor del carrusel CORREGIDO -->
        <div class="services-carousel-wrapper">
            <div class="services-carousel-container" id="services-carousel-container">
                <div id="servicios-carousel-track" class="services-track">
                    <!-- Servicio 1 - Reparación de Tarjetas -->
                    <div class="service-card-compact reparacion" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-glass-compact">
                            <div class="card-header-compact">
                                <div class="service-icon-compact reparacion-icon">
                                    <i class="bi bi-tools"></i>
                                </div>
                                <div class="service-badge-compact reparacion-badge">Reparación</div>
                            </div>
                            
                            <div class="card-image-container-compact">
                                <img src="img/reparacion.JPG" class="card-image-compact" alt="Reparación de Tarjetas">
                                <div class="image-overlay-compact">
                                    <div class="overlay-content-compact">
                                        <button class="btn-detail-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio1" onclick="event.stopPropagation();">
                                            <i class="bi bi-eye me-2"></i>Ver Detalles
                                        </button>
                                    </div>
                                </div>
                                <div class="price-tag-compact">Desde $2,500</div>
                            </div>
                            
                            <div class="card-content-compact">
                                <h6 class="service-title-compact">Reparación de Tarjetas</h6>
                                <p class="service-description-compact">
                                    Soluciones precisas y confiables en diagnóstico y reparación de tarjetas electrónicas para equipos inverter.
                                </p>
                                
                                <div class="service-features-compact">
                                    <div class="feature-item-compact">
                                        <i class="bi bi-check-circle text-success"></i>
                                        <span>Diagnóstico gratuito</span>
                                    </div>
                                    <div class="feature-item-compact">
                                        <i class="bi bi-shield-check text-info"></i>
                                        <span>Hasta 3 meses garantía</span>
                                    </div>
                                </div>
                                
                                <div class="rating-stars-compact mb-2">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="rating-text-compact">(4.9/5)</span>
                                </div>
                                
                                <button class="btn-action-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio1" onclick="event.stopPropagation();">
                                    <span>Ver detalles</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Servicio 2 - Mantenimiento Preventivo -->
                    <div class="service-card-compact instalacion" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-glass-compact">
                            <div class="card-header-compact">
                                <div class="service-icon-compact instalacion-icon">
                                    <i class="bi bi-gear"></i>
                                </div>
                                <div class="service-badge-compact instalacion-badge">Instalación</div>
                            </div>
                            
                            <div class="card-image-container-compact">
                                <img src="img/mantenimiento.jpg" class="card-image-compact" alt="Mantenimiento Preventivo">
                                <div class="image-overlay-compact">
                                    <div class="overlay-content-compact">
                                        <button class="btn-detail-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio2" onclick="event.stopPropagation();">
                                            <i class="bi bi-eye me-2"></i>Ver Detalles
                                        </button>
                                    </div>
                                </div>
                                <div class="price-tag-compact">Desde $2000</div>
                            </div>
                            
                            <div class="card-content-compact">
                                <h6 class="service-title-compact">Mantenimiento Preventivo</h6>
                                <p class="service-description-compact">
                                    Cuida tu inversión con mantenimiento profesional que previene fallas y prolonga la vida útil de tus equipos.
                                </p>
                                
                                <div class="service-features-compact">
                                    <div class="feature-item-compact">
                                        <i class="bi bi-check-circle text-success"></i>
                                        <span>Inspección completa</span>
                                    </div>
                                    <div class="feature-item-compact">
                                        <i class="bi bi-shield-check text-info"></i>
                                        <span>Garantía extendida</span>
                                    </div>
                                </div>
                                
                                <div class="rating-stars-compact mb-2">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="rating-text-compact">(4.8/5)</span>
                                </div>
                                
                                <button class="btn-action-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio2" onclick="event.stopPropagation();">
                                    <span>Ver detalles</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Servicio 3 - Componentes -->
                    <div class="service-card-compact asesoria" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-glass-compact">
                            <div class="card-header-compact">
                                <div class="service-icon-compact asesoria-icon">
                                    <i class="bi bi-box"></i>
                                </div>
                                <div class="service-badge-compact asesoria-badge">Asesoría</div>
                            </div>
                            
                            <div class="card-image-container-compact">
                                <img src="img/componentes electrónicos.jpg" class="card-image-compact" alt="Venta de Componentes">
                                <div class="image-overlay-compact">
                                    <div class="overlay-content-compact">
                                        <button class="btn-detail-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio3" onclick="event.stopPropagation();">
                                            <i class="bi bi-eye me-2"></i>Ver Detalles
                                        </button>
                                    </div>
                                </div>
                                <div class="price-tag-compact">Consulta</div>
                            </div>
                            
                            <div class="card-content-compact">
                                <h6 class="service-title-compact">Componentes</h6>
                                <p class="service-description-compact">
                                    Ofrecemos componentes originales y certificados para garantizar el óptimo rendimiento de tus sistemas electrónicos.
                                </p>
                                
                                <div class="service-features-compact">
                                    <div class="feature-item-compact">
                                        <i class="bi bi-check-circle text-success"></i>
                                        <span>Piezas originales</span>
                                    </div>
                                    <div class="feature-item-compact">
                                        <i class="bi bi-truck text-warning"></i>
                                        <span>Entrega rápida</span>
                                    </div>
                                </div>
                                
                                <div class="rating-stars-compact mb-2">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-half text-warning"></i>
                                    <span class="rating-text-compact">(4.7/5)</span>
                                </div>
                                
                                <button class="btn-action-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio3" onclick="event.stopPropagation();">
                                    <span>Ver detalles</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 4 - Tarjetas de Neveras Inverter -->
                    <div class="service-card-compact reparacion" data-aos="fade-up" data-aos-delay="500">
                        <div class="card-glass-compact">
                            <div class="card-header-compact">
                                <div class="service-icon-compact reparacion-icon">
                                    <i class="bi bi-motherboard"></i>
                                </div>
                                <div class="service-badge-compact reparacion-badge">Reparación</div>
                            </div>
                            
                            <div class="card-image-container-compact">
                                <img src="img/Inverter_Samsung.JPG" class="card-image-compact" alt="Tarjetas de Neveras Inverter">
                                <div class="image-overlay-compact">
                                    <div class="overlay-content-compact">
                                        <button class="btn-detail-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio4" onclick="event.stopPropagation();">
                                            <i class="bi bi-eye me-2"></i>Ver Detalles
                                        </button>
                                    </div>
                                </div>
                                <div class="price-tag-compact">Desde $1500</div>
                            </div>
                            
                            <div class="card-content-compact">
                                <h6 class="service-title-compact">Tarjetas de Neveras Inverter</h6>
                                <p class="service-description-compact">
                                    Expertos en reparación y modificación de tarjetas electrónicas para neveras inverter, asegurando eficiencia y durabilidad.
                                </p>
                                
                                <div class="service-features-compact">
                                    <div class="feature-item-compact">
                                        <i class="bi bi-check-circle text-success"></i>
                                        <span>Diagnóstico completo</span>
                                    </div>
                                    <div class="feature-item-compact">
                                        <i class="bi bi-tools text-info"></i>
                                        <span>Reparación especializada</span>
                                    </div>
                                </div>
                                
                                <div class="rating-stars-compact mb-2">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="rating-text-compact">(4.9/5)</span>
                                </div>
                                
                                <button class="btn-action-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio4" onclick="event.stopPropagation();">
                                    <span>Ver detalles</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 5 - Venta e Instalación de Protectores de Voltaje -->
                    <div class="service-card-compact instalacion" data-aos="fade-up" data-aos-delay="600">
                        <div class="card-glass-compact">
                            <div class="card-header-compact">
                                <div class="service-icon-compact instalacion-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <div class="service-badge-compact instalacion-badge">Instalación</div>
                            </div>
                            
                            <div class="card-image-container-compact">
                                <img src="img/protector-voltaje.jpeg" class="card-image-compact" alt="Venta e Instalación de Protectores de Voltaje">
                                <div class="image-overlay-compact">
                                    <div class="overlay-content-compact">
                                        <button class="btn-detail-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio5" onclick="event.stopPropagation();">
                                            <i class="bi bi-eye me-2"></i>Ver Detalles
                                        </button>
                                    </div>
                                </div>
                                <div class="price-tag-compact">Consultar precio</div>
                            </div>
                            
                            <div class="card-content-compact">
                                <h6 class="service-title-compact">Venta e Instalación de Protectores de Voltaje</h6>
                                <p class="service-description-compact">
                                    Protege tus equipos inverter contra picos y fluctuaciones eléctricas con dispositivos certificados y una instalación profesional.
                                </p>
                                
                                <div class="service-features-compact">
                                    <div class="feature-item-compact">
                                        <i class="bi bi-shield-check text-success"></i>
                                        <span>Protección completa</span>
                                    </div>
                                    <div class="feature-item-compact">
                                        <i class="bi bi-tools text-info"></i>
                                        <span>Instalación profesional</span>
                                    </div>
                                </div>
                                
                                <div class="rating-stars-compact mb-2">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="rating-text-compact">(4.8/5)</span>
                                </div>
                                
                                <button class="btn-action-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio5" onclick="event.stopPropagation();">
                                    <span>Ver detalles</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 6 - Instalación de Sistemas de Monitoreo Inteligente -->
                    <div class="service-card-compact instalacion" data-aos="fade-up" data-aos-delay="700">
                        <div class="card-glass-compact">
                            <div class="card-header-compact">
                                <div class="service-icon-compact instalacion-icon">
                                    <i class="bi bi-graph-up-arrow"></i>
                                </div>
                                <div class="service-badge-compact instalacion-badge">Instalación</div>
                            </div>
                            
                            <div class="card-image-container-compact">
                                <img src="img/monitoreo-inteligente.jpeg" class="card-image-compact" alt="Instalación de Sistemas de Monitoreo Inteligente">
                                <div class="image-overlay-compact">
                                    <div class="overlay-content-compact">
                                        <button class="btn-detail-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio6" onclick="event.stopPropagation();">
                                            <i class="bi bi-eye me-2"></i>Ver Detalles
                                        </button>
                                    </div>
                                </div>
                                <div class="price-tag-compact">Consultar precio</div>
                            </div>
                            
                            <div class="card-content-compact">
                                <h6 class="service-title-compact">Instalación de Sistemas de Monitoreo Inteligente</h6>
                                <p class="service-description-compact">
                                    Implementa sensores IoT y control remoto para climatización y energía, optimizando el rendimiento y la seguridad de tus equipos.
                                </p>
                                
                                <div class="service-features-compact">
                                    <div class="feature-item-compact">
                                        <i class="bi bi-wifi text-success"></i>
                                        <span>Control remoto</span>
                                    </div>
                                    <div class="feature-item-compact">
                                        <i class="bi bi-graph-up text-info"></i>
                                        <span>Análisis en tiempo real</span>
                                    </div>
                                </div>
                                
                                <div class="rating-stars-compact mb-2">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="rating-text-compact">(4.8/5)</span>
                                </div>
                                
                                <button class="btn-action-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio6" onclick="event.stopPropagation();">
                                    <span>Ver detalles</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 7 - Servicio de Urgencias y Atención Rápida -->
                    <div class="service-card-compact reparacion" data-aos="fade-up" data-aos-delay="800">
                        <div class="card-glass-compact">
                            <div class="card-header-compact">
                                <div class="service-icon-compact urgencia-icon">
                                    <i class="bi bi-lightning-charge"></i>
                                </div>
                                <div class="service-badge-compact reparacion-badge">Reparación</div>
                            </div>
                            
                            <div class="card-image-container-compact">
                                <img src="img/urgencia-electronica.png" class="card-image-compact" alt="Servicio de Urgencias y Atención Rápida">
                                <div class="image-overlay-compact">
                                    <div class="overlay-content-compact">
                                        <button class="btn-detail-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio7" onclick="event.stopPropagation();">
                                            <i class="bi bi-eye me-2"></i>Ver Detalles
                                        </button>
                                    </div>
                                </div>
                                <div class="price-tag-compact urgente">Desde $3,500</div>
                            </div>
                            
                            <div class="card-content-compact">
                                <h6 class="service-title-compact">Servicio de Urgencias y Atención Rápida</h6>
                                <p class="service-description-compact">
                                    Reparaciones express y soporte fuera de horario para que tus equipos nunca se detengan cuando más los necesitas.
                                </p>
                                
                                <div class="service-features-compact">
                                    <div class="feature-item-compact">
                                        <i class="bi bi-clock text-danger"></i>
                                        <span>Respuesta rápida</span>
                                    </div>
                                    <div class="feature-item-compact">
                                        <i class="bi bi-telephone-fill text-warning"></i>
                                        <span>Disponible hasta las 09:00 p.m.</span>
                                    </div>
                                </div>
                                
                                <div class="rating-stars-compact mb-2">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="rating-text-compact">(4.9/5)</span>
                                </div>
                                
                                <button class="btn-action-compact urgente" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio7" onclick="event.stopPropagation();">
                                    <span>Ver detalles</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Servicio 8 - Asesoría Técnica y Capacitación -->
                    <div class="service-card-compact asesoria" data-aos="fade-up" data-aos-delay="900">
                        <div class="card-glass-compact">
                            <div class="card-header-compact">
                                <div class="service-icon-compact asesoria-icon">
                                    <i class="bi bi-person-video3"></i>
                                </div>
                                <div class="service-badge-compact asesoria-badge">Asesoría</div>
                            </div>
                            
                            <div class="card-image-container-compact">
                                <img src="img/capacitacion-electronica.jpeg" class="card-image-compact" alt="Asesoría Técnica y Capacitación">
                                <div class="image-overlay-compact">
                                    <div class="overlay-content-compact">
                                        <button class="btn-detail-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio8" onclick="event.stopPropagation();">
                                            <i class="bi bi-eye me-2"></i>Ver Detalles
                                        </button>
                                    </div>
                                </div>
                                <div class="price-tag-compact">Consultar precio</div>
                            </div>
                            
                            <div class="card-content-compact">
                                <h6 class="service-title-compact">Asesoría Técnica y Capacitación</h6>
                                <p class="service-description-compact">
                                    Cursos, talleres y asesoría personalizada para técnicos y empresas que buscan mejorar sus conocimientos y resultados.
                                </p>
                                
                                <div class="service-features-compact">
                                    <div class="feature-item-compact">
                                        <i class="bi bi-book text-success"></i>
                                        <span>Material incluido</span>
                                    </div>
                                    <div class="feature-item-compact">
                                        <i class="bi bi-award text-info"></i>
                                        <span>Certificación</span>
                                    </div>
                                </div>
                                
                                <div class="rating-stars-compact mb-2">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span class="rating-text-compact">(5.0/5)</span>
                                </div>
                                
                                <button class="btn-action-compact" type="button" data-bs-toggle="modal" data-bs-target="#modalServicio8" onclick="event.stopPropagation();">
                                    <span>Ver detalles</span>
                                    <i class="bi bi-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Indicador de página mejorado -->
        <div class="pagination-container" data-aos="fade-up" data-aos-delay="600">
            <div class="service-pagination" id="services-pagination">
                <!-- Los indicadores se generan dinámicamente -->
            </div>
            <div class="pagination-progress">
                <div class="progress-bar" id="services-progress"></div>
            </div>
        </div>
        
        <!-- Call to Action final -->
        <div class="text-center mt-5 d-none" data-aos="fade-up" data-aos-delay="800">
            <div class="cta-container">
                <h4 class="text-white mb-3">¿Necesitas ayuda especializada?</h4>
                <p class="text-light mb-4">Contacta con nuestros expertos para una consulta personalizada</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/18297470675" class="btn-cta-modern whatsapp" target="_blank">
                        <i class="bi bi-whatsapp me-2"></i>
                        <span>WhatsApp</span>
                    </a>
                    <a href="tel:8295965912" class="btn-cta-modern phone">
                        <i class="bi bi-telephone me-2"></i>
                        <span>Llamar</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Estilos CSS COMPLETOS Y CORREGIDOS */

/* Elementos decorativos de fondo */
.floating-shapes {
    position: absolute;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.shape {
    position: absolute;
    background: linear-gradient(45deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0.05));
    border-radius: 50%;
    animation: float 20s infinite ease-in-out;
}

.shape-1 { width: 80px; height: 80px; top: 10%; left: 10%; animation-delay: 0s; }
.shape-2 { width: 60px; height: 60px; top: 70%; right: 15%; animation-delay: 5s; }
.shape-3 { width: 100px; height: 100px; top: 30%; right: 10%; animation-delay: 10s; }
.shape-4 { width: 40px; height: 40px; bottom: 20%; left: 20%; animation-delay: 15s; }

.dots-pattern {
    background-image: radial-gradient(circle, rgba(255, 255, 255, 0.1) 1px, transparent 1px);
    background-size: 30px 30px;
    width: 100%;
    height: 100%;
    opacity: 0.3;
}

/* Header mejorado */
.service-header-badge { position: relative; }

.badge-glow {
    background: linear-gradient(45deg, #007bff, #0056b3);
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 50px;
    display: inline-flex;
    align-items: center;
    font-weight: 600;
    box-shadow: 0 0 20px rgba(0, 123, 255, 0.3);
    animation: glow 2s ease-in-out infinite alternate;
}

.text-gradient-services {
    background: linear-gradient(45deg, #ffffff, #f8f9fa, #ffffff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.divider-animated {
    width: 100px;
    height: 4px;
    background: linear-gradient(90deg, transparent, #17a2b8, transparent);
    border-radius: 2px;
    animation: shimmer 2s ease-in-out infinite;
}

.lead-enhanced {
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
    opacity: 0.95;
}

/* Stats */
.stat-item {
    text-align: center;
    padding: 0 1rem;
    border-right: 1px solid rgba(255, 255, 255, 0.2);
}

.stat-item:last-child { border-right: none; }

.stat-number {
    font-size: 2rem;
    font-weight: 700;
    color: #17a2b8;
    display: block;
}

.stat-label {
    font-size: 0.9rem;
    color: rgba(255, 255, 255, 0.8);
}

/* Navegación ultra mejorada */
.service-navigation {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border-radius: 20px;
    padding: 1rem;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.nav-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 2rem;
}

.nav-btn {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: linear-gradient(45deg, #007bff, #0056b3);
    border: none;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    cursor: pointer;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.3);
}

.nav-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
}

.btn-ripple {
    position: absolute;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    transform: scale(0);
    animation: ripple 0.6s linear;
}

.filter-pills-container {
    flex: 1;
    overflow: hidden;
}

.filter-pills {
    display: flex;
    gap: 0.5rem;
    justify-content: center;
    flex-wrap: wrap;
}

.filter-pill {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: white;
    padding: 0.6rem 1.2rem;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
    display: flex;
    align-items: center;
    font-size: 0.9rem;
}

.filter-pill.active,
.filter-pill:hover {
    background: linear-gradient(45deg, #17a2b8, #138496);
    color: white;
    border-color: #17a2b8;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(23, 162, 184, 0.3);
}

.pill-glow {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.6s;
}

.filter-pill:hover .pill-glow {
    left: 100%;
}

/* CORRECCIÓN PARA CENTRADO MOBILE */
.services-carousel-wrapper {
    position: relative;
    overflow: hidden;
    width: 100%;
}

.services-carousel-container {
    position: relative;
    overflow: hidden;
    border-radius: 20px;
    width: 100%;
}

.services-track {
    display: flex;
    gap: 1.5rem;
    transition: transform 0.5s ease;
    padding: 1rem 0;
    width: max-content;
}

/* Cards COMPACTAS y RESPONSIVAS */
.service-card-compact {
    min-width: 280px;
    max-width: 340px;
    flex-shrink: 0;
}

.card-glass-compact {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.4s ease;
    height: auto;
    display: flex;
    flex-direction: column;
}

.card-glass-compact:hover {
    transform: translateY(-8px);
    background: rgba(255, 255, 255, 0.15);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.25);
}

.card-header-compact {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1rem 0;
}

.service-icon-compact {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: white;
}

.reparacion-icon { background: linear-gradient(45deg, #dc3545, #c82333); }
.instalacion-icon { background: linear-gradient(45deg, #28a745, #218838); }
.asesoria-icon { background: linear-gradient(45deg, #17a2b8, #138496); }
.urgencia-icon { background: linear-gradient(45deg, #fd7e14, #e65100); }

.service-badge-compact {
    padding: 0.2rem 0.6rem;
    border-radius: 12px;
    font-size: 0.75rem;
    font-weight: 600;
    color: white;
}

.reparacion-badge { background: linear-gradient(45deg, #dc3545, #c82333); }
.instalacion-badge { background: linear-gradient(45deg, #28a745, #218838); }
.asesoria-badge { background: linear-gradient(45deg, #17a2b8, #138496); }
.urgencia-badge { background: linear-gradient(45deg, #fd7e14, #e65100); }

.card-image-container-compact {
    position: relative;
    margin: 0.75rem 1rem;
    border-radius: 15px;
    overflow: hidden;
    height: 140px;
}

.card-image-compact {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.card-glass-compact:hover .card-image-compact {
    transform: scale(1.05);
}

.image-overlay-compact {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.6);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.card-glass-compact:hover .image-overlay-compact {
    opacity: 1;
}

.btn-detail-compact {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border: none;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    font-size: 0.85rem;
    transform: translateY(15px);
}

.card-glass-compact:hover .btn-detail-compact {
    transform: translateY(0);
}

.price-tag-compact {
    position: absolute;
    top: 10px;
    right: 10px;
    background: linear-gradient(45deg, #17a2b8, #138496);
    color: white;
    padding: 0.3rem 0.75rem;
    border-radius: 15px;
    font-weight: 600;
    font-size: 0.8rem;
    box-shadow: 0 2px 10px rgba(23, 162, 184, 0.3);
}

.price-tag-compact.urgente {
    background: linear-gradient(45deg, #dc3545, #c82333);
    color: white;
    box-shadow: 0 2px 10px rgba(220, 53, 69, 0.4);
    animation: pulse 2s infinite;
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

.card-content-compact {
    padding: 0 1rem 1rem;
    flex: 1;
    display: flex;
    flex-direction: column;
}

.service-title-compact {
    color: white;
    font-weight: 700;
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
}

.service-description-compact {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.4;
    margin-bottom: 1rem;
    flex: 1;
    font-size: 0.9rem;
}

.service-features-compact {
    margin-bottom: 0.75rem;
}

.feature-item-compact {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 0.4rem;
    color: rgba(255, 255, 255, 0.9);
    font-size: 0.8rem;
}

.rating-stars-compact {
    display: flex;
    align-items: center;
    gap: 0.2rem;
    font-size: 0.8rem;
}

.rating-text-compact {
    color: rgba(255, 255, 255, 0.8);
    font-size: 0.75rem;
    margin-left: 0.3rem;
}

.btn-action-compact {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border: none;
    color: white;
    padding: 0.6rem 1rem;
    border-radius: 20px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.4rem;
    font-weight: 600;
    margin-top: auto;
    font-size: 0.9rem;
}

.btn-action-compact:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 123, 255, 0.4);
    background: linear-gradient(45deg, #0056b3, #003d82);
}

.btn-action-compact.urgente {
    background: linear-gradient(45deg, #dc3545, #c82333);
    animation: pulse-glow 2s infinite;
}

.btn-action-compact.urgente:hover {
    background: linear-gradient(45deg, #c82333, #a71e2a);
    box-shadow: 0 6px 20px rgba(220, 53, 69, 0.5);
}

@keyframes pulse-glow {
    0%, 100% { 
        transform: scale(1);
        box-shadow: 0 0 0 0 rgba(220, 53, 69, 0.3);
    }
    50% { 
        transform: scale(1.02);
        box-shadow: 0 0 0 10px rgba(220, 53, 69, 0);
    }
}

/* Paginación mejorada */
.pagination-container {
    text-align: center;
    margin-top: 2rem;
}

.service-pagination {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.pagination-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    cursor: pointer;
    transition: all 0.3s ease;
}

.pagination-dot.active {
    background: #17a2b8;
    transform: scale(1.2);
}

.pagination-progress {
    width: 80px;
    height: 3px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 2px;
    margin: 0 auto;
    overflow: hidden;
}

.progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #007bff, #17a2b8);
    border-radius: 2px;
    transition: width 0.5s ease;
    width: 20%;
}

/* CTA final */
.cta-container {
    background: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 25px;
    padding: 2rem;
    max-width: 600px;
    margin: 0 auto;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-cta-modern {
    padding: 0.75rem 2rem;
    border-radius: 25px;
    text-decoration: none;
    color: white;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    border: 2px solid transparent;
}

.btn-cta-modern.whatsapp {
    background: linear-gradient(45deg, #25d366, #20b954);
    border-color: #25d366;
}

.btn-cta-modern.phone {
    background: linear-gradient(45deg, #007bff, #0056b3);
    border-color: #007bff;
}

.btn-cta-modern:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
    color: white;
}

/* CORRECCIONES RESPONSIVE PARA CENTRADO PERFECTO */

/* TABLET ESPECÍFICO (768px - 1200px) - CORRECCIÓN OPTIMIZADA */
@media (min-width: 769px) and (max-width: 1199px) {
    /* Contenedor principal más compacto */
    .service-navigation {
        max-width: 100%;
        margin: 0 auto 1.5rem;
        padding: 0.75rem;
    }
    
    .services-carousel-wrapper {
        max-width: 100%;
        margin: 0 auto;
        padding: 0 1rem;
    }
    
    .services-carousel-container {
        padding: 0;
        overflow: hidden;
        width: 100%;
    }
    
    .services-track {
        gap: 1rem;
        padding: 0.5rem 0;
        display: flex;
        transition: transform 0.5s ease;
        justify-content: flex-start;
        margin: 0;
    }
    
    /* TARJETAS MÁS PEQUEÑAS Y COMPACTAS PARA TABLET */
    .service-card-compact {
        min-width: 260px !important; /* Reducido de 280px */
        max-width: 260px !important;
        flex-shrink: 0;
        height: auto;
    }
    
    .card-glass-compact {
        border-radius: 16px; /* Bordes más suaves */
        overflow: hidden;
        height: 100%;
        max-height: 400px; /* Limitar altura máxima */
    }
    
    /* Header más compacto */
    .card-header-compact {
        padding: 0.75rem 0.75rem 0;
    }
    
    /* Imagen MÁS PEQUEÑA */
    .card-image-container-compact {
        height: 100px !important; /* Reducido significativamente de 120px */
        margin: 0.5rem 0.75rem; /* Márgenes reducidos */
        border-radius: 12px;
    }
    
    /* Contenido más compacto */
    .card-content-compact {
        padding: 0 0.75rem 0.75rem; /* Padding reducido */
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: auto;
    }
    
    /* Tipografía MÁS PEQUEÑA */
    .service-title-compact {
        font-size: 0.95rem !important; /* Reducido aún más */
        font-weight: 700;
        margin-bottom: 0.4rem;
        line-height: 1.2;
    }
    
    .service-description-compact {
        font-size: 0.8rem !important; /* Reducido de 0.85rem */
        line-height: 1.25;
        margin-bottom: 0.6rem; /* Menos espacio */
        flex: 1;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Limitar a 2 líneas */
        line-clamp: 2; /* Estándar CSS */
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    /* Features más compactas */
    .service-features-compact {
        margin-bottom: 0.5rem;
    }
    
    .feature-item-compact {
        font-size: 0.7rem !important; /* Aún más pequeño */
        margin-bottom: 0.25rem;
        gap: 0.4rem;
    }
    
    .feature-item-compact i {
        font-size: 0.75rem; /* Iconos más pequeños */
    }
    
    /* Estrellas más compactas */
    .rating-stars-compact {
        margin-bottom: 0.5rem;
        font-size: 0.7rem;
        gap: 0.1rem;
    }
    
    .rating-text-compact {
        font-size: 0.7rem;
        margin-left: 0.2rem;
    }
    
    /* Botones MÁS PEQUEÑOS */
    .btn-action-compact {
        padding: 0.45rem 0.75rem !important; /* Más pequeño */
        font-size: 0.8rem !important;
        border-radius: 16px;
        margin-top: 0.25rem;
    }
    
    .btn-detail-compact {
        padding: 0.35rem 0.7rem;
        font-size: 0.75rem;
        border-radius: 12px;
    }
    
    /* Iconos y badges más pequeños */
    .service-icon-compact {
        width: 36px; /* Reducido de 40px */
        height: 36px;
        font-size: 1.1rem; /* Reducido */
        border-radius: 10px;
    }
    
    .service-badge-compact {
        padding: 0.15rem 0.5rem; /* Más pequeño */
        font-size: 0.7rem;
        border-radius: 10px;
    }
    
    .price-tag-compact {
        padding: 0.25rem 0.6rem; /* Más pequeño */
        font-size: 0.75rem;
        border-radius: 12px;
        top: 8px;
        right: 8px;
    }
    
    /* Overlay mejorado para tablet */
    .image-overlay-compact {
        opacity: 0 !important; /* Volver al comportamiento hover */
        background: rgba(0, 0, 0, 0.7);
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: opacity 0.3s ease;
    }
    
    .card-glass-compact:hover .image-overlay-compact {
        opacity: 1 !important;
    }
    
    .card-glass-compact:hover .btn-detail-compact {
        transform: translateY(0) !important;
    }
    
    /* Navegación optimizada */
    .nav-btn {
        width: 42px;
        height: 42px;
        font-size: 1rem;
    }
    
    .filter-pills-container {
        overflow-x: auto;
        padding: 0 0.5rem;
    }
    
    .filter-pill {
        padding: 0.5rem 0.9rem;
        font-size: 0.8rem;
        white-space: nowrap;
        flex-shrink: 0;
    }
    
    /* Stats más pequeñas */
    .stat-number {
        font-size: 1.6rem;
    }
    
    .stat-label {
        font-size: 0.8rem;
    }
    
    /* Paginación ajustada */
    .pagination-container {
        margin-top: 1rem;
    }
    
    .pagination-dot {
        width: 8px;
        height: 8px;
    }
    
    .pagination-progress {
        width: 60px;
        height: 2px;
    }
}

@media (max-width: 768px) {
    .services-carousel-container {
        padding: 0 1rem;
        overflow: visible;
    }
    
    .services-track {
        gap: 1rem;
        padding: 1rem 0.5rem;
    }
    
    .service-card-compact {
        min-width: calc(100vw - 4rem);
        max-width: calc(100vw - 4rem);
        flex-shrink: 0;
    }
    
    /* Botón overlay siempre visible en mobile */
    .image-overlay-compact {
        opacity: 0.9 !important;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, transparent 100%);
        position: absolute;
        bottom: 0;
        top: auto;
        height: 50%;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        padding-bottom: 1rem;
    }
    
    .btn-detail-compact {
        transform: translateY(0) !important;
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: 2px solid rgba(255, 255, 255, 0.3);
        font-size: 0.8rem;
        padding: 0.4rem 0.8rem;
        border-radius: 15px;
        backdrop-filter: blur(10px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }
    
    .nav-container {
        gap: 1rem;
    }
    
    .nav-btn {
        width: 40px;
        height: 40px;
        font-size: 1rem;
    }
    
    .filter-pills {
        gap: 0.25rem;
    }
    
    .filter-pill {
        padding: 0.5rem 0.9rem;
        font-size: 0.8rem;
    }
    
    .stat-item {
        padding: 0 0.5rem;
    }
    
    .stat-number {
        font-size: 1.5rem;
    }
    
    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
}

@media (max-width: 480px) {
    .services-carousel-container {
        padding: 0 0.5rem;
    }
    
    .service-card-compact {
        min-width: calc(100vw - 2rem);
        max-width: calc(100vw - 2rem);
    }
    
    .services-track {
        gap: 0.5rem;
        padding: 1rem 0.25rem;
    }
    
    .card-content-compact {
        padding: 0 0.75rem 0.75rem;
    }
    
    .card-image-container-compact {
        height: 120px;
        margin: 0.5rem 0.75rem;
    }
    
    .service-navigation {
        padding: 0.75rem;
    }
    
    .filter-pill {
        padding: 0.4rem 0.75rem;
        font-size: 0.75rem;
    }
}

/* Animaciones */
@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

@keyframes glow {
    from { box-shadow: 0 0 20px rgba(0, 123, 255, 0.3); }
    to { box-shadow: 0 0 30px rgba(0, 123, 255, 0.6); }
}

@keyframes shimmer {
    0% { transform: translateX(-100px); }
    100% { transform: translateX(100px); }
}

@keyframes ripple {
    to {
        transform: scale(4);
        opacity: 0;
    }
}

/* PREVENIR INTERACCIONES NO DESEADAS CON MODALES */
.modal {
    z-index: 9999;
}

.modal-backdrop {
    z-index: 9998;
}

.btn-detail-compact,
.btn-action-compact {
    position: relative;
    z-index: 10;
}
</style>

<script>
// JavaScript COMPLETO Y CORREGIDO
document.addEventListener('DOMContentLoaded', function() {
    // Variables del carrusel - IDs únicos
    let currentIndex = 0;
    const track = document.getElementById('servicios-carousel-track');
    const container = document.getElementById('services-carousel-container');
    const cards = document.querySelectorAll('.service-card-compact');
    const totalCards = cards.length;
    
    // Función para calcular maxIndex considerando la navegación especial de tablet
    function calculateMaxIndex(totalVisibleCards) {
        if (window.innerWidth >= 1200) {
            // Desktop: navega de 1 en 1, muestra 3
            return Math.max(0, totalVisibleCards - 3);
        } else if (window.innerWidth > 768 && window.innerWidth < 1200) {
            // Tablet: muestra 2, navega de 1 en 1
            return Math.max(0, totalVisibleCards - 2);
        } else {
            // Móvil: navega de 1 en 1, muestra 1
            return Math.max(0, totalVisibleCards - 1);
        }
    }

    // Responsive cards per view (para navegación)
    function getCardsPerView() {
        if (window.innerWidth >= 1200) return 3; // desktop: 3 tarjetas visibles, navega de 1 en 1
        if (window.innerWidth >= 768) return 2; // tablet: 2 tarjetas visibles, navega de 2 en 2
        return 1; // móvil: 1 tarjeta visible, navega de 1 en 1
    }
    
    let cardsPerView = getCardsPerView();
    let maxIndex = calculateMaxIndex(totalCards);
    
    // FUNCIÓN CORREGIDA PARA CENTRADO PERFECTO
    function updateCarousel() {
        if (!track || !cards.length) return;
        
        // Obtener solo las tarjetas visibles
        const visibleCards = Array.from(cards).filter(card => 
            card.style.display !== 'none' && 
            window.getComputedStyle(card).display !== 'none'
        );
        
        if (visibleCards.length === 0) return;
        
        const isMobile = window.innerWidth <= 768;
        const isTablet = window.innerWidth > 768 && window.innerWidth < 1200;
        
        console.log(`Actualizando carrusel: ${window.innerWidth}px, móvil: ${isMobile}, tablet: ${isTablet}, currentIndex: ${currentIndex}`);
        
        if (isMobile) {
            // CENTRADO PERFECTO EN MOBILE
            const containerWidth = container.offsetWidth;
            const cardWidth = visibleCards[0].offsetWidth;
            const totalGap = 16; // 1rem gap
            
            // Calcular posición para centrar la tarjeta
            const cardOffset = (containerWidth - cardWidth) / 2;
            const translateX = (currentIndex * (cardWidth + totalGap)) - cardOffset;
            
            track.style.transform = `translateX(-${Math.max(0, translateX)}px)`;
        } else if (isTablet) {
            // TABLET: LÓGICA SIMPLIFICADA - mostrar 2 tarjetas de 280px
            const cardWidth = 280; // Tamaño fijo
            const gap = 16; // 1rem gap
            
            // Navegación simple: mover de tarjeta en tarjeta
            const translateX = currentIndex * (cardWidth + gap);
            
            console.log(`Tablet - cardWidth: ${cardWidth}, gap: ${gap}, translateX: ${translateX}`);
            track.style.transform = `translateX(-${translateX}px)`;
        } else {
            // DESKTOP: 3 tarjetas por vista
            const cardWidth = visibleCards[0].offsetWidth;
            const gap = 24; // 1.5rem gap
            const translateX = currentIndex * (cardWidth + gap);
            track.style.transform = `translateX(-${translateX}px)`;
        }
        
        updateProgressBar();
        updatePaginationDots();
    }
    
    function updateProgressBar() {
        const progressBar = document.getElementById('services-progress');
        if (!progressBar) return;
        
        const visibleCards = Array.from(cards).filter(card => 
            card.style.display !== 'none' && 
            window.getComputedStyle(card).display !== 'none'
        ).length;
        
        const currentMaxIndex = calculateMaxIndex(visibleCards);
        const progress = currentMaxIndex > 0 ? (currentIndex / currentMaxIndex) * 100 : 100;
        progressBar.style.width = `${Math.min(100, progress)}%`;
        
        // Actualizar estado de botones
        updateNavigationButtons(currentMaxIndex);
    }
    
    function updateNavigationButtons(currentMaxIndex) {
        const btnLeft = document.getElementById('btn-left-services');
        const btnRight = document.getElementById('btn-right-services');
        
        if (btnLeft) {
            btnLeft.style.opacity = currentIndex > 0 ? '1' : '0.5';
            btnLeft.style.cursor = currentIndex > 0 ? 'pointer' : 'not-allowed';
        }
        
        if (btnRight) {
            btnRight.style.opacity = currentIndex < currentMaxIndex ? '1' : '0.5';
            btnRight.style.cursor = currentIndex < currentMaxIndex ? 'pointer' : 'not-allowed';
        }
    }
    
    function updatePaginationDots() {
        const dots = document.querySelectorAll('.pagination-dot');
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
    }
    
    // Botones de navegación - IDs únicos
    const btnLeft = document.getElementById('btn-left-services');
    const btnRight = document.getElementById('btn-right-services');
    
    if (btnLeft) {
        btnLeft.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log(`Botón izquierdo clickeado - currentIndex antes: ${currentIndex}`);
            
            if (currentIndex > 0) {
                currentIndex = Math.max(0, currentIndex - 1);
                console.log(`Botón izquierdo - currentIndex después: ${currentIndex}`);
                updateCarousel();
                addRippleEffect(this);
            }
        });
    }
    
    if (btnRight) {
        btnRight.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            console.log(`Botón derecho clickeado - currentIndex antes: ${currentIndex}`);
            
            // Recalcular maxIndex con tarjetas visibles
            const visibleCards = Array.from(cards).filter(card => 
                card.style.display !== 'none' && 
                window.getComputedStyle(card).display !== 'none'
            ).length;
            
            const currentMaxIndex = calculateMaxIndex(visibleCards);
            console.log(`Botón derecho - visibleCards: ${visibleCards}, maxIndex: ${currentMaxIndex}`);
            
            if (currentIndex < currentMaxIndex) {
                currentIndex = Math.min(currentMaxIndex, currentIndex + 1);
                console.log(`Botón derecho - currentIndex después: ${currentIndex}`);
                updateCarousel();
                addRippleEffect(this);
            }
        });
    }
    
    // Efecto ripple
    function addRippleEffect(button) {
        const ripple = button.querySelector('.btn-ripple');
        if (ripple) {
            ripple.style.animation = 'none';
            ripple.offsetHeight; // Trigger reflow
            ripple.style.animation = 'ripple 0.6s linear';
        }
    }
    
    // FILTROS CORREGIDOS
    const filterButtons = document.querySelectorAll('.filter-pill');
    filterButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            filterServices(filter);
        });
    });
    
    function filterServices(filter) {
        let visibleCards = 0;
        
        cards.forEach(card => {
            if (filter === 'all' || card.classList.contains(filter)) {
                card.style.display = 'block';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
                visibleCards++;
            } else {
                card.style.opacity = '0';
                card.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    card.style.display = 'none';
                }, 300);
            }
        });
        
        setTimeout(() => {
            // Recalcular cardsPerView para responsive
            cardsPerView = getCardsPerView();
            maxIndex = calculateMaxIndex(visibleCards);
            currentIndex = 0;
            
            // Forzar recálculo del carrusel
            if (track) {
                track.style.transform = 'translateX(0px)';
            }
            
            createPaginationDots();
            updateCarousel();
        }, 350);
    }
    
    // Crear dots de paginación
    function createPaginationDots() {
        const pagination = document.getElementById('services-pagination');
        if (!pagination) return;
        
        pagination.innerHTML = '';
        
        // Contar solo tarjetas realmente visibles
        const visibleCards = Array.from(cards).filter(card => 
            card.style.display !== 'none' && 
            window.getComputedStyle(card).display !== 'none'
        ).length;
        
        const currentCardsPerView = getCardsPerView();
        const totalDots = calculateMaxIndex(visibleCards);
        
        // Solo crear dots si hay más tarjetas que las que se pueden mostrar
        if (totalDots > 0) {
            for (let i = 0; i <= totalDots; i++) {
                const dot = document.createElement('div');
                dot.className = 'pagination-dot';
                if (i === currentIndex) dot.classList.add('active');
                
                dot.addEventListener('click', (e) => {
                    e.preventDefault();
                    e.stopPropagation();
                    currentIndex = i;
                    updateCarousel();
                });
                
                pagination.appendChild(dot);
            }
        }
    }
    
    // RESPONSIVE HANDLING
    function handleResize() {
        const newCardsPerView = getCardsPerView();
        if (newCardsPerView !== cardsPerView) {
            cardsPerView = newCardsPerView;
            
            // Recalcular con tarjetas visibles
            const visibleCards = Array.from(cards).filter(card => 
                card.style.display !== 'none' && 
                window.getComputedStyle(card).display !== 'none'
            ).length;
            
            maxIndex = calculateMaxIndex(visibleCards);
            currentIndex = Math.min(currentIndex, maxIndex);
            
            createPaginationDots();
            setTimeout(updateCarousel, 100);
        }
    }
    
    let resizeTimeout;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(handleResize, 150);
    });
    
    // TOUCH/SWIPE SUPPORT
    let startX = 0;
    let currentX = 0;
    let isDragging = false;
    let startTime = 0;
    
    if (track) {
        track.addEventListener('touchstart', (e) => {
            if (e.target.closest('.btn-detail-compact') || e.target.closest('.btn-action-compact')) {
                return;
            }
            
            startX = e.touches[0].clientX;
            startTime = Date.now();
            isDragging = true;
        }, { passive: true });
        
        track.addEventListener('touchmove', (e) => {
            if (!isDragging) return;
            
            currentX = e.touches[0].clientX;
            const diffX = startX - currentX;
            
            if (Math.abs(diffX) > 10) {
                e.preventDefault();
            }
        });
        
        track.addEventListener('touchend', (e) => {
            if (!isDragging) return;
            isDragging = false;
            
            const diffX = startX - currentX;
            const diffTime = Date.now() - startTime;
            const velocity = Math.abs(diffX) / diffTime;
            
            // Recalcular maxIndex con tarjetas visibles
            const visibleCards = Array.from(cards).filter(card => 
                card.style.display !== 'none' && 
                window.getComputedStyle(card).display !== 'none'
            ).length;
            
            const currentMaxIndex = calculateMaxIndex(visibleCards);
            
            if (Math.abs(diffX) > 30 || velocity > 0.3) {
                if (diffX > 0 && currentIndex < currentMaxIndex) {
                    currentIndex++;
                } else if (diffX < 0 && currentIndex > 0) {
                    currentIndex--;
                }
                updateCarousel();
            }
        }, { passive: true });
    }
    
    // MODAL HANDLERS
    document.addEventListener('show.bs.modal', function(e) {
        isDragging = false;
    });
    
    document.addEventListener('hidden.bs.modal', function(e) {
        setTimeout(() => {
            updateCarousel();
        }, 100);
    });
    
    // Inicializar
    setTimeout(() => {
        // Asegurar que todas las tarjetas estén visibles inicialmente
        cards.forEach(card => {
            if (card.style.display === '') {
                card.style.display = 'block';
            }
        });
        
        // Recalcular valores iniciales
        cardsPerView = getCardsPerView();
        const visibleCards = Array.from(cards).filter(card => 
            card.style.display !== 'none' && 
            window.getComputedStyle(card).display !== 'none'
        ).length;
        
        maxIndex = calculateMaxIndex(visibleCards);
        currentIndex = 0;
        
        createPaginationDots();
        updateCarousel();
        
        console.log(`Carrusel inicializado: ${totalCards} cards totales, ${visibleCards} visibles, ${cardsPerView} por vista, maxIndex: ${maxIndex}`);
        console.log(`Viewport: ${window.innerWidth}px`);
        
        // Test temporal - agregar evento click al body para debug
        document.body.addEventListener('click', function() {
            console.log(`Click detectado - currentIndex: ${currentIndex}, maxIndex: ${maxIndex}`);
        });
    }, 100);
});
</script>


</section>