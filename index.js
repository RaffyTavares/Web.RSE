
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