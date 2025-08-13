document.oncontextmenu = e => {
    alert('Clic derecho deshabilitado en esta página.');
    return false;
};

// --- FORMULARIO DE CONTACTO ---
const contactForm = document.getElementById('contactForm') || document.querySelector('form');
if (contactForm) {
    contactForm.addEventListener('submit', function (event) {
        const nombre = document.getElementById('nombre').value.trim();
        const email = document.getElementById('email').value.trim();
        const mensaje = document.getElementById('mensaje').value.trim();

        if (!nombre || !email || !mensaje) {
            alert('Todos los campos son obligatorios.');
            event.preventDefault();
            return;
        }

        // Mostrar el toast de éxito 
        const successToastEl = document.getElementById('successToast');
        if (successToastEl) {
            const successToast = new bootstrap.Toast(successToastEl, {
                autohide: true,
                delay: 3000
            });
            successToast.show();
        }

        // Limpiar el formulario después de enviar (espera breve para no interferir con el envío)
        setTimeout(() => contactForm.reset(), 100);
    });
}

// --- SCROLL SUAVE AL FORMULARIO DE CONTACTO ---
const contactoLink = document.querySelector('a[href="#contacto"]');
if (contactoLink) {
    contactoLink.addEventListener('click', function (e) {
        e.preventDefault();
        const form = document.querySelector('#contacto form');
        if (form) {
            form.scrollIntoView({ behavior: 'smooth' });
            form.classList.remove('fadeInContacto');
            void form.offsetWidth;
            form.classList.add('fadeInContacto');
        }
    });
}


document.addEventListener('DOMContentLoaded', function () {
    // --- Carrusel de servicios ---
    const carousel = document.getElementById('servicios-carousel');
    const btnLeft = document.getElementById('btn-left');
    const btnRight = document.getElementById('btn-right');
    const serviceCards = document.querySelectorAll('.service-card');
    
    // Número de tarjetas a mostrar según el ancho de pantalla
    function getVisibleCards() {
        if (window.innerWidth < 576) return 1;
        if (window.innerWidth < 992) return 2;
        return 3;
    }
    
    // Calcular el ancho de desplazamiento
    function calculateScrollWidth() {
        const visibleCards = getVisibleCards();
        return carousel.scrollWidth / (serviceCards.length / visibleCards);
    }
    
    // Configurar los botones de navegación
    btnLeft.addEventListener('click', function() {
        carousel.scrollBy({left: -calculateScrollWidth(), behavior: 'smooth'});
    });
    
    btnRight.addEventListener('click', function() {
        carousel.scrollBy({left: calculateScrollWidth(), behavior: 'smooth'});
    });
    
    // Crear paginación
    const paginationContainer = document.querySelector('.service-pagination');
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
    
    // Sistema de filtrado
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
    
    // Efecto hover en las tarjetas
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
    
    // Actualizar paginación al cambiar tamaño de ventana
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
    
    window.addEventListener('resize', updatePagination);
});

document.addEventListener('DOMContentLoaded', function () {
    // --- Rotación de imágenes en la sección "Nosotros" con efecto elegante (fade + slide) ---
    const imagenes = [
        'img/fachada.RSE.jpg',
        'img/taller1.JPG',
        'img/logo1.png',
        // Agrega más rutas si lo deseas
    ];
    let idx = 0;
    const imgElement = document.getElementById('nosotros-img');
    if (imgElement) {
        imgElement.style.transition = 'opacity 0.7s, transform 0.7s';
        setInterval(() => {
            // Efecto: desvanecer y deslizar a la izquierda
            imgElement.style.opacity = 0;
            imgElement.style.transform = 'translateX(-30px) scale(0.98)';
            setTimeout(() => {
                idx = (idx + 1) % imagenes.length;
                imgElement.src = imagenes[idx];
                imgElement.onload = () => {
                    // Efecto: aparecer y deslizar desde la derecha
                    imgElement.style.transform = 'translateX(80px) scale(0.58)';
                    setTimeout(() => {
                        imgElement.style.opacity = 1;
                        imgElement.style.transform = 'translateX(0) scale(1)';
                    }, 50);
                };
            }, 700);
        }, 5000);
    }

    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    popoverTriggerList.forEach(popoverTriggerEl => {
        new bootstrap.Popover(popoverTriggerEl);
    });

    // --- Galería paginada de trabajos realizados ---
    // --- Galería de trabajos realizados con paginación ---
    // Este bloque muestra los casos de éxito en la sección "galeria".
    // La paginación es automática: muestra 2 tarjetas por página en escritorio/tablet y 1 en móvil.
    // Puedes agregar más casos al array galeriaItems y la paginación se ajusta sola.

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
        // Puedes agregar más objetos aquí
    ];

    // getItemsPerPage: determina cuántas tarjetas mostrar por página según el ancho de pantalla.
    function getItemsPerPage() {
        if (window.innerWidth < 768) return 1; // móvil
        return 2; // tablet y escritorio
    }

    let currentPage = 1;

    // renderGaleria: muestra las tarjetas de la página actual en el contenedor 'galeria-paginada'.
    function renderGaleria() {
        const itemsPerPage = getItemsPerPage();
        const galeriaContainer = document.getElementById('galeria-paginada');
        if (!galeriaContainer) return;
        galeriaContainer.innerHTML = '';
        const start = (currentPage - 1) * itemsPerPage;
        const end = start + itemsPerPage;
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

    // renderPagination: genera los botones de paginación y gestiona el cambio de página.
    function renderPagination() {
        const itemsPerPage = getItemsPerPage();
        const totalPages = Math.ceil(galeriaItems.length / itemsPerPage);
        const pagination = document.getElementById('galeria-pagination');
        if (!pagination) return;
        pagination.innerHTML = '';
        for (let i = 1; i <= totalPages; i++) {
            pagination.innerHTML += `
                <li class="page-item ${i === currentPage ? 'active' : ''}">
                    <button class="page-link" data-page="${i}">${i}</button>
                </li>
            `;
        }
        // Eventos de paginación: al hacer clic en un botón, cambia la página y vuelve a renderizar.
        pagination.querySelectorAll('button.page-link').forEach(btn => {
            btn.onclick = function () {
                currentPage = parseInt(this.dataset.page);
                renderGaleria();
                window.scrollTo({ top: document.getElementById('galeria').offsetTop - 80, behavior: 'smooth' });
            };
        });
    }

    // Re-render al cambiar tamaño de pantalla
    window.addEventListener('resize', function () {
        currentPage = 1;
        renderGaleria();
    });

    // Inicializa la galería paginada al cargar la página.
    renderGaleria();
});

// Detecta la sección visible y aplica la clase active al enlace correspondiente
function highlightActiveSection() {
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const dropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');
    
    // Agregar una clase .active-link para mejor visibilidad
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
    
    function checkScroll() {
        const scrollPosition = window.scrollY + 100; // +100 para compensar la altura del navbar
        
        // Encontrar la sección visible
        let currentSection = null;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionBottom = sectionTop + section.offsetHeight;
            
            if (scrollPosition >= sectionTop && scrollPosition < sectionBottom) {
                currentSection = section.getAttribute('id');
            }
        });
        
        // Actualizar clases active en enlaces principales
        navLinks.forEach(link => {
            link.classList.remove('active');
            const href = link.getAttribute('href');
            if (href && href === `#${currentSection}`) {
                link.classList.add('active');
            }
        });
        
        // Actualizar clases active en dropdown items
        dropdownItems.forEach(item => {
            item.classList.remove('active');
            const href = item.getAttribute('href');
            if (href && href.startsWith('#') && href === `#${currentSection}`) {
                item.classList.add('active');
                // También activar el botón dropdown cuando un elemento del menú está activo
                const dropdownToggle = document.querySelector('.dropdown-toggle');
                if (dropdownToggle) {
                    dropdownToggle.classList.add('active');
                }
            }
        });
    }
    
    // Verificar sección activa al cargar y al hacer scroll
    window.addEventListener('scroll', checkScroll);
    window.addEventListener('resize', checkScroll);
    
    // Comprobar estado inicial después de cargar completamente
    window.addEventListener('load', checkScroll);
    checkScroll();
}

// Ejecutar cuando el DOM esté cargado
document.addEventListener('DOMContentLoaded', highlightActiveSection);






