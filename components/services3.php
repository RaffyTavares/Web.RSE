<?php ?>
    <!-- Servicios Section Mejorada -->
<section id="servicios" class="py-5" style="
        background: linear-gradient(135deg, rgba(45, 45, 48, 0.92) 0%, rgba(75, 75, 80, 0.92) 100%), 
        url('img/servicio2.jpeg') center center/cover fixed no-repeat;
        background-blend-mode: overlay;
    ">
    <div class="container d-flex flex-column">
        <!-- Encabezado de sección mejorado -->
        <div class="text-center mb-5">
            <h2 class="text-light fw-bold display-5 mb-2" data-aos="fade-down" data-aos-duration="1200" data-aos-delay="400">Servicios Especializados</h2>
            <div class="d-flex justify-content-center">
                <div class="border-bottom border-info border-2 w-25 mb-3"></div>
            </div>
            <p class="text-light fs-5 mb-4 animate__animated animate__fadeIn" style="max-width: 700px; margin: 0 auto;">
                Soluciones técnicas profesionales con garantía para tus equipos de climatización y refrigeración
            </p>
        </div>
        
        <!-- Navegación de servicios mejorada -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <button id="btn-left" class="btn btn-light rounded-circle shadow-lg nav-btn-enhanced" style="width: 48px; height: 48px;">
                <i class="bi bi-chevron-left"></i>
            </button>
            
            <div class="d-flex gap-2 justify-content-center flex-wrap">
                <button class="btn btn-sm btn-outline-light service-filter active filter-btn-enhanced" data-filter="all">
                    <i class="bi bi-grid-3x3-gap me-1"></i>Todos
                </button>
                <button class="btn btn-sm btn-outline-light service-filter filter-btn-enhanced" data-filter="reparacion">
                    <i class="bi bi-tools me-1"></i>Reparación
                </button>
                <button class="btn btn-sm btn-outline-light service-filter filter-btn-enhanced" data-filter="instalacion">
                    <i class="bi bi-gear me-1"></i>Instalación
                </button>
                <button class="btn btn-sm btn-outline-light service-filter filter-btn-enhanced" data-filter="asesoria">
                    <i class="bi bi-chat-dots me-1"></i>Asesoría
                </button>
                <button class="btn btn-sm btn-outline-light service-filter filter-btn-enhanced" data-filter="urgencia">
                    <i class="bi bi-lightning me-1"></i>Urgencias
                </button>
            </div>

            <button id="btn-right" class="btn btn-light rounded-circle shadow-lg nav-btn-enhanced" style="width: 48px; height: 48px;">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

        <!-- Contenedor del carrusel mejorado -->
        <div id="servicios-carousel" class="row flex-nowrap overflow-hidden" style="scroll-behavior: smooth;">
            <!-- Servicio 1 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card reparacion" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-4 shadow hover-card card-enhanced">
                    <div class="card-header-enhanced">
                        <div class="service-icon-enhanced reparacion-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <span class="badge-enhanced reparacion-badge">Reparación</span>
                    </div>
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="img/reparacion.JPG" class="img-shadow card-img-top img-enhanced" alt="Reparación de Tarjetas" data-bs-toggle="modal" data-bs-target="#modalServicio1">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center overlay-enhanced">
                            <button class="btn btn-primary rounded-pill px-4 btn-detail-enhanced" data-bs-toggle="modal" data-bs-target="#modalServicio1">
                                <i class="bi bi-eye me-2"></i>Ver detalles
                            </button>
                        </div>
                        <div class="price-tag-enhanced">Desde $50</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">Reparación de Tarjetas</h5>
                        <p class="card-text text-white-50">Soluciones precisas y confiables en diagnóstico y reparación de tarjetas electrónicas para equipos inverter.</p>
                        <div class="rating-enhanced mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="ms-2 text-white-50 small">(4.9/5)</span>
                        </div>
                        <button class="btn btn-outline-light btn-action-enhanced w-100" data-bs-toggle="modal" data-bs-target="#modalServicio1">
                            <span>Solicitar</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Servicio 2 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card instalacion" data-aos="fade-up" data-aos-delay="300">
                <div class="card mb-4 shadow hover-card card-enhanced">
                    <div class="card-header-enhanced">
                        <div class="service-icon-enhanced instalacion-icon">
                            <i class="bi bi-gear"></i>
                        </div>
                        <span class="badge-enhanced instalacion-badge">Instalación</span>
                    </div>
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="img/mantenimiento.jpg" class="img-shadow card-img-top img-enhanced" alt="Mantenimiento Preventivo" data-bs-toggle="modal" data-bs-target="#modalServicio2">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center overlay-enhanced">
                            <button class="btn btn-primary rounded-pill px-4 btn-detail-enhanced" data-bs-toggle="modal" data-bs-target="#modalServicio2">
                                <i class="bi bi-eye me-2"></i>Ver detalles
                            </button>
                        </div>
                        <div class="price-tag-enhanced">Desde $75</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">Mantenimiento Preventivo</h5>
                        <p class="card-text text-white-50">Cuida tu inversión con mantenimiento profesional que previene fallas y prolonga la vida útil de tus equipos.</p>
                        <div class="rating-enhanced mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="ms-2 text-white-50 small">(4.8/5)</span>
                        </div>
                        <button class="btn btn-outline-light btn-action-enhanced w-100" data-bs-toggle="modal" data-bs-target="#modalServicio2">
                            <span>Solicitar</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Servicio 3 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card asesoria" data-aos="fade-up" data-aos-delay="400">
                <div class="card mb-4 shadow hover-card card-enhanced">
                    <div class="card-header-enhanced">
                        <div class="service-icon-enhanced asesoria-icon">
                            <i class="bi bi-chat-dots"></i>
                        </div>
                        <span class="badge-enhanced asesoria-badge">Asesoría</span>
                    </div>
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="img/componentes electrónicos.jpg" class="img-shadow card-img-top img-enhanced" alt="Venta de Componentes" data-bs-toggle="modal" data-bs-target="#modalServicio3">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center overlay-enhanced">
                            <button class="btn btn-primary rounded-pill px-4 btn-detail-enhanced" data-bs-toggle="modal" data-bs-target="#modalServicio3">
                                <i class="bi bi-eye me-2"></i>Ver detalles
                            </button>
                        </div>
                        <div class="price-tag-enhanced">Consulta</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">Componentes</h5>
                        <p class="card-text text-white-50">Ofrecemos componentes originales y certificados para garantizar el óptimo rendimiento de tus sistemas electrónicos.</p>
                        <div class="rating-enhanced mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <span class="ms-2 text-white-50 small">(4.7/5)</span>
                        </div>
                        <button class="btn btn-outline-light btn-action-enhanced w-100" data-bs-toggle="modal" data-bs-target="#modalServicio3">
                            <span>Ver Catálogo</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Servicio 4 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card reparacion" data-aos="fade-up" data-aos-delay="500">
                <div class="card mb-4 shadow hover-card card-enhanced">
                    <div class="card-header-enhanced">
                        <div class="service-icon-enhanced reparacion-icon">
                            <i class="bi bi-tools"></i>
                        </div>
                        <span class="badge-enhanced reparacion-badge">Reparación</span>
                    </div>
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="img/Inverter_Samsung.JPG" class="img-shadow card-img-top img-enhanced" alt="Tarjetas de Neveras Inverter" data-bs-toggle="modal" data-bs-target="#modalServicio4">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center overlay-enhanced">
                            <button class="btn btn-primary rounded-pill px-4 btn-detail-enhanced" data-bs-toggle="modal" data-bs-target="#modalServicio4">
                                <i class="bi bi-eye me-2"></i>Ver detalles
                            </button>
                        </div>
                        <div class="price-tag-enhanced">Desde $80</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">Tarjetas de Neveras Inverter</h5>
                        <p class="card-text text-white-50">Expertos en reparación y modificación de tarjetas electrónicas para neveras inverter, asegurando eficiencia y durabilidad.</p>
                        <div class="rating-enhanced mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="ms-2 text-white-50 small">(5.0/5)</span>
                        </div>
                        <button class="btn btn-outline-light btn-action-enhanced w-100" data-bs-toggle="modal" data-bs-target="#modalServicio4">
                            <span>Solicitar</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Servicio 5 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card instalacion" data-aos="fade-up" data-aos-delay="600">
                <div class="card mb-4 shadow hover-card card-enhanced">
                    <div class="card-header-enhanced">
                        <div class="service-icon-enhanced instalacion-icon">
                            <i class="bi bi-shield-fill-check"></i>
                        </div>
                        <span class="badge-enhanced instalacion-badge">Instalación</span>
                    </div>
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="img/protector-voltaje.jpeg" class="img-shadow card-img-top img-enhanced" alt="Protectores de Voltaje" data-bs-toggle="modal" data-bs-target="#modalServicio5">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center overlay-enhanced">
                            <button class="btn btn-primary rounded-pill px-4 btn-detail-enhanced" data-bs-toggle="modal" data-bs-target="#modalServicio5">
                                <i class="bi bi-eye me-2"></i>Ver detalles
                            </button>
                        </div>
                        <div class="price-tag-enhanced">Desde $120</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">Protectores de Voltaje</h5>
                        <p class="card-text text-white-50">Protege tus equipos inverter contra picos y fluctuaciones eléctricas con dispositivos certificados y una instalación profesional.</p>
                        <div class="rating-enhanced mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="ms-2 text-white-50 small">(4.9/5)</span>
                        </div>
                        <button class="btn btn-outline-light btn-action-enhanced w-100" data-bs-toggle="modal" data-bs-target="#modalServicio5">
                            <span>Solicitar</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Servicio 6 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card instalacion" data-aos="fade-up" data-aos-delay="700">
                <div class="card mb-4 shadow hover-card card-enhanced">
                    <div class="card-header-enhanced">
                        <div class="service-icon-enhanced instalacion-icon">
                            <i class="bi bi-cpu"></i>
                        </div>
                        <span class="badge-enhanced instalacion-badge">Instalación</span>
                    </div>
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="img/monitoreo-inteligente.jpeg" class="img-shadow card-img-top img-enhanced" alt="Monitoreo Inteligente" data-bs-toggle="modal" data-bs-target="#modalServicio6">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center overlay-enhanced">
                            <button class="btn btn-primary rounded-pill px-4 btn-detail-enhanced" data-bs-toggle="modal" data-bs-target="#modalServicio6">
                                <i class="bi bi-eye me-2"></i>Ver detalles
                            </button>
                        </div>
                        <div class="price-tag-enhanced">Desde $200</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">Monitoreo Inteligente</h5>
                        <p class="card-text text-white-50">Implementa sensores IoT y control remoto para climatización y energía, optimizando el rendimiento y la seguridad de tus equipos.</p>
                        <div class="rating-enhanced mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-half text-warning"></i>
                            <span class="ms-2 text-white-50 small">(4.6/5)</span>
                        </div>
                        <button class="btn btn-outline-light btn-action-enhanced w-100" data-bs-toggle="modal" data-bs-target="#modalServicio6">
                            <span>Solicitar</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Servicio 7 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card urgencia" data-aos="fade-up" data-aos-delay="800">
                <div class="card mb-4 shadow hover-card card-enhanced">
                    <div class="card-header-enhanced">
                        <div class="service-icon-enhanced urgencia-icon">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <span class="badge-enhanced urgencia-badge">Urgencia</span>
                    </div>
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="img/urgencia-electronica.png" class="img-shadow card-img-top img-enhanced" alt="Urgencias 24/7" data-bs-toggle="modal" data-bs-target="#modalServicio7">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center overlay-enhanced">
                            <button class="btn btn-danger rounded-pill px-4 btn-detail-enhanced urgente" data-bs-toggle="modal" data-bs-target="#modalServicio7">
                                <i class="bi bi-eye me-2"></i>Ver detalles
                            </button>
                        </div>
                        <div class="price-tag-enhanced urgente">24/7</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">Urgencias 24/7</h5>
                        <p class="card-text text-white-50">Reparaciones express y soporte fuera de horario para que tus equipos nunca se detengan cuando más los necesitas.</p>
                        <div class="rating-enhanced mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="ms-2 text-white-50 small">(4.8/5)</span>
                        </div>
                        <button class="btn btn-outline-danger btn-action-enhanced urgente w-100" data-bs-toggle="modal" data-bs-target="#modalServicio7">
                            <span>Emergencia</span>
                            <i class="bi bi-lightning ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Servicio 8 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card asesoria" data-aos="fade-up" data-aos-delay="900">
                <div class="card mb-4 shadow hover-card card-enhanced">
                    <div class="card-header-enhanced">
                        <div class="service-icon-enhanced asesoria-icon">
                            <i class="bi bi-mortarboard"></i>
                        </div>
                        <span class="badge-enhanced asesoria-badge">Asesoría</span>
                    </div>
                    <div class="card-img-container position-relative overflow-hidden">
                        <img src="img/capacitacion-electronica.jpeg" class="img-shadow card-img-top img-enhanced" alt="Capacitación Técnica" data-bs-toggle="modal" data-bs-target="#modalServicio8">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center overlay-enhanced">
                            <button class="btn btn-primary rounded-pill px-4 btn-detail-enhanced" data-bs-toggle="modal" data-bs-target="#modalServicio8">
                                <i class="bi bi-eye me-2"></i>Ver detalles
                            </button>
                        </div>
                        <div class="price-tag-enhanced">Consulta</div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-white fw-bold">Capacitación Técnica</h5>
                        <p class="card-text text-white-50">Cursos, talleres y asesoría personalizada para técnicos y empresas que buscan mejorar sus conocimientos y resultados.</p>
                        <div class="rating-enhanced mb-3">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <span class="ms-2 text-white-50 small">(4.9/5)</span>
                        </div>
                        <button class="btn btn-outline-light btn-action-enhanced w-100" data-bs-toggle="modal" data-bs-target="#modalServicio8">
                            <span>Inscribirse</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Indicador de página -->
        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="800">
            <div class="service-pagination d-flex justify-content-center gap-2">
                <!-- Los indicadores de página se generan dinámicamente con JS -->
            </div>
        </div>
    </div>
</section>

<style>
/* ENHANCED VISUAL STYLES - TODOS LOS SERVICIOS */
.nav-btn-enhanced {
    background: linear-gradient(45deg, #007bff, #0056b3) !important;
    border: none !important;
    color: white !important;
    transition: all 0.3s ease !important;
    backdrop-filter: blur(10px);
}

.nav-btn-enhanced:hover {
    transform: scale(1.1) !important;
    box-shadow: 0 8px 20px rgba(0, 123, 255, 0.5) !important;
    color: white !important;
}

.filter-btn-enhanced {
    backdrop-filter: blur(10px) !important;
    transition: all 0.3s ease !important;
    border: 1px solid rgba(255, 255, 255, 0.3) !important;
}

.filter-btn-enhanced.active {
    background: linear-gradient(45deg, #17a2b8, #138496) !important;
    color: white !important;
    border-color: #17a2b8 !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 15px rgba(23, 162, 184, 0.4) !important;
}

.filter-btn-enhanced:hover {
    background: linear-gradient(45deg, rgba(23, 162, 184, 0.8), rgba(19, 132, 150, 0.8)) !important;
    color: white !important;
    transform: translateY(-1px);
}

.card-enhanced {
    background: rgba(255, 255, 255, 0.1) !important;
    backdrop-filter: blur(15px) !important;
    border: 1px solid rgba(255, 255, 255, 0.2) !important;
    border-radius: 20px !important;
    transition: all 0.3s ease !important;
    overflow: hidden;
}

.card-enhanced:hover {
    background: rgba(255, 255, 255, 0.15) !important;
    transform: translateY(-10px) !important;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4) !important;
}

.card-header-enhanced {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 1rem 1rem 0;
}

.service-icon-enhanced {
    width: 40px;
    height: 40px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: white;
    transition: all 0.3s ease;
}

.card-enhanced:hover .service-icon-enhanced {
    transform: scale(1.1) rotate(5deg);
}

.reparacion-icon {
    background: linear-gradient(135deg, #dc3545, #c82333);
}

.instalacion-icon {
    background: linear-gradient(135deg, #28a745, #218838);
}

.asesoria-icon {
    background: linear-gradient(135deg, #17a2b8, #138496);
}

.urgencia-icon {
    background: linear-gradient(135deg, #fd7e14, #e63946);
    animation: pulse-urgencia 1.5s ease-in-out infinite alternate;
}

.badge-enhanced {
    padding: 0.4rem 0.8rem;
    border-radius: 15px;
    font-size: 0.7rem;
    font-weight: 700;
    color: white;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.reparacion-badge {
    background: linear-gradient(45deg, #dc3545, #c82333);
}

.instalacion-badge {
    background: linear-gradient(45deg, #28a745, #218838);
}

.asesoria-badge {
    background: linear-gradient(45deg, #17a2b8, #138496);
}

.urgencia-badge {
    background: linear-gradient(45deg, #fd7e14, #e63946);
    animation: pulse-badge 1s ease-in-out infinite alternate;
}

.card-img-container {
    margin: 0.8rem;
    border-radius: 15px;
    overflow: hidden;
}

.img-enhanced {
    height: 180px !important;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.card-enhanced:hover .img-enhanced {
    transform: scale(1.05);
}

.price-tag-enhanced {
    position: absolute;
    top: 10px;
    right: 10px;
    background: linear-gradient(45deg, #ffc107, #ffb300);
    color: #000;
    padding: 0.3rem 0.6rem;
    border-radius: 15px;
    font-weight: 700;
    font-size: 0.75rem;
    box-shadow: 0 4px 10px rgba(255, 193, 7, 0.4);
    z-index: 10;
    transform: scale(0.9);
    transition: all 0.3s ease;
}

.card-enhanced:hover .price-tag-enhanced {
    transform: scale(1);
}

.price-tag-enhanced.urgente {
    background: linear-gradient(45deg, #dc2626, #b91c1c);
    color: white;
    animation: pulse-price 1.5s ease-in-out infinite alternate;
}

.overlay-enhanced {
    background: linear-gradient(45deg, rgba(0,0,0,0.7), rgba(0, 123, 255, 0.3)) !important;
    opacity: 0 !important;
    transition: all 0.3s ease !important;
    backdrop-filter: blur(5px) !important;
}

.card-enhanced:hover .overlay-enhanced {
    opacity: 1 !important;
}

.btn-detail-enhanced {
    backdrop-filter: blur(10px);
    transform: translateY(20px);
    transition: all 0.3s ease;
    box-shadow: 0 8px 15px rgba(0, 123, 255, 0.3);
}

.card-enhanced:hover .btn-detail-enhanced {
    transform: translateY(0);
}

.btn-detail-enhanced.urgente {
    background: linear-gradient(45deg, #fd7e14, #e63946) !important;
    border-color: #fd7e14 !important;
    animation: pulse-btn-urgente 1.2s ease-in-out infinite alternate;
}

.rating-enhanced {
    display: flex;
    align-items: center;
}

.btn-action-enhanced {
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-action-enhanced::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s;
}

.btn-action-enhanced:hover::before {
    left: 100%;
}

.btn-action-enhanced:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 15px rgba(255, 255, 255, 0.2);
}

.btn-action-enhanced.urgente {
    border-color: #dc3545 !important;
    color: #dc3545 !important;
    animation: pulse-btn-action 1.8s ease-in-out infinite alternate;
}

.btn-action-enhanced.urgente:hover {
    background-color: #dc3545 !important;
    color: white !important;
    box-shadow: 0 8px 15px rgba(220, 53, 69, 0.3) !important;
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .nav-btn-enhanced {
        width: 42px !important;
        height: 42px !important;
    }
    
    .filter-btn-enhanced {
        font-size: 0.8rem;
        padding: 0.4rem 0.8rem;
    }
    
    .service-icon-enhanced {
        width: 35px;
        height: 35px;
        font-size: 1rem;
    }
    
    .badge-enhanced {
        font-size: 0.65rem;
        padding: 0.3rem 0.6rem;
    }
    
    .price-tag-enhanced {
        font-size: 0.7rem;
        padding: 0.25rem 0.5rem;
    }
    
    .img-enhanced {
        height: 150px !important;
    }
}

/* Animaciones */
@keyframes pulse-urgencia {
    from {
        box-shadow: 0 0 10px rgba(253, 126, 20, 0.5);
        transform: scale(1);
    }
    to {
        box-shadow: 0 0 20px rgba(230, 57, 70, 0.8);
        transform: scale(1.05);
    }
}

@keyframes pulse-badge {
    from {
        box-shadow: 0 0 5px rgba(253, 126, 20, 0.3);
    }
    to {
        box-shadow: 0 0 15px rgba(230, 57, 70, 0.6);
    }
}

@keyframes pulse-price {
    from {
        transform: scale(0.9);
        box-shadow: 0 4px 10px rgba(220, 38, 38, 0.4);
    }
    to {
        transform: scale(1);
        box-shadow: 0 6px 15px rgba(185, 28, 28, 0.6);
    }
}

@keyframes pulse-btn-urgente {
    from {
        box-shadow: 0 8px 15px rgba(253, 126, 20, 0.3);
    }
    to {
        box-shadow: 0 10px 20px rgba(230, 57, 70, 0.5);
    }
}

@keyframes pulse-btn-action {
    from {
        box-shadow: 0 0 5px rgba(220, 53, 69, 0.2);
    }
    to {
        box-shadow: 0 0 15px rgba(220, 53, 69, 0.4);
    }
}
</style>