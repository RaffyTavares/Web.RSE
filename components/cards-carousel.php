<?php ?>
<!-- Carrusel de Tarjetas Electrónicas con Errores Comunes -->
<section id="tarjetas-carrusel" class="py-5" style="background: linear-gradient(135deg, #181b20 0%, #c5d4f1 100%);">
  <div class="container">
    <h2 class="text-center mb-3 text-white fw-bold fs-2"> Errores Comunes en Tarjetas Electrónicas</h2>
    <div id="carouselTarjetas" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel" data-bs-interval="6000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselTarjetas" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Tarjeta 1"></button>
        <button type="button" data-bs-target="#carouselTarjetas" data-bs-slide-to="1" aria-label="Tarjeta 2"></button>
        <button type="button" data-bs-target="#carouselTarjetas" data-bs-slide-to="2" aria-label="Tarjeta 3"></button>
      </div>
      <div class="carousel-inner">
        <!-- Tarjeta 1-3 -->
        <!-- Contenido del carrusel -->
      </div>
      <!-- Controles del carrusel -->
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselTarjetas" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bg-primary rounded-circle shadow" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselTarjetas" data-bs-slide="next">
        <span class="carousel-control-next-icon bg-primary rounded-circle shadow" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
    <div class="text-center mt-3">
      <button id="pauseCarousel" class="btn btn-outline-secondary btn-sm"><i class="bi bi-pause-circle"></i> Pausar</button>
      <button id="playCarousel" class="btn btn-outline-success btn-sm"><i class="bi bi-play-circle"></i> Reanudar</button>
    </div>
  </div>
</section>