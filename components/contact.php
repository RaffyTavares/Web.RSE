<?php ?>
<!-- Contacto Section -->
<section id="contacto" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-3" data-aos="fade-down" data-aos-delay="200">Contáctanos</h2>
            <div class="d-flex justify-content-center" data-aos="fade-left" data-aos-delay="700">
                <div class="border-bottom border-info border-2 w-25 mb-4"></div>
            </div>
        <div class="row g-4 align-items-stretch">
            <!-- Formulario de Contacto -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <form action="PHP/enviar.php" method="POST" enctype="multipart/form-data" class="bg-white bg-opacity-75 p-4 rounded-4 shadow-sm animate__animated animate__fadeInLeft animate__faster">
                    <!-- Campos del formulario -->
                </form>
            </div>
            <!-- Información de Contacto -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="500">
                <div class="bg-white bg-opacity-75 p-4 rounded-4 shadow-sm h-100 animate__animated animate__fadeInRight animate__faster">
                    <h3 class="text-primary fw-bold mb-4"><i class="bi bi-person-lines-fill me-2"></i>Información de Contacto</h3>
                    <ul class="list-unstyled fs-5 mb-4">
                        <li class="mb-3">
                            <i class="bi bi-telephone-fill text-success me-2"></i>
                            <span class="fw-semibold">Teléfono:</span>
                            <a href="tel:<?php echo $phone_number; ?>" class="text-dark text-decoration-none ms-1"><?php echo $phone_number; ?></a>
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-envelope-fill text-danger me-2"></i>
                            <span class="fw-semibold">Correo:</span>
                            <a href="mailto:<?php echo $email; ?>" class="text-dark text-decoration-none ms-1">
                                <?php echo $email; ?>
                            </a>
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-geo-alt-fill text-info me-2"></i>
                            <span class="fw-semibold">Dirección:</span>
                            <span class="ms-1"><?php echo $address; ?></span>
                        </li>
                        <li class="mb-3">
                            <i class="bi bi-clock-fill text-warning me-2"></i>
                            <span class="fw-semibold">Horario:</span>
                            <span class="ms-1"><?php echo $schedule; ?></span>
                        </li>
                    </ul>
                    <!-- Redes sociales y código QR -->
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal de Éxito -->
    <div class="toast-container position-fixed bottom-0 start-0 p-3">
        <div id="successToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header bg-success text-white">
                <strong class="me-auto">Éxito</strong>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
                Mensaje enviado con éxito.
            </div>
        </div>
    </div>
</section>