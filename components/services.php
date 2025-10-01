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
            <h2 class="text-light fw-bold display-5 mb-2"  data-aos="fade-down" data-aos-duration="120" data-aos-delay="400">Servicios Especializados</h2>
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
            <!-- Servicio 2 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card instalacion" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-4 shadow hover-card" style="border-radius: 20px; background-color: rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                    <div class="card-img-container position-relative overflow-hidden" style="border-radius: 20px 20px 0 0;">
                        <img src="img/mantenimiento.jpg" class="img-shadow card-img-top" alt="Mantenimiento Preventivo" data-bs-toggle="modal" data-bs-target="#modalServicio2" style="height: 200px; object-fit: cover; transform: scale(1); transition: transform 0.5s ease;">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s ease;">
                            <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalServicio2">Ver detalles</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="service-badge mb-2"><span class="badge bg-success">Instalación</span></div>
                        <h5 class="card-title text-white fw-bold">Mantenimiento Preventivo</h5>
                        <p class="card-text text-white">Cuida tu inversión con mantenimiento profesional que previene fallas y prolonga la vida útil de tus equipos.</p>
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalServicio2">Ver detalles</button>
                    </div>
                </div>
            </div>
            <!-- Servicio 3 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card asesoria" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-4 shadow hover-card" style="border-radius: 20px; background-color: rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                    <div class="card-img-container position-relative overflow-hidden" style="border-radius: 20px 20px 0 0;">
                        <img src="img/componentes electrónicos.jpg" class="img-shadow card-img-top" alt="Venta de Componentes" data-bs-toggle="modal" data-bs-target="#modalServicio3" style="height: 200px; object-fit: cover; transform: scale(1); transition: transform 0.5s ease;">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s ease;">
                            <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalServicio3">Ver detalles</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="service-badge mb-2"><span class="badge bg-info">Asesoría</span></div>
                        <h5 class="card-title text-white fw-bold">Componentes</h5>
                        <p class="card-text text-white">Ofrecemos componentes originales y certificados para garantizar el óptimo rendimiento de tus sistemas electrónicos.</p>
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalServicio3">Ver detalles</button>
                    </div>
                </div>
            </div>
            <!-- Servicio 4 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card reparacion" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-4 shadow hover-card" style="border-radius: 20px; background-color: rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                    <div class="card-img-container position-relative overflow-hidden" style="border-radius: 20px 20px 0 0;">
                        <img src="img/Inverter_Samsung.JPG" class="img-shadow card-img-top" alt="Servicio Adicional"  data-bs-toggle="modal" data-bs-target="#modalServicio4" style="height: 200px; object-fit: cover; transform: scale(1); transition: transform 0.5s ease;">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s ease;">
                            <button class="btn btn-primary rounded-pill px-4"  data-bs-toggle="modal" data-bs-target="#modalServicio4">Ver detalles</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="service-badge mb-2"><span class="badge bg-primary">Reparación</span></div>
                        <h5 class="card-title text-white fw-bold">Tarjetas de Neveras Inverter</h5>
                        <p class="card-text text-white">Expertos en reparación y modificación de tarjetas electrónicas para neveras inverter, asegurando eficiencia y durabilidad.</p>
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalServicio4">Ver detalles</button>
                    </div>
                </div>
            </div>
            <!-- Servicio 5 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card instalacion" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-4 shadow hover-card" style="border-radius: 20px; background-color: rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                    <div class="card-img-container position-relative overflow-hidden" style="border-radius: 20px 20px 0 0;">
                        <img src="img/protector-voltaje.jpeg" class="img-shadow card-img-top" alt="Venta e Instalación de Protectores de Voltaje" data-bs-toggle="modal" data-bs-target="#modalServicio5" style="height: 200px; object-fit: cover; transform: scale(1); transition: transform 0.5s ease;">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s ease;">
                            <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalServicio5">Ver detalles</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="service-badge mb-2"><span class="badge bg-success">Instalación</span></div>
                        <h5 class="card-title text-white fw-bold">Venta e Instalación de Protectores de Voltaje</h5>
                        <p class="card-text text-white">Protege tus equipos inverter contra picos y fluctuaciones eléctricas con dispositivos certificados y una instalación profesional.</p>
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalServicio5">Ver detalles</button>
                    </div>
                </div>
            </div>
            <!-- Servicio 6 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card instalacion" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-4 shadow hover-card" style="border-radius: 20px; background-color: rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                    <div class="card-img-container position-relative overflow-hidden" style="border-radius: 20px 20px 0 0;">
                        <img src="img/monitoreo-inteligente.jpeg" class="img-shadow card-img-top" alt="Instalación de Sistemas de Monitoreo Inteligente" data-bs-toggle="modal" data-bs-target="#modalServicio6" style="height: 200px; object-fit: cover; transform: scale(1); transition: transform 0.5s ease;">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s ease;">
                            <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalServicio6">Ver detalles</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="service-badge mb-2"><span class="badge bg-success">Instalación</span></div>
                        <h5 class="card-title text-white fw-bold">Instalación de Sistemas de Monitoreo Inteligente</h5>
                        <p class="card-text text-white">Implementa sensores IoT y control remoto para climatización y energía, optimizando el rendimiento y la seguridad de tus equipos.</p>
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalServicio6">Ver detalles</button>
                    </div>
                </div>
            </div>
            <!-- Servicio 7 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card reparacion" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-4 shadow hover-card" style="border-radius: 20px; background-color: rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                    <div class="card-img-container position-relative overflow-hidden" style="border-radius: 20px 20px 0 0;">
                        <img src="img/urgencia-electronica.png" class="img-shadow card-img-top" alt="Servicio de Urgencias y Atención Rápida" data-bs-toggle="modal" data-bs-target="#modalServicio7" style="height: 200px; object-fit: cover; transform: scale(1); transition: transform 0.5s ease;">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s ease;">
                            <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalServicio7">Ver detalles</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="service-badge mb-2"><span class="badge bg-primary">Reparación</span></div>
                        <h5 class="card-title text-white fw-bold">Servicio de Urgencias y Atención Rápida</h5>
                        <p class="card-text text-white">Reparaciones express y soporte fuera de horario para que tus equipos nunca se detengan cuando más los necesitas.</p>
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalServicio7">Ver detalles</button>
                    </div>
                </div>
            </div>
            <!-- Servicio 8 -->
            <div class="col-12 col-sm-6 col-lg-4 text-center service-card asesoria" data-aos="fade-up" data-aos-delay="200">
                <div class="card mb-4 shadow hover-card" style="border-radius: 20px; background-color: rgba(0, 0, 0, 0.2); transition: all 0.3s ease;">
                    <div class="card-img-container position-relative overflow-hidden" style="border-radius: 20px 20px 0 0;">
                        <img src="img/capacitacion-electronica.jpeg" class="img-shadow card-img-top" alt="Asesoría Técnica y Capacitación" data-bs-toggle="modal" data-bs-target="#modalServicio8" style="height: 200px; object-fit: cover; transform: scale(1); transition: transform 0.5s ease;">
                        <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background: rgba(0,0,0,0.4); opacity: 0; transition: opacity 0.3s ease;">
                            <button class="btn btn-primary rounded-pill px-4" data-bs-toggle="modal" data-bs-target="#modalServicio8">Ver detalles</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="service-badge mb-2"><span class="badge bg-info">Asesoría</span></div>
                        <h5 class="card-title text-white fw-bold">Asesoría Técnica y Capacitación</h5>
                        <p class="card-text text-white">Cursos, talleres y asesoría personalizada para técnicos y empresas que buscan mejorar sus conocimientos y resultados.</p>
                        <button class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#modalServicio8">Ver detalles</button>
                    </div>
                </div>
            </div>
            <!-- Agregar más servicios según sea necesario -->
        </div>
        
        <!-- Indicador de página -->
        <div class="text-center mt-4">
            <div class="service-pagination d-flex justify-content-center gap-2">
                <!-- Los indicadores de página se generan dinámicamente con JS -->
            </div>
        </div>
    </div>
</section>