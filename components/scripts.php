<?php ?>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="JS/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 900,
    once: false
  });
</script>

<!--script boton popover-->
<script>
    document.addEventListener('DOMContentLoaded', function () {
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(triggerEl => new bootstrap.Popover(triggerEl));
    });

    // pausar y reanudar Carrusel de Tarjetas Electrónicas con Errores Comunes  
    document.addEventListener('DOMContentLoaded', function () {
    var pauseBtn = document.getElementById('pauseCarousel');
    var playBtn = document.getElementById('playCarousel');
    var carouselEl = document.getElementById('carouselTarjetas');
        if (pauseBtn && playBtn && carouselEl) {
            var carousel = bootstrap.Carousel.getOrCreateInstance(carouselEl);
            pauseBtn.onclick = function() {
            carousel.pause();
        };
            playBtn.onclick = function() {
                carousel.cycle();
            };
        }
    });
</script>

<script>
    // Animación al abrir el modal Sobre Mí -->
document.addEventListener('DOMContentLoaded', function () {
    var modalSobreMi = document.getElementById('modalSobreMi');
    if (modalSobreMi) {
        modalSobreMi.addEventListener('shown.bs.modal', function () {
            var img = modalSobreMi.querySelector('img[alt="Rafael Tavares"]');
            if (img) {
                img.classList.remove('animate__animated', 'animate__fadeInDown');
                void img.offsetWidth; // Reflow para reiniciar animación
                img.classList.add('animate__animated', 'animate__fadeInDown');
            }
        });
    }
});
</script>

<!-- Código JavaScript para filtrado de consejos -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Filtrado de tarjetas de consejos
    const filterBtns = document.querySelectorAll('.tip-filter');
    const tipCards = document.querySelectorAll('.tip-card');
    
    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            // Quitar active de todos los botones
            filterBtns.forEach(b => b.classList.remove('active'));
            // Añadir active al botón clickeado
            this.classList.add('active');
            
            const filter = this.getAttribute('data-filter');
            
            // Mostrar u ocultar tarjetas según el filtro
            tipCards.forEach(card => {
                if (filter === 'all' || card.classList.contains(filter)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
    
    // Efecto hover para las tarjetas
    tipCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            const img = this.querySelector('.card-img-top');
            if (img) {
                img.style.transform = 'scale(1.05)';
                img.style.transition = 'transform 0.5s ease';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            const img = this.querySelector('.card-img-top');
            if (img) {
                img.style.transform = 'scale(1)';
            }
        });
    });
});
</script>