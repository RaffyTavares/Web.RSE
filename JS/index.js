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
    const card = carousel.querySelector('.col-12.col-sm-6.col-lg-4');
    const scrollAmount = card ? card.offsetWidth : 320;

    // Botón Izquierdo
    btnLeft.addEventListener('click', () => {
        carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    // Botón Derecho
    btnRight.addEventListener('click', () => {
        carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });

    // --- Soporte para arrastrar con el mouse ---
    let isDown = false;
    let startX;
    let scrollLeft;

    carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        carousel.classList.add('dragging');
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
        e.preventDefault();
    });

    carousel.addEventListener('mouseleave', () => {
        isDown = false;
        carousel.classList.remove('dragging');
    });

    carousel.addEventListener('mouseup', () => {
        isDown = false;
        carousel.classList.remove('dragging');
    });

    carousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 1.2; // Sensibilidad
        carousel.scrollLeft = scrollLeft - walk;
    });

    // --- Soporte para pantallas táctiles ---
    let touchStartX = 0;
    let touchScrollLeft = 0;

    carousel.addEventListener('touchstart', (e) => {
        touchStartX = e.touches[0].pageX;
        touchScrollLeft = carousel.scrollLeft;
    });

    carousel.addEventListener('touchmove', (e) => {
        const x = e.touches[0].pageX;
        const walk = (x - touchStartX) * 1.2;
        carousel.scrollLeft = touchScrollLeft - walk;
    });

     // --- Soporte para scroll horizontal con la rueda del mouse ---
    carousel.addEventListener('wheel', (e) => {
    // Solo mover si el scroll es horizontal (deltaX)
    if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) {
        e.preventDefault();
        const direction = e.deltaX > 0 ? 1 : -1;
        carousel.scrollBy({
            left: scrollAmount * direction * 8, // Multiplicador para mayor velocidad
            behavior: 'smooth'
        });
        }
    });

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






