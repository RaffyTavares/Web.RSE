<?php  ?>
<!-- Navbar Mejorada -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-opacity-75 shadow-sm fixed-top" style="backdrop-filter: blur(6px); transition: all 0.3s;">
    <div class="container-fluid px-3">
        <!-- Logo y nombre de la marca -->
        <a class="navbar-brand d-flex align-items-center gap-2 flex-shrink-0" href="#inicio">
            <span class="bg-white rounded-circle shadow-sm d-flex align-items-center justify-content-center" style="width:52px; height:52px;">
                <img src="img/logo1.png" alt="Logo de Rafael Soluciones Electrónica" style="width: 38px; height: 38px;">
            </span>
            <span class="fw-bold text-info fs-4 ms-1 brand-text" style="letter-spacing:1px;">RSE</span>
        </a>
        <!-- Botón de menú hamburguesa animado -->
        <button class="navbar-toggler border-0 custom-toggler flex-shrink-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
            <span class="toggler-bar"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
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
                <li class="nav-item menu-fade">
                    <a class="btn btn-info fw-bold d-flex align-items-center gap-2 shadow-lg tienda-btn"
                       href="mensaje-provicional.html" style="letter-spacing:0.5px; background: linear-gradient(45deg, #17a2b8, #138496); border-color: #17a2b8; color: white;">
                        <i class="bi bi-cart3"></i> <span class="tienda-text">Tienda</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
/* ===================================================================== */
/* NAVBAR RESPONSIVE OPTIMIZADO */
/* ===================================================================== */

/* Base navbar styles */
.navbar {
    padding: 0.5rem 0;
    min-height: 70px;
}

.navbar-brand {
    font-size: 1.2rem;
    margin-right: 0;
}

/* Optimizar distribución de espacio */
.container-fluid {
    display: flex;
    flex-wrap: nowrap;
    align-items: center;
    justify-content: space-between;
}

.navbar-collapse {
    flex-grow: 1;
    display: flex;
    justify-content: flex-end;
}

.navbar-nav {
    flex-direction: row;
    flex-wrap: nowrap;
    align-items: center;
    gap: 0.5rem;
}

/* Estilos generales de navegación */
.navbar-nav .nav-link {
    padding: 0.5rem 0.8rem;
    border-radius: 8px;
    transition: all 0.2s ease;
    white-space: nowrap;
    font-size: 0.95rem;
}

.navbar-nav .nav-link:hover,
.navbar-nav .nav-link.active {
    background: rgba(13,110,253,0.12);
    color: #0dbdfdff !important;
}

/* Dropdown styles */
.dropdown-menu {
    min-width: 200px;
    font-size: 0.9rem;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
}

.dropdown-menu .dropdown-item {
    padding: 0.6rem 1rem;
    transition: all 0.2s ease;
    border-radius: 8px;
    margin: 2px 8px;
}

.dropdown-menu .dropdown-item:hover {
    background: #e3eafc;
    color: #0d6efd;
}

/* Botón hamburguesa */
.custom-toggler {
    padding: 0.25rem;
    margin-left: 1rem;
}

.custom-toggler .toggler-bar {
    display: block;
    width: 25px;
    height: 3px;
    margin: 4px 0;
    background: #fff;
    border-radius: 2px;
    transition: all 0.3s ease;
}

.navbar-toggler:focus .toggler-bar,
.navbar-toggler:hover .toggler-bar {
    background: #0d6efd;
}

/* Botón de tienda optimizado */
.tienda-btn {
    font-size: 0.9rem !important;
    padding: 0.6rem 1.2rem !important;
    white-space: nowrap;
    border-radius: 25px !important;
    flex-shrink: 0;
    margin-left: 0.5rem;
}

.btn-info:hover {
    background: linear-gradient(45deg, #138496, #117a8b) !important;
    transform: translateY(-1px) !important;
    box-shadow: 0 4px 15px rgba(23, 162, 184, 0.3) !important;
}

/* Separadores verticales */
.navbar-nav .vr {
    height: 20px;
    margin: 0 0.5rem;
}

/* ===================================================================== */
/* RESPONSIVE BREAKPOINTS */
/* ===================================================================== */

/* Large Desktop (1200px+) */
@media (min-width: 1200px) {
    .navbar-nav {
        gap: 0.8rem;
    }
    
    .navbar-nav .nav-link {
        font-size: 1rem;
        padding: 0.6rem 1rem;
    }
    
    .tienda-btn {
        font-size: 1rem !important;
        padding: 0.7rem 1.5rem !important;
    }
}

/* Desktop (992px - 1199px) */
@media (min-width: 992px) and (max-width: 1199px) {
    .navbar-nav {
        gap: 0.6rem;
    }
    
    .navbar-nav .nav-link {
        font-size: 0.9rem;
        padding: 0.5rem 0.8rem;
    }
    
    .tienda-btn {
        font-size: 0.9rem !important;
        padding: 0.6rem 1.2rem !important;
        margin-left: 0.3rem;
    }
}

/* Tablet Horizontal (768px - 991px) */
@media (min-width: 768px) and (max-width: 991px) {
    .navbar {
        padding: 0.3rem 0;
        min-height: 60px;
    }
    
    .container-fluid {
        padding: 0 1rem;
    }
    
    .navbar-brand .brand-text {
        font-size: 1.1rem;
    }
    
    .navbar-nav {
        gap: 0.3rem;
        margin-left: auto;
    }
    
    .navbar-nav .nav-link {
        font-size: 0.85rem;
        padding: 0.4rem 0.6rem;
    }
    
    .navbar-nav .vr {
        display: none !important;
    }
    
    .tienda-btn {
        font-size: 0.8rem !important;
        padding: 0.5rem 0.9rem !important;
        margin-left: 0.2rem !important;
    }
    
    .tienda-btn .gap-2 {
        gap: 0.3rem !important;
    }
    
    /* Dropdown más compacto */
    .dropdown-menu {
        min-width: 180px;
        font-size: 0.8rem;
    }
}

/* Tablet Portrait & Mobile Landscape (576px - 767px) */
@media (min-width: 576px) and (max-width: 767px) {
    .navbar {
        padding: 0.4rem 0;
    }
    
    .navbar-brand .brand-text {
        font-size: 1rem;
    }
}

/* Mobile Portrait (hasta 575px) */
@media (max-width: 575px) {
    .navbar {
        padding: 0.3rem 0;
        min-height: 55px;
    }
    
    .container-fluid {
        padding: 0 0.8rem;
    }
    
    .navbar-brand {
        font-size: 1rem;
    }
    
    .navbar-brand .brand-text {
        font-size: 0.9rem;
    }
}

/* ===================================================================== */
/* ORIENTACIÓN LANDSCAPE ESPECÍFICA */
/* ===================================================================== */

/* Tablet en Landscape (Altura limitada) */
@media (max-width: 1024px) and (max-height: 700px) and (orientation: landscape) {
    .navbar {
        padding: 0.2rem 0;
        min-height: 50px;
    }
    
    .navbar-brand .brand-text {
        display: none; /* Ocultar texto RSE en landscape muy pequeño */
    }
    
    .navbar-nav .nav-link {
        font-size: 0.8rem;
        padding: 0.3rem 0.5rem;
    }
    
    .tienda-btn {
        font-size: 0.75rem !important;
        padding: 0.4rem 0.7rem !important;
    }
    
    .tienda-btn i {
        font-size: 0.8rem;
    }
}

/* ===================================================================== */
/* MODO COLAPSADO (MOBILE MENU) */
/* ===================================================================== */

@media (max-width: 991px) {
    .navbar-collapse {
        margin-top: 1rem;
    }
    
    .navbar-nav {
        flex-direction: column;
        gap: 0.5rem;
        width: 100%;
    }
    
    .navbar-nav .nav-item {
        width: 100%;
    }
    
    .navbar-nav .nav-link {
        font-size: 1.1rem;
        padding: 0.8rem 1rem;
        text-align: center;
        border-radius: 12px;
    }
    
    .navbar-nav .vr {
        display: none !important;
    }
    
    .tienda-btn {
        width: 100% !important;
        margin: 1rem 0 0 0 !important;
        padding: 0.8rem 1rem !important;
        font-size: 1.1rem !important;
        justify-content: center;
    }
    
    .dropdown-menu {
        position: static !important;
        float: none;
        width: 100%;
        margin-top: 0.5rem;
        border: none;
        box-shadow: none;
        background: rgba(255,255,255,0.1);
        border-radius: 12px;
    }
    
    .dropdown-menu .dropdown-item {
        color: #fff;
        font-size: 1rem;
        padding: 0.6rem 1rem;
    }
    
    .dropdown-menu .dropdown-item:hover {
        background: rgba(255,255,255,0.2);
        color: #fff;
    }
}

/* ===================================================================== */
/* ANIMACIONES Y TRANSICIONES */
/* ===================================================================== */

.navbar-nav .nav-item {
    animation: fadeInDown 0.3s ease-out;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Smooth transitions */
* {
    transition: all 0.2s ease;
}
</style>