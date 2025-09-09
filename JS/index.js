/**
 * Script principal para Rafael Soluciones Electrónicas (RSE)
 * 
 * Este archivo contiene todas las funcionalidades JavaScript para la página web,
 * organizadas por secciones funcionales.
 * 
 * @author: Rafael Tavares
 * @version: 1.0.0
 * @lastUpdate: 2023-08
 */

// =============================================================================
// CONFIGURACIÓN GLOBAL Y PROTECCIÓN DEL SITIO
// =============================================================================

/**
 * Deshabilita el menú contextual (clic derecho) en toda la página
 */
document.oncontextmenu = e => {
    alert('Clic derecho deshabilitado en esta página.');
    return false;
};

// =============================================================================
// FORMULARIO DE CONTACTO
// =============================================================================

/**
 * Gestiona el envío del formulario de contacto
 * - Valida que todos los campos estén completos
 * - Muestra un mensaje de éxito mediante toast
 * - Limpia el formulario después del envío
 */
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm') || document.querySelector('form');
    if (contactForm) {
        contactForm.addEventListener('submit', function (event) {
            const nombre = document.getElementById('nombre').value.trim();
            const email = document.getElementById('email').value.trim();
            const mensaje = document.getElementById('mensaje').value.trim();

            // Validación básica de campos
            if (!nombre || !email || !mensaje) {
                alert('Todos los campos son obligatorios.');
                event.preventDefault();
                return;
            }

            // Mostrar toast de éxito
            const successToastEl = document.getElementById('successToast');
            if (successToastEl) {
                const successToast = new bootstrap.Toast(successToastEl, {
                    autohide: true,
                    delay: 3000
                });
                successToast.show();
            }

            // Limpiar el formulario después de enviar
            setTimeout(() => contactForm.reset(), 100);
        });
    }

    // Animación al hacer clic en el enlace de contacto
    const contactoLink = document.querySelector('a[href="#contacto"]');
    if (contactoLink) {
        contactoLink.addEventListener('click', function (e) {
            e.preventDefault();
            const form = document.querySelector('#contacto form');
            if (form) {
                form.scrollIntoView({ behavior: 'smooth' });
                form.classList.remove('fadeInContacto');
                void form.offsetWidth; // Trigger reflow para reiniciar la animación
                form.classList.add('fadeInContacto');
            }
        });
    }
});

// =============================================================================
// SECCIÓN DE SERVICIOS - CARRUSEL Y FILTROS
// =============================================================================

/**
 * Gestiona el carrusel de servicios con:
 * - Navegación mediante botones
 * - Paginación visual con puntos
 * - Sistema de filtrado por categorías
 * - Efectos visuales en hover
 */
document.addEventListener('DOMContentLoaded', function () {
    // Referencias a elementos del DOM
    const carousel = document.getElementById('servicios-carousel');
    const btnLeft = document.getElementById('btn-left');
    const btnRight = document.getElementById('btn-right');
    const serviceCards = document.querySelectorAll('.service-card');
    const paginationContainer = document.querySelector('.service-pagination');
    
    // Si no existen los elementos, salir de la función
    if (!carousel || !btnLeft || !btnRight || !paginationContainer) return;

    /**
     * Determina cuántas tarjetas mostrar según el ancho de pantalla
     * @returns {number} Número de tarjetas a mostrar
     */
    function getVisibleCards() {
        if (window.innerWidth < 576) return 1; // móvil
        if (window.innerWidth < 992) return 2; // tablet
        return 3; // escritorio
    }
    
    /**
     * Calcula el ancho de desplazamiento para el scroll del carrusel
     * @returns {number} Ancho de desplazamiento en píxeles
     */
    function calculateScrollWidth() {
        const visibleCards = getVisibleCards();
        return carousel.scrollWidth / (serviceCards.length / visibleCards);
    }
    
    // Configuración de botones de navegación
    btnLeft.addEventListener('click', function() {
        carousel.scrollBy({left: -calculateScrollWidth(), behavior: 'smooth'});
    });
    
    btnRight.addEventListener('click', function() {
        carousel.scrollBy({left: calculateScrollWidth(), behavior: 'smooth'});
    });
    
    // Crear indicadores de paginación
    function createPaginationDots() {
        const numPages = Math.ceil(serviceCards.length / getVisibleCards());
        
        for (let i = 0; i < numPages; i++) {
            const dot = document.createElement('span');
            dot.classList.add('pagination-dot');
            dot.style.width = '12px';
            dot.style.height = '12px';
            dot.style.borderRadius = '50%';
            dot.style.backgroundColor = i === 0 ? '#0dcaf0' : '#ffffff';
            dot.style.cursor = 'pointer';
            dot.style.transition = 'all 0.3s ease';
            dot.dataset.page = i;
            
            dot.addEventListener('click', function() {
                const page = parseInt(this.dataset.page);
                const scrollAmount = calculateScrollWidth() * page;
                carousel.scrollTo({left: scrollAmount, behavior: 'smooth'});
                
                // Actualizar dots
                document.querySelectorAll('.pagination-dot').forEach(d => {
                    d.style.backgroundColor = '#ffffff';
                });
                this.style.backgroundColor = '#0dcaf0';
            });
            
            paginationContainer.appendChild(dot);
        }
    }
    
    createPaginationDots();
    
    // Sistema de filtrado por categorías
    const filterButtons = document.querySelectorAll('.service-filter');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Activar botón seleccionado
            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            
            const filter = this.dataset.filter;
            
            // Mostrar/ocultar tarjetas según el filtro
            serviceCards.forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
            
            // Resetear posición del carrusel
            carousel.scrollTo({left: 0, behavior: 'smooth'});
            
            // Actualizar paginación
            updatePagination();
        });
    });
    
    // Efectos hover en las tarjetas
    serviceCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const overlay = this.querySelector('.overlay');
            const img = this.querySelector('.card-img-top');
            if (overlay) overlay.style.opacity = '1';
            if (img) img.style.transform = 'scale(1.05)';
        });
        
        card.addEventListener('mouseleave', function() {
            const overlay = this.querySelector('.overlay');
            const img = this.querySelector('.card-img-top');
            if (overlay) overlay.style.opacity = '0';
            if (img) img.style.transform = 'scale(1)';
        });
    });
    
    /**
     * Actualiza los indicadores de paginación al filtrar o cambiar el tamaño de ventana
     */
    function updatePagination() {
        const visibleCards = getVisibleCards();
        const filteredCards = Array.from(serviceCards).filter(card => 
            card.style.display !== 'none'
        );
        
        const numPages = Math.ceil(filteredCards.length / visibleCards);
        paginationContainer.innerHTML = '';
        
        for (let i = 0; i < numPages; i++) {
            const dot = document.createElement('span');
            dot.classList.add('pagination-dot');
            dot.style.width = '12px';
            dot.style.height = '12px';
            dot.style.borderRadius = '50%';
            dot.style.backgroundColor = i === 0 ? '#0dcaf0' : '#ffffff';
            dot.style.cursor = 'pointer';
            dot.style.transition = 'all 0.3s ease';
            dot.dataset.page = i;
            
            dot.addEventListener('click', function() {
                const page = parseInt(this.dataset.page);
                const scrollAmount = calculateScrollWidth() * page;
                carousel.scrollTo({left: scrollAmount, behavior: 'smooth'});
                
                // Actualizar dots
                document.querySelectorAll('.pagination-dot').forEach(d => {
                    d.style.backgroundColor = '#ffffff';
                });
                this.style.backgroundColor = '#0dcaf0';
            });
            
            paginationContainer.appendChild(dot);
        }
    }
    
    // Actualizar paginación al cambiar tamaño de pantalla
    window.addEventListener('resize', updatePagination);
});

// =============================================================================
// SECCIÓN NOSOTROS - ROTACIÓN DE IMÁGENES
// =============================================================================

/**
 * Gestiona la rotación automática de imágenes en la sección "Nosotros"
 * con efectos de transición elegantes
 */
document.addEventListener('DOMContentLoaded', function () {
    const imagenes = [
        'img/fachada.RSE.jpg',
        'img/taller1.JPG',
        'img/logo1.png'
        // Más imágenes pueden agregarse aquí
    ];
    let idx = 0;
    const imgElement = document.getElementById('nosotros-img');
    
    if (imgElement) {
        imgElement.style.transition = 'opacity 0.7s, transform 0.7s';
        
        // Configurar rotación de imágenes cada 5 segundos
        setInterval(() => {
            // Fase 1: Desvanecer y deslizar a la izquierda
            imgElement.style.opacity = 0;
            imgElement.style.transform = 'translateX(-30px) scale(0.98)';
            
            // Fase 2: Cambiar la imagen
            setTimeout(() => {
                idx = (idx + 1) % imagenes.length;
                imgElement.src = imagenes[idx];
                
                // Fase 3: Preparar para entrada desde la derecha
                imgElement.onload = () => {
                    imgElement.style.transform = 'translateX(80px) scale(0.58)';
                    
                    // Fase 4: Aparecer y centrar
                    setTimeout(() => {
                        imgElement.style.opacity = 1;
                        imgElement.style.transform = 'translateX(0) scale(1)';
                    }, 50);
                };
            }, 700);
        }, 5000);
    }

    // Inicializar popovers de Bootstrap
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    popoverTriggerList.forEach(popoverTriggerEl => {
        new bootstrap.Popover(popoverTriggerEl);
    });

    const popoverList = [...popoverTriggerList].map(triggerEl => new bootstrap.Popover(triggerEl, {
        placement: 'top', // Posición del popover
        html: true, // Permitir contenido HTML
        container: 'body', // Asegura que el popover no se corte
    }));
});

// =============================================================================
// GALERÍA DE TRABAJOS REALIZADOS CON PAGINACIÓN
// =============================================================================

/**
 * Implementa una galería paginada para la sección "Casos de Éxito"
 * - Muestra 2 tarjetas por página en escritorio/tablet y 1 en móvil
 * - Permite navegación mediante controles de paginación
 * - Se adapta automáticamente a diferentes tamaños de pantalla
 */
document.addEventListener('DOMContentLoaded', function () {
    // Datos de los trabajos realizados
    const galeriaItems = [
        {
            img: "/img/generica-moderna.jpg",
            alt: "Reparación de circuito PFC quemado",
            badge: '<span class="badge bg-danger mb-2"><i class="bi bi-exclamation-triangle"></i> Reparación</span>',
            title: "Falla de PFC en Tarjeta Midea",
            text: "<strong>Problema:</strong> Equipo sin encender por pico de voltaje.<br><strong>Solución:</strong> Reemplazo de componentes quemados en el circuito PFC. El contraste entre la pieza dañada y la nueva es evidente.",
            footer: '<span><i class="bi bi-cpu"></i> Midea</span><span><i class="bi bi-exclamation-triangle"></i> Error P0</span>'
        },
        {
            video: "https://www.youtube.com/embed/xtk4NqM5qBY?si=p7EcSyzj_n1CCRCP",
            badge: '<span class="badge bg-success mb-2"><i class="bi bi-check-circle"></i> Prueba en Banco</span>',
            title: "Prueba en Banco: Tarjeta LG",
            text: "<strong>Problema:</strong> Error de comunicación (CH05).<br><strong>Resultado:</strong> Tras la reparación, la tarjeta energiza y los LEDs de diagnóstico funcionan correctamente.",
            footer: '<span><i class="bi bi-cpu"></i> LG</span><span><i class="bi bi-check-circle"></i> Prueba Superada</span>'
        },
        {
            img: "/img/Inverter_Samsung.JPG",
            alt: "Corrosión en tarjeta electrónica",
            badge: '<span class="badge bg-warning text-dark mb-2"><i class="bi bi-tools"></i> Restauración</span>',
            title: "Restauración de Pistas por Corrosión",
            text: "<strong>Problema:</strong> Falla intermitente por humedad y corrosión.<br><strong>Solución:</strong> Limpieza química, reconstrucción de pistas y barniz protector.",
            footer: '<span><i class="bi bi-droplet-half"></i> Humedad</span><span><i class="bi bi-tools"></i> Restauración</span>'
        },
        {
            img: "/img/protector-voltaje.jpeg",
            alt: "Instalación de protector de voltaje",
            badge: '<span class="badge bg-primary mb-2"><i class="bi bi-plug"></i> Instalación</span>',
            title: "Protección contra Fluctuaciones",
            text: "<strong>Problema:</strong> Daños recurrentes por picos de voltaje.<br><strong>Solución:</strong> Instalación de protector de voltaje certificado y asesoría sobre buenas prácticas eléctricas.",
            footer: '<span><i class="bi bi-plug"></i> Instalación</span><span><i class="bi bi-shield-check"></i> Seguridad</span>'
        }
        // Puedes agregar más casos aquí y la paginación se ajustará automáticamente
    ];

    /**
     * Determina cuántas tarjetas mostrar por página según el ancho de pantalla
     * @returns {number} Número de tarjetas a mostrar
     */
    function getItemsPerPage() {
        if (window.innerWidth < 768) return 1; // móvil
        return 2; // tablet y escritorio
    }

    let currentPage = 1;

    /**
     * Genera y muestra las tarjetas de la página actual
     */
    function renderGaleria() {
        const galeriaContainer = document.getElementById('galeria-paginada');
        if (!galeriaContainer) return;
        
        const itemsPerPage = getItemsPerPage();
        galeriaContainer.innerHTML = '';
        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;
        
        // Crear tarjetas para la página actual
        galeriaItems.slice(start, end).forEach(item => {
            let cardHtml = `
                <div class="col-12 col-lg-6 d-flex align-items-stretch" data-aos="zoom-in">
                    <div class="card shadow-lg border-0 card-pequena h-100 animate__animated animate__fadeInUp">
                        ${item.img ? `<img src="${item.img}" class="card-img-top" alt="${item.alt}" style="height: 240px; object-fit: cover;">` : `
                        <div class="ratio ratio-16x9">
                            <iframe src="${item.video}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>`}
                        <div class="card-body">
                            ${item.badge}
                            <h5 class="card-title text-primary">${item.title}</h5>
                            <p class="card-text small">${item.text}</p>
                        </div>
                        <div class="card-footer text-muted small d-flex justify-content-between align-items-center">
                            ${item.footer}
                        </div>
                    </div>
                </div>
            `;
            galeriaContainer.insertAdjacentHTML('beforeend', cardHtml);
        });
        
        renderPagination();
    }

    /**
     * Genera los controles de paginación
     */
    function renderPagination() {
        const pagination = document.getElementById('galeria-pagination');
        if (!pagination) return;
        
        const itemsPerPage = getItemsPerPage();
        const totalPages = Math.ceil(galeriaItems.length / itemsPerPage);
        pagination.innerHTML = '';
        
        // Crear botones de paginación
        for (let i = 1; i <= totalPages; i++) {
            pagination.innerHTML += `
                <li class="page-item ${i === currentPage ? 'active' : ''}">
                    <button class="page-link" data-page="${i}">${i}</button>
                </li>
            `;
        }
        
        // Añadir eventos a los botones de paginación
        pagination.querySelectorAll('button.page-link').forEach(btn => {
            btn.onclick = function () {
                currentPage = parseInt(this.dataset.page);
                renderGaleria();
                window.scrollTo({ top: document.getElementById('galeria').offsetTop - 80, behavior: 'smooth' });
            };
        });
    }

    // Reiniciar la paginación al cambiar el tamaño de pantalla
    window.addEventListener('resize', function () {
        currentPage = 1;
        renderGaleria();
    });

    // Inicializar la galería
    renderGaleria();
});

// =============================================================================
// NAVEGACIÓN - RESALTADO DE SECCIÓN ACTIVA
// =============================================================================

/**
 * Resalta la sección activa en la navegación mientras el usuario hace scroll
 * - Funciona con enlaces estándar y dropdown menu
 * - Añade estilos visuales a los elementos activos
 */
function highlightActiveSection() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const dropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');
    const dropdownToggles = document.querySelectorAll('.navbar-nav .dropdown-toggle');
    
    // Añadir estilos para los elementos activos
    const activeStyle = document.createElement('style');
    activeStyle.textContent = `
        .navbar-nav .nav-link.active {
            color: #fff !important;
            font-weight: bold;
            position: relative;
        }
        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 20%;
            width: 60%;
            height: 2px;
            background-color: #0dcaf0; /* Color info de Bootstrap */
        }
        .dropdown-menu .dropdown-item.active {
            background-color: #6c757d;
            color: white;
            font-weight: bold;
        }
    `;
    document.head.appendChild(activeStyle);
    
    /**
     * Verifica qué sección está visible y actualiza los estilos de navegación
     */
    function checkScroll() {
        const scrollPosition = window.scrollY + 100; // Compensar altura del navbar
        let currentSection = null;
        // Determinar qué sección está actualmente en la vista
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionBottom = sectionTop + section.offsetHeight;
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                currentSection = section.getAttribute('id');
            }
        });

        // Limpiar todos los activos
        navLinks.forEach(link => link.classList.remove('active'));
        dropdownItems.forEach(item => item.classList.remove('active'));
        dropdownToggles.forEach(toggle => toggle.classList.remove('active'));

        // Marcar activo el enlace principal si corresponde
        navLinks.forEach(link => {
            const href = link.getAttribute('href');
            if (href && href === `#${currentSection}`) {
                link.classList.add('active');
            }
        });

        // Marcar activo el dropdown-item y su toggle correspondiente
        dropdownItems.forEach(item => {
            const href = item.getAttribute('href');
            if (href && href.startsWith('#') && href === `#${currentSection}`) {
                item.classList.add('active');
                // Buscar el toggle relacionado
                const parentDropdown = item.closest('.dropdown');
                if (parentDropdown) {
                    const toggle = parentDropdown.querySelector('.dropdown-toggle');
                    if (toggle) toggle.classList.add('active');
                }
            }
        });
    }
    
    // Escuchar eventos para actualizar la sección activa
    window.addEventListener('scroll', checkScroll);
    window.addEventListener('resize', checkScroll);
    window.addEventListener('load', checkScroll);
    
    // Verificar estado inicial
    checkScroll();
}

// Inicializar el resaltado de sección activa cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', highlightActiveSection);

// =============================================================================
// EFECTO FLIP DE TARJETAS
// =============================================================================

/**
 * Script para manejar el efecto flip de tarjetas
 */
document.addEventListener('DOMContentLoaded', function () {
    // Flip card functionality has been removed
});







