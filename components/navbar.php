<?php  ?>
<!-- Navbar Mejorada -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-opacity-75 shadow-sm fixed-top" style="backdrop-filter: blur(6px); transition: all 0.3s;">
    <div class="container">
        <!-- Logo y nombre de la marca -->
        <a class="navbar-brand d-flex align-items-center gap-2" href="#inicio">
            <span class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width:52px; height:52px;">
                <img src="img/logo1.png" alt="Logo de Rafael Soluciones Electrónica" style="width: 38px; height: 38px;">
            </span>
            <span class="fw-bold text-info fs-4 ms-1" style="letter-spacing:1px;">RSE</span>
        </a>
        <!-- Botón de menú hamburguesa animado -->
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
                    <a class="nav-link px-3 py-2 rounded-3" href="#inicio">
                        <i class="bi bi-house"></i> <span>Inicio</span>
                    </a>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <span class="vr mx-2 text-info opacity-50"></span>
                </li>
                <!-- SERVICIOS con submenú -->
                <li class="nav-item dropdown menu-fade">
                    <a class="nav-link dropdown-toggle px-3 py-2 rounded-3" href="#" id="serviciosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-tools"></i> <span>Soluciones</span>
                    </a>
                    <ul class="dropdown-menu shadow rounded-4 border-0 mt-2" aria-labelledby="serviciosDropdown">
                        <li><a class="dropdown-item" href="#servicios"><i class="bi bi-tools"></i> Servicios</a></li>
                        <li><a class="dropdown-item" href="#proceso-trabajo"><i class="bi bi-diagram-3"></i> Proceso de Trabajo</a></li>
                        <li><a class="dropdown-item" href="#tarjetas-carrusel"><i class="bi bi-exclamation-triangle"></i> Errores comunes</a></li>
                        <li><a class="dropdown-item d-none" href="mensaje-provicional.html"><i class="bi bi-check-square"></i> Trabajos Realizados</a></li>
                    </ul>
                </li>
                <!-- NOSOTROS con submenú -->
                <li class="nav-item dropdown menu-fade">
                    <a class="nav-link dropdown-toggle px-3 py-2 rounded-3" href="#" id="nosotrosDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-building-fill-gear"></i> <span>Sobre Nosotros</span>
                    </a>
                    <ul class="dropdown-menu shadow rounded-4 border-0 mt-2" aria-labelledby="nosotrosDropdown">
                        <li><a class="dropdown-item" href="#nosotros"><i class="bi bi-building-fill-gear"></i> Nosotros</a></li>
                        <li><a class="dropdown-item" href="#mision-vision-valores"><i class="bi bi-star-fill"></i> Lo que nos define</a></li>
                    </ul>
                </li>
                <!-- BLOG con submenú -->
                <li class="nav-item dropdown menu-fade">
                    <a class="nav-link dropdown-toggle px-3 py-2 rounded-3" href="#" id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-journal-text"></i> <span>Consejos Técnicos</span>
                    </a>
                    <ul class="dropdown-menu shadow rounded-4 border-0 mt-2" aria-labelledby="blogDropdown">
                        <li><a class="dropdown-item" href="#blog"><i class="bi bi-journal-text"></i> Blog</a></li>
                        <li><a class="dropdown-item" href="#noticias"><i class="bi bi-newspaper"></i> Noticias</a></li>
                        <li><a class="dropdown-item" href="recursos.html"><i class="bi bi-folder"></i> Recursos</a></li>
                    </ul>
                </li>
                <li class="nav-item d-none d-lg-block">
                    <span class="vr mx-2 text-info opacity-50"></span>
                </li>
                <!-- CONTACTO -->
                <li class="nav-item menu-fade">
                    <a class="nav-link px-3 py-2 rounded-3" href="#contacto">
                        <i class="bi bi-person-lines-fill"></i> <span>Contacto</span>
                    </a>
                </li>
                <!-- TIENDA -->
                <li class="nav-item ms-lg-2 menu-fade">
                    <a class="btn btn-info fw-bold px-4 py-2 d-flex align-items-center gap-2 shadow-lg rounded-pill"
                       href="mensaje-provicional.html" style="font-size: 1rem; letter-spacing:1px; background: linear-gradient(45deg, #17a2b8, #138496); border-color: #17a2b8; color: white;">
                        <i class="bi bi-cart3"></i> Tienda
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
/* Navbar mejorada */
.navbar-nav .nav-link {
    transition: background 0.2s, color 0.2s;
}
.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
    background: rgba(13,110,253,0.12);
    color: #0dbdfdff !important;
}
.dropdown-menu {
    min-width: 220px;
    font-size: 1rem;
}
.dropdown-menu .dropdown-item {
    transition: background 0.2s, color 0.2s;
    border-radius: 0.5rem;
}
.dropdown-menu .dropdown-item:hover {
    background: #e3eafc;
    color: #0d6efd;
}
.custom-toggler .toggler-bar {
    display: block;
    width: 28px;
    height: 4px;
    margin: 5px 0;
    background: #fff;
    border-radius: 2px;
    transition: all 0.3s;
}
.navbar-toggler:focus .toggler-bar,
.navbar-toggler:hover .toggler-bar {
    background: #0d6efd;
}

/* Botón de tienda mejorado */
.btn-info:hover {
    background: linear-gradient(45deg, #138496, #117a8b) !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 20px rgba(23, 162, 184, 0.4) !important;
}

@media (max-width: 991px) {
    .navbar-nav .nav-item {
        margin-bottom: 0.5rem;
    }
    .navbar-nav .nav-link {
        font-size: 1.1rem;
    }
}
</style>