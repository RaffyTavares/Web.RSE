<?php ?>
<!-- Contacto Section -->
<section id="contacto" class="py-5 position-relative" style="background: linear-gradient(135deg, #1a1d23 0%, #2d3748 50%, #1a202c 100%); overflow: hidden;">
    
    <!-- Fondo tecnológico moderno -->
    <div class="contact-tech-background"></div>
    <div class="contact-grid-overlay"></div>
    <div class="contact-floating-elements"></div>
    
    <div class="container position-relative" style="z-index: 10;">
        <div class="text-center mb-5" data-aos="fade-down" data-aos-delay="100">
            <h2 class="display-5 fw-bold mb-3" style="color: #00d4ff; text-shadow: 0 0 20px rgba(0,212,255,0.4), 0 4px 8px rgba(0,0,0,0.3);">Contáctanos</h2>
            <div class="d-flex justify-content-center">
                <div class="rounded-pill" style="width: 60px; height: 4px; background: linear-gradient(90deg, #00d4ff 0%, #17a2b8 100%); box-shadow: 0 0 10px rgba(0,212,255,0.5);"></div>
            </div>
            <p class="mt-3 fs-5" style="color: #e2e8f0; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">Estamos aquí para ayudarte con tus necesidades técnicas</p>
        </div>
        
        <div class="row g-5 align-items-start">
            <!-- Formulario de Contacto -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div class="modern-contact-form p-5 rounded-4">
                    <h4 class="fw-bold mb-4 d-flex align-items-center" style="color: #00d4ff; text-shadow: 0 2px 8px rgba(0,212,255,0.3);">
                        <i class="bi bi-envelope-paper-heart me-2"></i>
                        Envíanos un mensaje
                    </h4>
                    
                    <form action="PHP/enviar.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-4">
                            <div class="form-floating modern-input-group">
                                <input type="text" class="form-control modern-input" id="nombre" name="nombre" placeholder=" " required>
                                <label for="nombre"><i class="bi bi-person-circle me-2"></i>Nombre completo</label>
                                <div class="input-glow"></div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <div class="form-floating modern-input-group">
                                <input type="email" class="form-control modern-input" id="email" name="email" placeholder=" " required>
                                <label for="email"><i class="bi bi-envelope-at me-2"></i>Correo electrónico</label>
                                <div class="input-glow"></div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="mensaje" class="form-label fw-semibold mb-3" style="color: #e2e8f0;">
                                <i class="bi bi-chat-dots me-2" style="color: #00d4ff;"></i>Describe tu problema
                                <i class="bi bi-info-circle ms-2" style="color: #17a2b8;" tabindex="0" data-bs-toggle="tooltip" data-bs-placement="top" title="Describe brevemente tu problema: el aire no enciende, display parpadea, etc."></i>
                            </label>
                            <div class="modern-textarea-group">
                                <textarea class="form-control modern-textarea" id="mensaje" name="mensaje" rows="5" placeholder="Cuéntanos qué necesitas: problema con el aire acondicionado, display que parpadea, no enciende, etc." required></textarea>
                                <div class="textarea-glow"></div>
                            </div>
                        </div>
                        
                        <div class="mb-3 d-none">
                            <input type="file" class="form-control" id="archivo" name="archivo" accept="image/*">
                        </div>
                        
                        <div class="d-grid gap-3 d-md-flex justify-content-md-start">
                            <button type="submit" class="btn modern-submit-btn btn-lg px-5 fw-bold rounded-pill position-relative">
                                <span class="btn-content">
                                    <i class="bi bi-send me-2"></i>Enviar Mensaje
                                </span>
                                <div class="btn-glow"></div>
                            </button>
                            <button type="reset" class="btn modern-reset-btn btn-lg px-4 rounded-pill position-relative">
                                <span class="btn-content">
                                    <i class="bi bi-arrow-clockwise me-2"></i>Limpiar
                                </span>
                            </button>
                        </div>
                        
                        <div class="mt-4">
                            <small style="color: #94a3b8;">
                                <i class="bi bi-clock-history me-1" style="color: #00d4ff;"></i>
                                Responderemos en menos de 12 horas
                            </small>
                        </div>
                    </form>
                </div>
                
                <!-- Código QR debajo del formulario -->
                <div class="text-center p-4 mt-4 modern-qr-section rounded-4" data-aos="fade-up" data-aos-delay="600">
                    <h6 class="fw-bold mb-3" style="color: #e2e8f0;">
                        <i class="bi bi-qr-code me-2" style="color: #00d4ff;"></i>¿Prefieres WhatsApp? Escanea aquí
                    </h6>
                    <div class="qr-container-modern d-inline-block">
                        <img src="img/Codigo_QR_de_WhatsApp.JPG" alt="Código QR de WhatsApp" class="img-fluid rounded-3" width="120" height="120" loading="lazy">
                        <div class="qr-glow"></div>
                    </div>
                    <p class="mt-3 mb-0 small" style="color: #94a3b8;">Contacto directo por WhatsApp</p>
                </div>
            </div>
            
            <!-- Información de Contacto -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="modern-contact-info p-5 rounded-4">
                    <h4 class="fw-bold mb-4 d-flex align-items-center" style="color: #00d4ff; text-shadow: 0 2px 8px rgba(0,212,255,0.3);">
                        <i class="bi bi-person-lines-fill me-2"></i>
                        Información de Contacto
                    </h4>
                    
                    <div class="contact-info-modern">
                        <div class="modern-contact-item mb-4 p-4 rounded-4">
                            <div class="d-flex align-items-center">
                                <div class="modern-contact-icon bg-gradient-success text-white rounded-circle me-3">
                                    <i class="bi bi-telephone-fill"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold" style="color: #e2e8f0;">Teléfono</h6>
                                    <a href="tel:8295965912" class="modern-link fw-semibold">829-596-5912</a>
                                </div>
                            </div>
                            <div class="contact-item-glow"></div>
                        </div>
                        
                        <div class="modern-contact-item mb-4 p-4 rounded-4">
                            <div class="d-flex align-items-center">
                                <div class="modern-contact-icon bg-gradient-danger text-white rounded-circle me-3">
                                    <i class="bi bi-envelope-fill"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold" style="color: #e2e8f0;">Correo</h6>
                                    <a href="mailto:rafael.soluciones.electronica@gmail.com" class="modern-link fw-semibold">
                                        info@rselectronicas.com
                                    </a>
                                </div>
                            </div>
                            <div class="contact-item-glow"></div>
                        </div>
                        
                        <div class="modern-contact-item mb-4 p-4 rounded-4">
                            <div class="d-flex align-items-center">
                                <div class="modern-contact-icon bg-gradient-info text-white rounded-circle me-3">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold" style="color: #e2e8f0;">Dirección</h6>
                                    <span style="color: #94a3b8;">Calle Barahona #163, San Carlos, Santo Domingo, R.D.</span>
                                </div>
                            </div>
                            <div class="contact-item-glow"></div>
                        </div>
                        
                        <div class="modern-contact-item mb-4 p-4 rounded-4">
                            <div class="d-flex align-items-center">
                                <div class="modern-contact-icon bg-gradient-warning text-white rounded-circle me-3">
                                    <i class="bi bi-clock-fill"></i>
                                </div>
                                <div>
                                    <h6 class="mb-1 fw-bold" style="color: #e2e8f0;">Horario</h6>
                                    <span style="color: #94a3b8;">Lun-Vie: 9:00-5:30<br>Sáb: 9:00-1:00</span>
                                </div>
                            </div>
                            <div class="contact-item-glow"></div>
                        </div>
                    </div>
                    
                    <div class="modern-social-section mb-4 p-4 rounded-4">
                        <h5 class="fw-bold mb-3 d-flex align-items-center" style="color: #e2e8f0;">
                            <i class="bi bi-share-fill me-2" style="color: #00d4ff;"></i>Síguenos
                        </h5>
                        <div class="d-flex gap-3">
                            <a href="https://www.instagram.com/rafael_soluciones_electronica" class="modern-social-btn instagram-btn" target="_blank">
                                <i class="bi bi-instagram"></i>
                                <div class="social-glow"></div>
                            </a>
                            <a href="https://wa.me/18297470675" class="modern-social-btn whatsapp-btn position-relative" target="_blank">
                                <i class="bi bi-whatsapp"></i>
                                <div class="social-glow"></div>
                                <span class="online-indicator"></span>
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
/* ===================================================================================== */
/* DISEÑO TECNOLÓGICO MODERNO PARA CONTACTO */
/* ===================================================================================== */

/* Fondo tecnológico principal */
.contact-tech-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
    opacity: 0.7;
    background-image: 
        linear-gradient(rgba(0, 212, 255, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 212, 255, 0.1) 1px, transparent 1px),
        linear-gradient(rgba(23, 162, 184, 0.08) 1px, transparent 1px),
        linear-gradient(90deg, rgba(23, 162, 184, 0.08) 1px, transparent 1px);
    background-size: 
        80px 80px,
        80px 80px,
        20px 20px,
        20px 20px;
    animation: techGridFloat 25s ease-in-out infinite;
}

.contact-grid-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 2;
    opacity: 0.4;
    background-image: 
        radial-gradient(circle at 20% 80%, rgba(0, 212, 255, 0.15) 0%, transparent 50%),
        radial-gradient(circle at 80% 20%, rgba(23, 162, 184, 0.12) 0%, transparent 50%),
        radial-gradient(circle at 40% 40%, rgba(111, 66, 193, 0.1) 0%, transparent 50%);
    background-size: 500px 500px, 400px 400px, 300px 300px;
    animation: overlayShift 30s ease-in-out infinite;
}

.contact-floating-elements {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    pointer-events: none;
}

.contact-floating-elements::before,
.contact-floating-elements::after {
    content: '';
    position: absolute;
    width: 6px;
    height: 6px;
    background: rgba(0, 212, 255, 0.6);
    border-radius: 50%;
    animation: floatTech 15s linear infinite;
}

.contact-floating-elements::before {
    top: 20%;
    left: 10%;
    box-shadow: 
        300px 100px 0 rgba(0, 212, 255, 0.4),
        600px 200px 0 rgba(23, 162, 184, 0.5),
        900px 50px 0 rgba(111, 66, 193, 0.3),
        450px 350px 0 rgba(0, 212, 255, 0.35);
}

.contact-floating-elements::after {
    top: 60%;
    left: 80%;
    animation-delay: -7s;
    box-shadow: 
        -200px -50px 0 rgba(23, 162, 184, 0.4),
        -500px -150px 0 rgba(0, 212, 255, 0.5),
        -300px -250px 0 rgba(111, 66, 193, 0.3);
}

/* ===================================================================================== */
/* FORMULARIO MODERNO CON GLASSMORPHISM */
/* ===================================================================================== */

.modern-contact-form {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(0, 212, 255, 0.2);
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
    position: relative;
    overflow: hidden;
}

.modern-contact-form::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.5), transparent);
    animation: borderGlow 3s ease-in-out infinite;
}

.modern-input-group {
    position: relative;
    overflow: hidden;
}

.modern-input {
    background: rgba(255, 255, 255, 0.1) !important;
    border: 1px solid rgba(0, 212, 255, 0.3) !important;
    color: #e2e8f0 !important;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    padding-top: 1.625rem;
    padding-bottom: 0.625rem;
}

.modern-input:focus {
    background: rgba(255, 255, 255, 0.15) !important;
    border-color: #00d4ff !important;
    box-shadow: 0 0 20px rgba(0, 212, 255, 0.3) !important;
    color: #ffffff !important;
}

.modern-input::placeholder {
    color: transparent !important;
}

.form-floating > label {
    color: #94a3b8 !important;
    transition: all 0.3s ease;
    padding: 1rem 0.75rem;
    transform-origin: 0 0;
    left: 0;
    top: 0;
    position: absolute;
    pointer-events: none;
}

.form-floating > .modern-input:focus ~ label,
.form-floating > .modern-input:not(:placeholder-shown) ~ label {
    color: #00d4ff !important;
    transform: scale(0.85) translateY(-0.5rem) translateX(0.15rem);
    padding: 0.25rem 0.75rem;
}

.input-glow {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #00d4ff, #17a2b8);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.modern-input:focus + label + .input-glow {
    width: 100%;
}

.modern-textarea-group {
    position: relative;
    overflow: hidden;
}

.modern-textarea {
    background: rgba(255, 255, 255, 0.1) !important;
    border: 1px solid rgba(0, 212, 255, 0.3) !important;
    color: #e2e8f0 !important;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
    resize: vertical;
    padding: 1rem;
}

.modern-textarea:focus {
    background: rgba(255, 255, 255, 0.15) !important;
    border-color: #00d4ff !important;
    box-shadow: 0 0 20px rgba(0, 212, 255, 0.3) !important;
    color: #ffffff !important;
}

.modern-textarea::placeholder {
    color: #94a3b8 !important;
    opacity: 0.8;
    font-size: 0.95rem;
}

.textarea-glow {
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #00d4ff, #17a2b8);
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.modern-textarea:focus ~ .textarea-glow {
    width: 100%;
}

/* ===================================================================================== */
/* BOTONES MODERNOS CON EFECTOS NEÓN */
/* ===================================================================================== */

.modern-submit-btn {
    background: linear-gradient(135deg, #00d4ff 0%, #17a2b8 100%);
    border: none;
    color: white !important;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 8px 25px rgba(0, 212, 255, 0.3);
}

.modern-submit-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 35px rgba(0, 212, 255, 0.5);
    background: linear-gradient(135deg, #17a2b8 0%, #00d4ff 100%);
    color: white !important;
}

.btn-glow {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
    transition: left 0.6s ease;
}

.modern-submit-btn:hover .btn-glow {
    left: 100%;
}

.modern-reset-btn {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(0, 212, 255, 0.3);
    color: #e2e8f0 !important;
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.modern-reset-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: #00d4ff;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0, 212, 255, 0.2);
    color: #ffffff !important;
}

.btn-content {
    position: relative;
    z-index: 2;
}

/* ===================================================================================== */
/* SECCIÓN QR MODERNA */
/* ===================================================================================== */

.modern-qr-section {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(0, 212, 255, 0.2);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}

.qr-container-modern {
    position: relative;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 1rem;
    padding: 1rem;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease;
}

.qr-container-modern:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 35px rgba(0, 212, 255, 0.3);
}

.qr-glow {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(45deg, #00d4ff, #17a2b8, #00d4ff);
    border-radius: 1rem;
    z-index: -1;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.qr-container-modern:hover .qr-glow {
    opacity: 0.7;
}

/* ===================================================================================== */
/* INFORMACIÓN DE CONTACTO MODERNA */
/* ===================================================================================== */

.modern-contact-info {
    background: rgba(255, 255, 255, 0.08);
    backdrop-filter: blur(20px);
    border: 1px solid rgba(0, 212, 255, 0.2);
    box-shadow: 
        0 20px 40px rgba(0, 0, 0, 0.4),
        inset 0 1px 0 rgba(255, 255, 255, 0.1);
}

.modern-contact-item {
    background: rgba(255, 255, 255, 0.06);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 212, 255, 0.15);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.modern-contact-item:hover {
    background: rgba(255, 255, 255, 0.12);
    border-color: rgba(0, 212, 255, 0.4);
    transform: translateX(8px);
}

.contact-item-glow {
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.1), transparent);
    transition: left 0.5s ease;
}

.modern-contact-item:hover .contact-item-glow {
    left: 100%;
}

.modern-contact-icon {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    position: relative;
}

.bg-gradient-success {
    background: linear-gradient(135deg, #28a745 0%, #20c997 100%) !important;
}

.bg-gradient-danger {
    background: linear-gradient(135deg, #dc3545 0%, #fd7e14 100%) !important;
}

.bg-gradient-info {
    background: linear-gradient(135deg, #17a2b8 0%, #00d4ff 100%) !important;
}

.bg-gradient-warning {
    background: linear-gradient(135deg, #ffc107 0%, #fd7e14 100%) !important;
}

.modern-contact-item:hover .modern-contact-icon {
    transform: scale(1.1) rotate(5deg);
    box-shadow: 0 8px 20px rgba(0, 212, 255, 0.3);
}

.modern-link {
    color: #00d4ff !important;
    text-decoration: none;
    transition: all 0.3s ease;
}

.modern-link:hover {
    color: #17a2b8 !important;
    text-shadow: 0 0 10px rgba(0, 212, 255, 0.5);
}

/* ===================================================================================== */
/* SECCIÓN SOCIAL MODERNA */
/* ===================================================================================== */

.modern-social-section {
    background: rgba(255, 255, 255, 0.06);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(0, 212, 255, 0.15);
}

.modern-social-btn {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    border: none;
    position: relative;
    overflow: hidden;
    text-decoration: none;
    font-size: 1.5rem;
}

.instagram-btn {
    background: linear-gradient(135deg, #E4405F 0%, #8B3F8B 50%, #405DE6 100%);
    color: white;
}

.whatsapp-btn {
    background: linear-gradient(135deg, #25D366 0%, #128C7E 100%);
    color: white;
}

.modern-social-btn:hover {
    transform: translateY(-5px) scale(1.1);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
    color: white;
}

.social-glow {
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    border-radius: 50%;
    background: linear-gradient(45deg, rgba(255, 255, 255, 0.2), transparent, rgba(255, 255, 255, 0.2));
    opacity: 0;
    transition: opacity 0.3s ease;
}

.modern-social-btn:hover .social-glow {
    opacity: 1;
}

.online-indicator {
    position: absolute;
    top: 5px;
    right: 5px;
    width: 12px;
    height: 12px;
    background: #00ff00;
    border: 2px solid white;
    border-radius: 50%;
    animation: pulse 2s infinite;
}

/* ===================================================================================== */
/* ANIMACIONES TECNOLÓGICAS */
/* ===================================================================================== */

@keyframes techGridFloat {
    0%, 100% {
        transform: translate(0, 0);
        opacity: 0.7;
    }
    50% {
        transform: translate(5px, -10px);
        opacity: 0.9;
    }
}

@keyframes overlayShift {
    0%, 100% {
        background-position: 0% 0%, 100% 100%, 50% 50%;
    }
    50% {
        background-position: 100% 100%, 0% 0%, 25% 75%;
    }
}

@keyframes floatTech {
    0% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.8;
    }
    50% {
        transform: translateY(-15px) rotate(180deg);
        opacity: 1;
    }
    100% {
        transform: translateY(0px) rotate(360deg);
        opacity: 0.8;
    }
}

@keyframes borderGlow {
    0%, 100% {
        opacity: 0.5;
    }
    50% {
        opacity: 1;
    }
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(0, 255, 0, 0.7);
    }
    70% {
        box-shadow: 0 0 0 10px rgba(0, 255, 0, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(0, 255, 0, 0);
    }
}

/* ===================================================================================== */
/* TOASTS MEJORADOS */
/* ===================================================================================== */

.toast {
    border-radius: 1rem;
    overflow: hidden;
    backdrop-filter: blur(20px);
}

.toast-header {
    border-radius: 1rem 1rem 0 0;
}

.shadow-xl {
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
}

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

/* ===================================================================================== */
/* RESPONSIVE DESIGN */
/* ===================================================================================== */

@media (max-width: 768px) {
    .contact-tech-background {
        background-size: 40px 40px, 40px 40px, 15px 15px, 15px 15px;
        opacity: 0.5;
    }
    
    .contact-floating-elements::before,
    .contact-floating-elements::after {
        display: none;
    }
    
    .modern-contact-form,
    .modern-contact-info {
        margin: 1rem 0;
    }
    
    .modern-social-btn {
        width: 50px;
        height: 50px;
        font-size: 1.2rem;
    }
}

/* Interacción con hover de sección completa */
#contacto:hover .contact-tech-background {
    opacity: 0.9;
    animation-duration: 15s;
}

#contacto:hover .contact-grid-overlay {
    opacity: 0.6;
}
</style>