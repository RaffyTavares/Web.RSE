<?php ?>
<!-- Footer -->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row gy-4">
            <!-- Columna 1: Logo e información principal -->
            <div class="col-lg-4 col-md-6">
                <div class="d-flex align-items-center mb-3">
                    <img src="img/logo1.png" alt="Logo RSE" width="40" height="40" class="me-2">
                    <h5 class="mb-0 text-info fw-bold">Rafael Soluciones Electrónica</h5>
                </div>
                <p class="text-light mb-3">Especialistas en reparación de tarjetas electrónicas para aires acondicionados y neveras con tecnología inverter.</p>
                <div class="d-flex mb-4">
                    <a href="<?php echo $instagram; ?>" class="text-white me-3" target="_blank">
                        <i class="bi bi-instagram fs-4"></i>
                    </a>
                    <a href="https://wa.me/<?php echo $whatsapp; ?>" class="text-white me-3" target="_blank">
                        <i class="bi bi-whatsapp fs-4"></i>
                    </a>
                    <a href="mailto:<?php echo $email; ?>" class="text-white me-3">
                        <i class="bi bi-envelope fs-4"></i>
                    </a>
                </div>
            </div>
            
            <!-- Columna 2: Enlaces rápidos -->
            <div class="col-lg-4 col-md-6">
                <h5 class="mb-3">Enlaces Rápidos</h5>
                <div class="d-flex flex-wrap gap-3">
                    <!-- Enlaces -->
                </div>
            </div>
            
            <!-- Columna 3: Contacto -->
            <div class="col-lg-4 col-md-12">
                <h5 class="mb-3">Información de Contacto</h5>
                <p class="mb-2">
                    <i class="bi bi-geo-alt-fill me-2 text-info"></i>
                    <a href="https://maps.app.goo.gl/VwUhjC9KbW2UYQVP8" target="_blank" class="text-white text-decoration-none">
                        <?php echo $address; ?>
                    </a>
                </p>
                <p class="mb-2">
                    <i class="bi bi-telephone-fill me-2 text-info"></i>
                    <a href="tel:<?php echo $phone_number; ?>" class="text-white text-decoration-none"><?php echo $phone_number; ?></a>
                </p>
                <p class="mb-2">
                    <i class="bi bi-clock-fill me-2 text-info"></i>
                    <span><?php echo $schedule; ?></span>
                </p>
            </div>
        </div>
        
        <!-- Línea divisoria -->
        <hr class="my-4 bg-secondary">
        
        <!-- Copyright y términos legales -->
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; <?php echo $current_year; ?> Todos los derechos reservados. RSE</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="politica-privacidad.html" class="text-white me-3">Política de Privacidad</a>
                <a href="terminos-condiciones.html" class="text-white">Términos y Condiciones</a>
            </div>
        </div>
    </div>
</footer>