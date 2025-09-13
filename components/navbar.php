<?php include 'variables.php'; ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-opacity-75 shadow-sm fixed-top" style="backdrop-filter: blur(5px); transition: all 0.3s ease;">
    <div class="container">
        <!-- Logo y nombre de la marca -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="#inicio">
            <img src="img/logo1.png" alt="Logo de Rafael Soluciones Electrónica" style="width: 48px; height: auto;">
            <span class="fw-bold text-info">RSE</span>
        </a>
        <!-- Botón de menú hamburguesa -->
        <button class="navbar-toggler border-0 custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center gap-lg-2">
                <!-- INICIO -->
                <li class="nav-item menu-fade">
                    <a class="nav-link" href="#inicio"><i class="bi bi-house"></i> <span>Inicio</span></a>
                </li>

                <!-- SERVICIOS con submenú -->
                <li class="nav-item dropdown menu-fade">
                    <a class="nav-link dropdown-toggle" href="#" id="serviciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-tools"></i> <span>Soluciones</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="serviciosDropdown">
                        <li><a class="dropdown-item" href="#servicios"><i class="bi bi-tools"></i> servicios</a></li>
                        <li><a class="dropdown-item" href="#proceso-trabajo"><i class="bi bi-diagram-3"></i> Proceso de Trabajo</a></li>
                        <li><a class="dropdown-item" href="#tarjetas-carrusel"><i class="bi bi-exclamation-triangle"></i> Errores comunes</a></li>
                        <li><a class="dropdown-item d-none" href="mensaje-provicional.html"><i class="bi bi-check-square"></i> Trabajos Realizados</a></li>
                    </ul>
                </li>

                <!-- NOSOTROS con submenú -->
                <li class="nav-item dropdown menu-fade">
                    <a class="nav-link dropdown-toggle" href="#" id="nosotrosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-building-fill-gear"></i> <span>Sobre Nosotros</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="nosotrosDropdown">
                        <li><a class="dropdown-item" href="#nosotros"><i class="bi bi-building-fill-gear"></i> Nosotros</a></li>
                        <li><a class="dropdown-item" href="#mision-vision-valores"><i class="bi bi-star-fill"></i> Lo que nos define</a></li>
                    </ul>
                </li>

                <!-- BLOG con submenú -->
                <li class="nav-item dropdown menu-fade">
                    <a class="nav-link dropdown-toggle" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-journal-text"></i> <span>Consejos Técnicos</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                        <li><a class="dropdown-item" href="#blog"><i class="bi bi-journal-text"></i> Blog</a></li>
                        <li><a class="dropdown-item" href="#noticias"><i class="bi bi-newspaper"></i> Noticias</a></li>
                        <li><a class="dropdown-item" href="recursos.html"><i class="bi bi-folder"></i> Recursos</a></li>
                    </ul>
                </li>

                <!-- CONTACTO -->
                <li class="nav-item menu-fade">
                    <a class="nav-link" href="#contacto"><i class="bi bi-person-lines-fill"></i> <span>Contacto</span></a>
                </li>

                <!-- TIENDA -->
                <li class="nav-item ms-lg-2 menu-fade ">
                    <a class="btn btn-warning fw-bold px-3 py-2 d-flex align-items-center gap-2 shadow-sm"
                       href="mensaje-provicional.html"  style="font-size: 1rem;">
                        <i class="bi bi-cart3"></i> Tienda
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>