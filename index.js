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
    const carousel = document.getElementById('servicios-carousel');
    const btnLeft = document.getElementById('btn-left');
    const btnRight = document.getElementById('btn-right');

    // Ancho de desplazamiento (igual al ancho de una tarjeta)
    const scrollAmount = carousel.querySelector('.col-md-4').offsetWidth;

    // Botón Izquierdo
    btnLeft.addEventListener('click', () => {
        carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
    });

    // Botón Derecho
    btnRight.addEventListener('click', () => {
        carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
    });
});

// Rotación de imágenes en la sección "Nosotros" con efecto desvaneciente 
document.addEventListener('DOMContentLoaded', function () {
    const imagenes = [
        'img/fachada.RSE.jpg',
        'img/taller1.JPG',
        // Agregar aquí más rutas de imágenes si es necesario
    ];
    let idx = 0;
    const imgElement = document.getElementById('nosotros-img');


    imgElement.style.transition = 'opacity 0.7s';

    setInterval(() => {
        // Desvanece la imagen
        imgElement.style.opacity = 0;
        setTimeout(() => {
            idx = (idx + 1) % imagenes.length;
            imgElement.src = imagenes[idx];
            // Cuando la imagen nueva esté cargada, vuelve a aparecer
            imgElement.onload = () => {
                imgElement.style.opacity = 1;
            };
        }, 700); // Tiempo igual a la transición
    }, 3000);
});