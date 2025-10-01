<?php ?>
<!-- Noticias sobre Tecnología Inverter ------------------------------------------------------------------------------------>
<section id="noticias" class="py-5 bg-light">
    <div class="container">
        <!-- Título Elegante para Noticias -->
        <div class="text-center mb-5">
            <div class="news-title-wrapper position-relative d-inline-block">
                <h2 class="news-elegant-title mb-3">
                    <span class="title-icon-wrapper">
                        <i class="bi bi-newspaper"></i>
                    </span>
                    <span class="news-title-main">Últimas Noticias</span>
                    <span class="news-title-sub">Tecnología Inverter</span>
                </h2>
                <div class="title-decorative-line"></div>
            </div>
        </div>
        <p class="text-center text-muted mb-5 fs-5 fst-italic" style="letter-spacing: 0.5px;">
            Mantente informado sobre las últimas tendencias, innovaciones y avances en tecnología inverter y electrónica aplicada a climatización.
        </p>
        <div class="row g-4">
            <!-- Noticia 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 shadow-lg rounded-4 border-0 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/La_climatisation.jpeg" class="card-img-top" alt="Avances en Tecnología Inverter" style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(13,110,253,0.07);"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-info fw-bold"><i class="bi bi-lightning-charge"></i> Nuevos Avances en Tecnología Inverter</h5>
                        <p class="card-text">Descubre cómo los últimos desarrollos en tecnología inverter están mejorando la eficiencia energética de los aires acondicionados, reduciendo el consumo hasta un 30%.</p>
                        <a href="Noticia1.html" class="btn btn-primary btn-sm px-4 fw-semibold">Leer más</a>
                    </div>
                    <div class="card-footer text-muted d-flex align-items-center gap-2">
                        <i class="bi bi-calendar-event text-info"></i>
                        15 de Junio de 2025
                    </div>
                </div>
            </div>
            <!-- Noticia 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-lg rounded-4 border-0 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/Circuit_board.jpeg" class="card-img-top" alt="Reparación de Tarjetas" style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(25,135,84,0.07);"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-success fw-bold"><i class="bi bi-cpu"></i> Mejoras en la Reparación de Tarjetas Electrónicas</h5>
                        <p class="card-text">Las nuevas técnicas de diagnóstico permiten reparar tarjetas electrónicas de aires acondicionados inverter con mayor precisión, reduciendo tiempos y costos.</p>
                        <a href="Noticia2.html" class="btn btn-primary btn-sm px-4 fw-semibold">Leer más</a>
                    </div>
                    <div class="card-footer text-muted d-flex align-items-center gap-2">
                        <i class="bi bi-calendar-event text-success"></i>
                        10 de Junio de 2025
                    </div>
                </div>
            </div>
            <!-- Noticia 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-lg rounded-4 border-0 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/Ecology_Saving_free.jpeg" class="card-img-top" alt="Sostenibilidad Inverter" style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 start-0 w-100 h-100" style="background:rgba(255,193,7,0.07);"></div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-warning fw-bold"><i class="bi bi-leaf"></i> Tecnología Inverter y Sostenibilidad</h5>
                        <p class="card-text">Los aires acondicionados inverter lideran el camino hacia un futuro más sostenible con componentes reciclables y menor impacto ambiental.</p>
                        <a href="https://www.panasonic.com/pa/corporate/news/articles/panasonic-presenta-los-aires-acondicionados-con-gas-refrigerante-r32-una-opcion-mas-ecologica-y-segura-para-el-medio-ambiente.html" class="btn btn-primary btn-sm px-4 fw-semibold">Leer más</a>
                    </div>
                    <div class="card-footer text-muted d-flex align-items-center gap-2">
                        <i class="bi bi-calendar-event text-warning"></i>
                        26 de febrero de 2025
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===================================================================================== */
/* TÍTULO ELEGANTE PARA NOTICIAS */
/* ===================================================================================== */
.news-title-wrapper {
  padding: 1.5rem 0;
  max-width: 500px;
}

.news-elegant-title {
  font-size: clamp(2rem, 5vw, 3rem);
  margin: 0;
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.3rem;
}

.title-icon-wrapper {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
  border-radius: 50%;
  color: white;
  font-size: 1.8rem;
  margin-bottom: 0.8rem;
  box-shadow: 0 8px 25px rgba(0,123,255,0.3);
  position: relative;
  overflow: hidden;
  transition: all 0.4s ease;
}

.title-icon-wrapper::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.2) 50%, transparent 70%);
  transform: rotate(-45deg);
  animation: iconShine 3s ease-in-out infinite;
}

.news-title-main {
  font-weight: 800;
  color: #007bff;
  display: block;
  letter-spacing: 1.5px;
  text-shadow: 0 3px 6px rgba(0,123,255,0.15);
  line-height: 1.1;
  margin-bottom: 0.1rem;
  position: relative;
}

.news-title-sub {
  font-weight: 400;
  color: #6c757d;
  display: block;
  font-size: 0.75em;
  font-style: italic;
  opacity: 0.9;
  letter-spacing: 0.5px;
}

.title-decorative-line {
  position: absolute;
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 3px;
  background: linear-gradient(90deg, transparent 0%, #007bff 20%, #17a2b8 50%, #007bff 80%, transparent 100%);
  border-radius: 2px;
  animation: newsLineGlow 2.5s ease-in-out infinite alternate;
}

.title-decorative-line::after {
  content: '';
  position: absolute;
  top: 8px;
  left: 50%;
  transform: translateX(-50%);
  width: 40px;
  height: 1px;
  background: linear-gradient(90deg, transparent 0%, #17a2b8 50%, transparent 100%);
  opacity: 0.6;
}

/* Efectos hover elegantes */
.news-title-wrapper:hover .title-icon-wrapper {
  transform: translateY(-3px) scale(1.05);
  box-shadow: 0 12px 35px rgba(0,123,255,0.4);
  background: linear-gradient(135deg, #0056b3 0%, #007bff 100%);
}

.news-title-wrapper:hover .news-title-main {
  color: #0056b3;
  text-shadow: 0 4px 8px rgba(0,123,255,0.2);
  transform: translateY(-1px);
  transition: all 0.3s ease;
}

.news-title-wrapper:hover .title-decorative-line {
  width: 100px;
  background: linear-gradient(90deg, transparent 0%, #0056b3 15%, #007bff 35%, #17a2b8 50%, #007bff 65%, #0056b3 85%, transparent 100%);
  transition: all 0.4s ease;
}

/* Animaciones suaves */
@keyframes iconShine {
  0% {
    transform: translateX(-100%) translateY(-100%) rotate(-45deg);
  }
  50% {
    transform: translateX(0%) translateY(0%) rotate(-45deg);
  }
  100% {
    transform: translateX(100%) translateY(100%) rotate(-45deg);
  }
}

@keyframes newsLineGlow {
  0% {
    opacity: 0.7;
    transform: translateX(-50%) scaleX(1);
  }
  100% {
    opacity: 1;
    transform: translateX(-50%) scaleX(1.1);
  }
}

/* Responsive para título de noticias */
@media (max-width: 768px) {
  .news-title-wrapper {
    padding: 1rem 0;
  }
  
  .title-icon-wrapper {
    width: 50px;
    height: 50px;
    font-size: 1.5rem;
    margin-bottom: 0.6rem;
  }
  
  .title-decorative-line {
    width: 60px;
  }
  
  .news-title-wrapper:hover .title-decorative-line {
    width: 80px;
  }
}
</style>