document.querySelector('form').addEventListener('submit', function (event) {
    const nombre = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const mensaje = document.getElementById('mensaje').value;

    if (!nombre || !email || !mensaje) {
        alert('Todos los campos son obligatorios.');
        event.preventDefault(); // Evita que el formulario se envíe
    }

    else {
        // Mostrar el toast de éxito
        const successToast = new bootstrap.Toast(document.getElementById('successToast'), {
        autohide: true, // Oculta automáticamente el toast
        delay: 3000 // Duración en milisegundos (3 segundos)
    });
        successToast.show();
    }
});


document.querySelector('a[href="#contacto"]').addEventListener('click', function (e) {
    // Opcional: prevenir comportamiento predeterminado para controlar el scroll manualmente
    e.preventDefault();

    const form = document.querySelector('#contacto form');

    // Scroll suave hacia el formulario
    form.scrollIntoView({ behavior: 'smooth' });

    // Reinicia animación
    form.classList.remove('fadeInContacto');
    void form.offsetWidth;
    form.classList.add('fadeInContacto');
});


document.addEventListener('DOMContentLoaded', function () {
    // --- Carrusel de servicios ---
    const carousel = document.getElementById('servicios-carousel');
    const btnLeft = document.getElementById('btn-left');
    const btnRight = document.getElementById('btn-right');
    const card = carousel.querySelector('.col-md-4, .col-md-4.flex-shrink-0, .col-md-4.text-center');
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
});

    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    popoverTriggerList.forEach(popoverTriggerEl => {
    new bootstrap.Popover(popoverTriggerEl)
  })

