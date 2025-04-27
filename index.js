
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


