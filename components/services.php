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
            <h2 class="text-light fw-bold display-5 mb-2" data-aos="fade-down" data-aos-duration="120" data-aos-delay="400">Servicios Especializados</h2>
            <div class="d-flex justify-content-center">
                <div class="border-bottom border-info border-2 w-25 mb-3"></div>
            </div>
            <p class="text-light fs-5 mb-4 animate__animated animate__fadeIn" style="max-width: 700px; margin: 0 auto;">
                Soluciones técnicas profesionales con garantía para tus equipos de climatización y refrigeración
            </p>
        </div>
        
        <!-- Navegación de servicios mejorada -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <button id="btn-left" class="btn btn-light rounded-circle shadow-sm" style="width: 48px; height: 48px;">
                <i class="bi bi-chevron-left"></i>
            </button>
            
            <div class="d-flex gap-2 justify-content-center flex-wrap">
                <button class="btn btn-sm btn-outline-light service-filter active" data-filter="all">Todos</button>
                <button class="btn btn-sm btn-outline-light service-filter" data-filter="reparacion">Reparación</button>
                <button class="btn btn-sm btn-outline-light service-filter" data-filter="instalacion">Instalación</button>
                <button class="btn btn-sm btn-outline-light service-filter" data-filter="asesoria">Asesoría</button>
            </div>

            <button id="btn-right" class="btn btn-light rounded-circle shadow-sm" style="width: 48px; height: 48px;">
                <i class="bi bi-chevron-right"></i>
            </button>
        </div>

        <!-- Contenedor del carrusel mejorado -->
        <div id="servicios-carousel" class="row flex-nowrap overflow-hidden" style="scroll-behavior: smooth;">
            <!-- Servicio 1 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card reparacion" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-4 shadow hover-card" style="border-radius: 20px; background-color: rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                    <div class="card-img-container position-relative overflow-hidden" style="border-radius: 20px 20px 0 0;">
                        <img src="img/reparacion.JPG" class="img-shadow card-img-top" alt="Reparación de Tarjetas" data-bs-toggle="modal" data-bs-target="#modalServicio1" style="height: 200px; object-fit: cover; transform: scale(1); transition: transform 0.5s ease;">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s ease;">
                            <button class="btn btn-primary rounded-pill px-4"  data-bs-toggle="modal" data-bs-target="#modalServicio1">Ver detalles</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="service-badge mb-2"><span class="badge bg-primary">Reparación</span></div>
                        <h5 class="card-title text-white fw-bold">Reparación de Tarjetas</h5>
                        <p class="card-text text-white">Soluciones precisas y confiables en diagnóstico y reparación de tarjetas electrónicas para equipos inverter.</p>
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalServicio1">Ver detalles</button>
                    </div>
                </div>
            </div>
            
            <!-- Añade aquí los demás servicios de forma similar al Servicio 1 -->
            <!-- Servicio 2-8 con estructura similar -->
            
        </div>
        
        <!-- Indicador de página -->
        <div class="text-center mt-4">
            <div class="service-pagination d-flex justify-content-center gap-2">
                <!-- Los indicadores de página se generan dinámicamente con JS -->
            </div>
        </div>
    </div>
</section>