<?php ?>
<!-- Carrusel de Tarjetas Electrónicas con Errores Comunes -->
<section id="tarjetas-carrusel" class="py-5" style="background: linear-gradient(135deg, #e8f2ff 0%, #dbeafe 100%);">
  <div class="container">
    <!-- Título Elegante -->
    <div class="text-center mb-4">
      <h2 class="carousel-title position-relative d-inline-block"> 
        <span class="carousel-title-main">Errores Comunes</span>
        <span class="carousel-title-accent">en Tarjetas Electrónicas</span>
      </h2>
    </div>
    <div id="carouselTarjetas" class="carousel slide shadow-lg rounded-4 overflow-hidden" data-bs-ride="carousel" data-bs-interval="6000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselTarjetas" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Tarjeta 1"></button>
        <button type="button" data-bs-target="#carouselTarjetas" data-bs-slide-to="1" aria-label="Tarjeta 2"></button>
        <button type="button" data-bs-target="#carouselTarjetas" data-bs-slide-to="2" aria-label="Tarjeta 3"></button>
      </div>
      <div class="carousel-inner">

        <!-- Tarjeta 1 -->
        <div class="carousel-item active">
          <div class="row align-items-center g-4">
            <div class="col-lg-6 text-center">
              <img src="img/tarjeta-LG-cond.avif" class="img-fluid rounded-3 border border-3 border-primary animate__animated animate__fadeInLeft" alt="Tarjeta Inverter LG" style="max-height:260px; object-fit:contain;">
            </div>
            <div class="col-lg-6">
              <div class="bg-white rounded-4 shadow p-4 h-100 animate__animated animate__fadeInRight">
                <h4 class="fw-bold text-primary mb-3"><i class="bi bi-cpu me-2"></i>Tarjeta Inverter LG</h4>
                <ul class="list-group list-group-flush mb-3">
                  <li class="list-group-item bg-transparent"><span class="fw-semibold text-danger"><i class="bi bi-exclamation-triangle-fill me-1"></i>Errores comunes:</span> CH05: Error de comunicación, CH10: Error del fan de la consola, CH21: Error de IPM.</li>
                  <li class="list-group-item bg-transparent"><span class="fw-semibold text-success"><i class="bi bi-fan me-1"></i>Marcas:</span> LG.</li>
                </ul>
                <p class="text-muted fst-italic mb-0">Estas tarjetas suelen fallar por humedad y picos de voltaje.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tarjeta 2 -->
        <div class="carousel-item">
          <div class="row align-items-center g-4">
            <div class="col-lg-6 text-center">
              <img src="img/generica-moderna.jpg" class="img-fluid rounded-3 border border-3 border-success animate__animated animate__fadeInLeft" alt="Tarjeta Midea" style="max-height:260px; object-fit:contain;">
            </div>
            <div class="col-lg-6">
              <div class="bg-white rounded-4 shadow p-4 h-100 animate__animated animate__fadeInRight">
                <h4 class="fw-bold text-success mb-3"><i class="bi bi-cpu me-2"></i>Tarjeta inverter Midea (genérica moderna)</h4>
                <ul class="list-group list-group-flush mb-3">
                  <li class="list-group-item bg-transparent"><span class="fw-semibold text-danger"><i class="bi bi-exclamation-triangle-fill me-1"></i>Errores comunes:</span> E1: Error de comunicación, P0: Error de IPM, E5: Error del fan del condensador.</li>
                  <li class="list-group-item bg-transparent"><span class="fw-semibold text-success"><i class="bi bi-fan me-1"></i>Marcas:</span> Midea, Carrier, TGM.</li>
                </ul>
                <p class="text-muted fst-italic mb-0">Frecuente daño en el PFC, IPM y fuente de alimentación.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tarjeta 3 -->
        <div class="carousel-item">
          <div class="row align-items-center g-4">
            <div class="col-lg-6 text-center">
              <img src="img/tarjeta-royal-cond.webp" class="img-fluid rounded-3 border border-3 border-info animate__animated animate__fadeInLeft" alt="Tarjeta Royal" style="max-height:260px; object-fit:contain;">
            </div>
            <div class="col-lg-6">
              <div class="bg-white rounded-4 shadow p-4 h-100 animate__animated animate__fadeInRight">
                <h4 class="fw-bold text-info mb-3"><i class="bi bi-cpu me-2"></i>Tarjeta inverter Royal</h4>
                <ul class="list-group list-group-flush mb-3">
                  <li class="list-group-item bg-transparent"><span class="fw-semibold text-danger"><i class="bi bi-exclamation-triangle-fill me-1"></i>Errores comunes:</span> E101, E202, error de IPM, fallo de ventilador.</li>
                  <li class="list-group-item bg-transparent"><span class="fw-semibold text-success"><i class="bi bi-fan me-1"></i>Marcas:</span> Royal, TCL, American, PG entre otros.</li>
                </ul>
                <p class="text-muted fst-italic mb-0">Frecuente daño en el PFC, fuente de alimentación y circuito de comunicación.</p>
              </div>
            </div>
          </div>
        </div>

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

<style>
/* ===================================================================================== */
/* TÍTULO ESPECÍFICO DEL CARRUSEL DE TARJETAS */
/* ===================================================================================== */
.carousel-title {
  font-size: clamp(2rem, 4vw, 3rem);
  font-weight: 800;
  letter-spacing: 0.5px;
  line-height: 1.2;
  margin: 0;
  padding: 1rem 0;
}

.carousel-title::before {
  content: '';
  position: absolute;
  top: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 70px;
  height: 4px;
  background: linear-gradient(90deg, transparent 0%, #001a3d 20%, #003d82 40%, #007bff 60%, #17a2b8 80%, transparent 100%);
  border-radius: 3px;
  animation: carouselTitleGlow 3s ease-in-out infinite alternate;
  box-shadow: 
    0 2px 4px rgba(0,61,130,0.4),
    0 0 10px rgba(0,123,255,0.3);
}

.carousel-title::after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  width: 90px;
  height: 3px;
  background: linear-gradient(90deg, transparent 0%, #17a2b8 20%, #007bff 50%, #003d82 80%, transparent 100%);
  border-radius: 2px;
  opacity: 0.9;
  box-shadow: 
    0 2px 3px rgba(23,162,184,0.3),
    0 0 8px rgba(0,123,255,0.2);
}

.carousel-title-main {
  color: #001a3d;
  display: block;
  font-weight: 900;
  text-shadow: 
    0 3px 6px rgba(0,26,61,0.3),
    0 1px 0 rgba(255,255,255,0.9),
    0 5px 10px rgba(0,61,130,0.2),
    0 0 15px rgba(0,123,255,0.1);
  margin-bottom: 0.3rem;
  position: relative;
  letter-spacing: 1px;
}

.carousel-title-accent {
  color: #1a252f;
  display: block;
  font-weight: 600;
  font-size: 0.8em;
  font-style: italic;
  opacity: 1;
  text-shadow: 
    0 2px 4px rgba(26,37,47,0.2),
    0 1px 0 rgba(255,255,255,0.7);
  letter-spacing: 0.5px;
}

/* Efectos hover específicos */
.carousel-title:hover .carousel-title-main {
  color: #000d1a;
  transform: translateY(-2px);
  text-shadow: 
    0 5px 12px rgba(0,13,26,0.3),
    0 2px 0 rgba(255,255,255,1),
    0 8px 15px rgba(0,61,130,0.25),
    0 0 20px rgba(0,123,255,0.15);
  transition: all 0.4s ease;
}

.carousel-title:hover .carousel-title-accent {
  color: #0f1419;
  transform: translateY(-1px);
  text-shadow: 
    0 3px 6px rgba(15,20,25,0.25),
    0 1px 0 rgba(255,255,255,0.8);
  transition: all 0.4s ease;
}

.carousel-title:hover::before {
  width: 90px;
  height: 5px;
  background: linear-gradient(90deg, transparent 0%, #000d1a 15%, #001a3d 30%, #003d82 50%, #007bff 70%, #17a2b8 85%, transparent 100%);
  box-shadow: 
    0 3px 6px rgba(0,61,130,0.5),
    0 0 15px rgba(0,123,255,0.4);
  transition: all 0.5s ease;
}

.carousel-title:hover::after {
  width: 110px;
  height: 4px;
  opacity: 1;
  box-shadow: 
    0 3px 5px rgba(23,162,184,0.4),
    0 0 12px rgba(0,123,255,0.3);
  transition: all 0.5s ease;
}

/* Animación específica */
@keyframes carouselTitleGlow {
  0% {
    opacity: 0.7;
    transform: translateX(-50%) scaleX(1);
  }
  100% {
    opacity: 1;
    transform: translateX(-50%) scaleX(1.1);
  }
}

/* Responsive para título del carrusel */
@media (max-width: 768px) {
  .carousel-title {
    font-size: clamp(1.5rem, 5vw, 2.5rem);
    padding: 0.8rem 0;
  }
  
  .carousel-title::before {
    width: 50px;
    height: 3px;
  }
  
  .carousel-title::after {
    width: 60px;
    height: 2px;
  }
  
  .carousel-title:hover::before {
    width: 60px;
  }
  
  .carousel-title:hover::after {
    width: 70px;
  }
}

/* ===================================================================================== */
/* ESTILOS ORIGINALES DEL CARRUSEL */
/* ===================================================================================== */
/* Estilos para los botones del carrusel */
#pauseCarousel, #playCarousel {
  transition: all 0.3s ease;
  border-width: 2px;
  font-weight: 500;
}

/* Hover effects */
#pauseCarousel:hover {
  background-color: #6c757d;
  border-color: #6c757d;
  color: white;
  transform: translateY(-1px);
  box-shadow: 0 4px 8px rgba(108, 117, 125, 0.3);
}

#playCarousel:hover {
  background-color: #198754;
  border-color: #198754;
  color: white;
  transform: translateY(-1px);
  box-shadow: 0 4px 8px rgba(25, 135, 84, 0.3);
}

/* Active/Focus states */
#pauseCarousel:active,
#pauseCarousel:focus {
  background-color: #5c636a !important;
  border-color: #5c636a !important;
  color: white !important;
  box-shadow: 0 0 0 0.25rem rgba(108, 117, 125, 0.25) !important;
}

#playCarousel:active,
#playCarousel:focus {
  background-color: #146c43 !important;
  border-color: #146c43 !important;
  color: white !important;
  box-shadow: 0 0 0 0.25rem rgba(25, 135, 84, 0.25) !important;
}

/* Estado cuando el botón está "presionado" */
#pauseCarousel.pressed {
  background-color: #6c757d;
  border-color: #6c757d;
  color: white;
  box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);
}

#playCarousel.pressed {
  background-color: #198754;
  border-color: #198754;
  color: white;
  box-shadow: inset 0 3px 5px rgba(0,0,0,0.125);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  #pauseCarousel, #playCarousel {
    padding: 0.5rem 1rem;
    font-size: 0.9rem;
  }
}
</style>