<?php ?>
<!-- Contacto Section -->
<section id="contacto" class="py-5" style="background: linear-gradient(135deg, #f8fafc 0%, #e3eafc 100%); position: relative;">
    
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-down" data-aos-delay="100">
            <h2 class="display-5 fw-bold text-primary mb-3">Contáctanos</h2>
            <div class="d-flex justify-content-center">
                <div class="bg-info rounded-pill" style="width: 60px; height: 4px;"></div>
            </div>
            <p class="text-muted mt-3 fs-5">Estamos aquí para ayudarte con tus necesidades técnicas</p>
        </div>
        
        <div class="row g-5 align-items-start">
            <!-- Formulario de Contacto -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4">
                    <h4 class="text-primary fw-bold mb-4 d-flex align-items-center">
                        <i class="bi bi-envelope-paper-heart me-2"></i>
                        Envíanos un mensaje
                    </h4>
                    
                    <form action="PHP/enviar.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control rounded-3 border-0 shadow-sm" id="nombre" name="nombre" placeholder="Tu nombre completo" required style="background: rgba(255,255,255,0.8);">
                                <label for="nombre"><i class="bi bi-person-circle me-2 text-primary"></i>Nombre completo</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="form-floating">
                                <input type="email" class="form-control rounded-3 border-0 shadow-sm" id="email" name="email" placeholder="tu@email.com" required style="background: rgba(255,255,255,0.8);">
                                <label for="email"><i class="bi bi-envelope-at me-2 text-success"></i>Correo electrónico</label>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="mensaje" class="form-label fw-semibold text-secondary">
                                <i class="bi bi-chat-dots me-2 text-info"></i>Describe tu problema
                                <i class="bi bi-info-circle text-primary ms-2" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Describe brevemente tu problema: el aire no enciende, display parpadea, etc."></i>
                            </label>
                            <textarea class="form-control rounded-3 border-0 shadow-sm" id="mensaje" name="mensaje" rows="5" placeholder="Cuéntanos qué necesitas..." required style="background: rgba(255,255,255,0.8);"></textarea>
                        </div>
                        
                        <div class="mb-3 d-none">
                            <input type="file" class="form-control" id="archivo" name="archivo" accept="image/*">
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                            <button type="submit" class="btn btn-gradient-primary btn-lg px-5 fw-bold shadow-lg rounded-pill">
                                <i class="bi bi-send me-2"></i>Enviar Mensaje
                            </button>
                            <button type="reset" class="btn btn-outline-secondary btn-lg px-4 rounded-pill">
                                <i class="bi bi-arrow-clockwise me-2"></i>Limpiar
                            </button>
                        </div>
                        
                        <div class="mt-3">
                            <small class="text-muted">
                                <i class="bi bi-clock-history me-1"></i>
                                Responderemos en menos de 12 horas
                            </small>
                        </div>
                    </form>
                </div>
                
                <!-- Código QR debajo del formulario -->
                <div class="text-center p-4 mt-4 rounded-4" style="background: rgba(255,255,255,0.6); backdrop-filter: blur(10px);" data-aos="fade-up" data-aos-delay="600">
                    <h6 class="fw-bold text-secondary mb-3">
                        <i class="bi bi-qr-code me-2"></i>¿Prefieres WhatsApp? Escanea aquí
                    </h6>
                    <div class="qr-container bg-white rounded-4 p-3 d-inline-block shadow-sm border">
                        <img src="img/Codigo_QR_de_WhatsApp.JPG" alt="Código QR de WhatsApp" class="img-fluid rounded-3" width="120" height="120" loading="lazy">
                    </div>
                    <p class="text-muted mt-2 mb-0 small">Contacto directo por WhatsApp</p>
                </div>
            </div>
            
            <!-- Información de Contacto -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="p-4">
                    <h4 class="text-primary fw-bold mb-4 d-flex align-items-center">
                        <i class="bi bi-person-lines-fill me-2"></i>
                        Información de Contacto
                    </h4>
                    
                    <div class="contact-info-modern">
                        <div class="contact-item mb-4 p-4 rounded-4" style="background: rgba(255,255,255,0.6); backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon bg-success text-white rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold text-secondary">Teléfono</h6>
                                    <a href="tel:8295965912" class="text-dark text-decoration-none fw-semibold">829-596-5912</a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-item mb-4 p-4 rounded-4" style="background: rgba(255,255,255,0.6); backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon bg-danger text-white rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold text-secondary">Correo</h6>
                                    <a href="mailto:rafael.soluciones.electronica@gmail.com" class="text-dark text-decoration-none fw-semibold">
                                        info@rselectronicas.com
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-item mb-4 p-4 rounded-4" style="background: rgba(255,255,255,0.6); backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon bg-info text-white rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold text-secondary">Dirección</h6>
                                    <span class="text-dark">Calle Barahona #163, San Carlos, Santo Domingo, R.D.</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="contact-item mb-4 p-4 rounded-4" style="background: rgba(255,255,255,0.6); backdrop-filter: blur(10px);">
                            <div class="d-flex align-items-center">
                                <div class="contact-icon bg-warning text-white rounded-circle me-3" style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold text-secondary">Horario</h6>
                                    <span class="text-dark">Lun-Vie: 9:00-5:30<br>Sáb: 9:00-1:00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-4 p-4 rounded-4" style="background: rgba(255,255,255,0.6); backdrop-filter: blur(10px);">
                        <h5 class="fw-bold text-secondary mb-3 d-flex align-items-center">
                            <i class="bi bi-share-fill me-2"></i>Síguenos
                        </h5>
                        <div class="d-flex gap-3">
                            <a href="https://www.instagram.com/rafael_soluciones_electronica" class="btn btn-social text-white shadow-sm" style="background: #E4405F;" target="_blank">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a href="https://wa.me/18297470675" class="btn btn-social bg-success text-white shadow-sm position-relative" target="_blank">
                                <i class="bi bi-whatsapp"></i>
                                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle">
                                    <span class="visually-hidden">En línea</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Toast de Éxito Modernizado -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="successToast" class="toast border-0 shadow-xl" role="alert" aria-live="assertive" aria-atomic="true" style="min-width: 350px;">
        <div class="toast-header text-white border-0" style="background: linear-gradient(135deg, #28a745 0%, #20c997 100%);">
            <div class="rounded-circle bg-white bg-opacity-20 p-2 me-2">
                <i class="bi bi-check-circle-fill text-white"></i>
            </div>
            <strong class="me-auto fs-6">¡Mensaje enviado con éxito!</strong>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); color: #495057;">
            <div class="d-flex align-items-center">
                <i class="bi bi-envelope-check text-success me-2" style="font-size: 1.2rem;"></i>
                <div>
                    <p class="mb-1 fw-semibold">Tu mensaje ha sido enviado exitosamente.</p>
                    <small class="text-muted">Te responderemos en menos de 12 horas.</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Toast de Error (por si acaso) -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="errorToast" class="toast border-0 shadow-xl" role="alert" aria-live="assertive" aria-atomic="true" style="min-width: 350px;">
        <div class="toast-header text-white border-0" style="background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%);">
            <div class="rounded-circle bg-white bg-opacity-20 p-2 me-2">
                <i class="bi bi-exclamation-triangle-fill text-white"></i>
            </div>
            <strong class="me-auto fs-6">Error al enviar mensaje</strong>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); color: #495057;">
            <div class="d-flex align-items-center">
                <i class="bi bi-envelope-x text-danger me-2" style="font-size: 1.2rem;"></i>
                <div>
                    <p class="mb-1 fw-semibold">Hubo un problema al enviar tu mensaje.</p>
                    <small class="text-muted">Por favor, inténtalo de nuevo o contáctanos directamente.</small>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.btn-gradient-primary {
    background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
    border: none;
    transition: all 0.3s ease;
    color: white;
}

.btn-gradient-primary:hover {
    background: linear-gradient(135deg, #0dcaf0 0%, #0d6efd 100%);
    transform: translateY(-2px);
    box-shadow: 0 10px 20px rgba(13, 110, 253, 0.3);
    color: white;
}

.btn-social {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    border: none;
}

.btn-social:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.contact-item {
    transition: all 0.3s ease;
}

.contact-item:hover {
    background: rgba(255,255,255,0.8) !important;
    transform: translateX(5px);
}

.qr-container {
    transition: all 0.3s ease;
}

.qr-container:hover {
    transform: scale(1.05);
}

/* Toast mejorados */
.toast {
    border-radius: 1rem;
    overflow: hidden;
}

.toast-header {
    border-radius: 1rem 1rem 0 0;
}

.shadow-xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

/* Animación de entrada para los toasts */
@keyframes slideInRight {
    from {
        transform: translateX(100%);
        opacity: 0;
    }
    to {
        transform: translateX(0);
        opacity: 1;
    }
}

.toast.show {
    animation: slideInRight 0.5s ease-out;
}
</style>