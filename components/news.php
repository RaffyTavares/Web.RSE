<?php ?>
<!-- Noticias sobre Tecnología Inverter ------------------------------------------------------------------------------------>
<section id="noticias" class="py-5 position-relative" style="background: linear-gradient(135deg, #1a1d23 0%, #2d3748 50%, #1a202c 100%); overflow: hidden;">
    
    <!-- Fondo tecnológico moderno -->
    <div class="news-tech-background"></div>
    <div class="news-grid-overlay"></div>
    <div class="news-floating-particles"></div>
    
    <div class="container position-relative" style="z-index: 10;">
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
        <p class="text-center mb-5 fs-5 fst-italic" style="letter-spacing: 0.5px; color: #e2e8f0; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">
            Mantente informado sobre las últimas tendencias, innovaciones y avances en tecnología inverter y electrónica aplicada a climatización.
        </p>
        <div class="row g-4">
            <!-- Noticia 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="modern-news-card h-100 rounded-4 border-0 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/La_climatisation.jpeg" class="card-img-top news-card-img" alt="Avances en Tecnología Inverter" style="height: 200px; object-fit: cover;">
                        <div class="news-card-overlay"></div>
                        <div class="news-card-glow"></div>
                    </div>
                    <div class="modern-card-body">
                        <h5 class="modern-card-title">
                            <i class="bi bi-lightning-charge me-2"></i>
                            Nuevos Avances en Tecnología Inverter
                        </h5>
                        <p class="modern-card-text">Descubre cómo los últimos desarrollos en tecnología inverter están mejorando la eficiencia energética de los aires acondicionados, reduciendo el consumo hasta un 30%.</p>
                        <a href="Noticia1.html" class="modern-news-btn">
                            <span class="btn-content">Leer más</span>
                            <div class="btn-glow-effect"></div>
                        </a>
                    </div>
                    <div class="modern-card-footer">
                        <i class="bi bi-calendar-event me-2"></i>
                        15 de Junio de 2025
                    </div>
                </div>
            </div>
            <!-- Noticia 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="modern-news-card h-100 rounded-4 border-0 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/Circuit_board.jpeg" class="card-img-top news-card-img" alt="Reparación de Tarjetas" style="height: 200px; object-fit: cover;">
                        <div class="news-card-overlay"></div>
                        <div class="news-card-glow"></div>
                    </div>
                    <div class="modern-card-body">
                        <h5 class="modern-card-title">
                            <i class="bi bi-cpu me-2"></i>
                            Mejoras en la Reparación de Tarjetas Electrónicas
                        </h5>
                        <p class="modern-card-text">Las nuevas técnicas de diagnóstico permiten reparar tarjetas electrónicas de aires acondicionados inverter con mayor precisión, reduciendo tiempos y costos.</p>
                        <a href="Noticia2.html" class="modern-news-btn">
                            <span class="btn-content">Leer más</span>
                            <div class="btn-glow-effect"></div>
                        </a>
                    </div>
                    <div class="modern-card-footer">
                        <i class="bi bi-calendar-event me-2"></i>
                        10 de Junio de 2025
                    </div>
                </div>
            </div>
            <!-- Noticia 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="modern-news-card h-100 rounded-4 border-0 overflow-hidden">
                    <div class="position-relative">
                        <img src="img/Ecology_Saving_free.jpeg" class="card-img-top news-card-img" alt="Sostenibilidad Inverter" style="height: 200px; object-fit: cover;">
                        <div class="news-card-overlay"></div>
                        <div class="news-card-glow"></div>
                    </div>
                    <div class="modern-card-body">
                        <h5 class="modern-card-title">
                            <i class="bi bi-leaf me-2"></i>
                            Tecnología Inverter y Sostenibilidad
                        </h5>
                        <p class="modern-card-text">Los aires acondicionados inverter lideran el camino hacia un futuro más sostenible con componentes reciclables y menor impacto ambiental.</p>
                        <a href="https://www.panasonic.com/pa/corporate/news/articles/panasonic-presenta-los-aires-acondicionados-con-gas-refrigerante-r32-una-opcion-mas-ecologica-y-segura-para-el-medio-ambiente.html" class="modern-news-btn">
                            <span class="btn-content">Leer más</span>
                            <div class="btn-glow-effect"></div>
                        </a>
                    </div>
                    <div class="modern-card-footer">
                        <i class="bi bi-calendar-event me-2"></i>
                        26 de febrero de 2025
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===================================================================================== */
/* FONDO TECNOLÓGICO MODERNO PARA NOTICIAS */
/* ===================================================================================== */

/* Fondo tecnológico principal */
.news-tech-background {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 1;
    opacity: 0.6;
    background-image: 
        linear-gradient(rgba(0, 212, 255, 0.1) 1px, transparent 1px),
        linear-gradient(90deg, rgba(0, 212, 255, 0.1) 1px, transparent 1px),
        linear-gradient(rgba(23, 162, 184, 0.06) 1px, transparent 1px),
        linear-gradient(90deg, rgba(23, 162, 184, 0.06) 1px, transparent 1px);
    background-size: 
        60px 60px,
        60px 60px,
        15px 15px,
        15px 15px;
    animation: newsGridFloat 28s ease-in-out infinite;
}

.news-grid-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 2;
    opacity: 0.3;
    background-image: 
        radial-gradient(circle at 20% 20%, rgba(0, 212, 255, 0.12) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(23, 162, 184, 0.1) 0%, transparent 50%),
        radial-gradient(circle at 50% 10%, rgba(111, 66, 193, 0.08) 0%, transparent 50%),
        radial-gradient(circle at 10% 90%, rgba(0, 220, 130, 0.06) 0%, transparent 50%);
    background-size: 
        350px 350px,
        300px 300px,
        200px 200px,
        250px 250px;
    background-position: 
        0 0,
        100% 100%,
        50% 0%,
        0% 100%;
    animation: newsOverlayShift 32s ease-in-out infinite;
}

.news-floating-particles {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    pointer-events: none;
}

.news-floating-particles::before,
.news-floating-particles::after {
    content: '';
    position: absolute;
    width: 4px;
    height: 4px;
    background: rgba(0, 212, 255, 0.6);
    border-radius: 50%;
    animation: newsFloatTech 16s linear infinite;
}

.news-floating-particles::before {
    top: 20%;
    left: 15%;
    box-shadow: 
        200px 80px 0 rgba(0, 212, 255, 0.4),
        400px 200px 0 rgba(23, 162, 184, 0.5),
        600px 120px 0 rgba(111, 66, 193, 0.3),
        300px 350px 0 rgba(0, 220, 130, 0.4),
        700px 300px 0 rgba(0, 212, 255, 0.3);
}

.news-floating-particles::after {
    top: 70%;
    left: 80%;
    animation-delay: -8s;
    box-shadow: 
        -180px -60px 0 rgba(23, 162, 184, 0.4),
        -380px -180px 0 rgba(0, 212, 255, 0.5),
        -280px -280px 0 rgba(111, 66, 193, 0.3),
        -500px -120px 0 rgba(0, 220, 130, 0.4);
}

/* ===================================================================================== */
/* TÍTULO ELEGANTE MODERNIZADO */
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
  background: linear-gradient(135deg, #00d4ff 0%, #17a2b8 100%);
  border-radius: 50%;
  color: white;
  font-size: 1.8rem;
  margin-bottom: 0.8rem;
  box-shadow: 0 8px 25px rgba(0, 212, 255, 0.4);
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
  color: #00d4ff;
  display: block;
  letter-spacing: 1.5px;
  text-shadow: 0 3px 8px rgba(0, 212, 255, 0.4), 0 0 20px rgba(0, 212, 255, 0.2);
  line-height: 1.1;
  margin-bottom: 0.1rem;
  position: relative;
}

.news-title-sub {
  font-weight: 400;
  color: #b8c5d1;
  display: block;
  font-size: 0.75em;
  font-style: italic;
  opacity: 0.9;
  letter-spacing: 0.5px;
  text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

.title-decorative-line {
  position: absolute;
  bottom: -15px;
  left: 50%;
  transform: translateX(-50%);
  width: 80px;
  height: 3px;
  background: linear-gradient(90deg, transparent 0%, #00d4ff 20%, #17a2b8 50%, #00d4ff 80%, transparent 100%);
  border-radius: 2px;
  animation: newsLineGlow 2.5s ease-in-out infinite alternate;
  box-shadow: 0 0 10px rgba(0, 212, 255, 0.3);
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

/* ===================================================================================== */
/* CARDS MODERNAS CON GLASSMORPHISM AVANZADO */
/* ===================================================================================== */

.modern-news-card {
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(0, 212, 255, 0.2);
  box-shadow: 
    0 8px 32px rgba(0, 0, 0, 0.3),
    0 16px 50px rgba(0, 212, 255, 0.1),
    inset 0 1px 0 rgba(255, 255, 255, 0.1);
  transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  position: relative;
  overflow: hidden;
}

.modern-news-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 1px;
  background: linear-gradient(90deg, transparent, rgba(0, 212, 255, 0.5), transparent);
  animation: cardBorderGlow 4s ease-in-out infinite;
}

.modern-news-card::after {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, transparent 40%, rgba(0, 212, 255, 0.02) 50%, transparent 60%);
  transform: rotate(-45deg);
  transition: all 0.6s ease;
  opacity: 0;
}

.modern-news-card:hover {
  transform: translateY(-15px) scale(1.02);
  box-shadow: 
    0 25px 60px rgba(0, 0, 0, 0.4),
    0 30px 80px rgba(0, 212, 255, 0.2),
    inset 0 1px 0 rgba(255, 255, 255, 0.2);
  border-color: rgba(0, 212, 255, 0.5);
  background: rgba(255, 255, 255, 0.08);
}

.modern-news-card:hover::after {
  opacity: 1;
  animation: cardShine 1.5s ease-out;
}

.news-card-img {
  transition: all 0.6s ease;
  filter: brightness(0.8) contrast(1.1);
}

.modern-news-card:hover .news-card-img {
  transform: scale(1.05);
  filter: brightness(1) contrast(1.2) saturate(1.1);
}

.news-card-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(0, 212, 255, 0.1) 0%, rgba(23, 162, 184, 0.05) 100%);
  transition: all 0.4s ease;
}

.modern-news-card:hover .news-card-overlay {
  background: linear-gradient(135deg, rgba(0, 212, 255, 0.2) 0%, rgba(23, 162, 184, 0.1) 100%);
}

.news-card-glow {
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: linear-gradient(45deg, rgba(0, 212, 255, 0.3), transparent, rgba(0, 212, 255, 0.3));
  border-radius: inherit;
  z-index: -1;
  opacity: 0;
  transition: opacity 0.4s ease;
}

.modern-news-card:hover .news-card-glow {
  opacity: 1;
}

/* ===================================================================================== */
/* CONTENIDO DE CARDS MODERNIZADO */
/* ===================================================================================== */

.modern-card-body {
  padding: 1.5rem;
  position: relative;
  z-index: 2;
}

.modern-card-title {
  font-weight: 700;
  color: #00d4ff;
  margin-bottom: 1rem;
  font-size: 1.1rem;
  text-shadow: 0 2px 6px rgba(0, 212, 255, 0.3);
  transition: all 0.3s ease;
  display: flex;
  align-items: center;
}

.modern-card-title i {
  color: #17a2b8;
  filter: brightness(1.2) drop-shadow(0 1px 3px rgba(0, 212, 255, 0.3));
  transition: all 0.3s ease;
}

.modern-news-card:hover .modern-card-title {
  color: #ffffff;
  text-shadow: 0 3px 8px rgba(0, 212, 255, 0.5), 0 0 15px rgba(0, 212, 255, 0.3);
  transform: translateY(-2px);
}

.modern-news-card:hover .modern-card-title i {
  transform: scale(1.1);
  filter: brightness(1.4) drop-shadow(0 2px 6px rgba(0, 212, 255, 0.5));
}

.modern-card-text {
  color: rgba(255, 255, 255, 0.85);
  line-height: 1.6;
  margin-bottom: 1.5rem;
  text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
  transition: all 0.3s ease;
}

.modern-news-card:hover .modern-card-text {
  color: rgba(255, 255, 255, 0.95);
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.7);
}

/* ===================================================================================== */
/* BOTONES MODERNOS CON EFECTOS NEÓN */
/* ===================================================================================== */

.modern-news-btn {
  display: inline-block;
  padding: 0.6rem 1.5rem;
  background: rgba(0, 212, 255, 0.2);
  backdrop-filter: blur(10px);
  border: 2px solid rgba(0, 212, 255, 0.4);
  border-radius: 25px;
  color: white;
  text-decoration: none;
  font-weight: 600;
  font-size: 0.9rem;
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
  text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
}

.modern-news-btn:hover {
  background: rgba(0, 212, 255, 0.3);
  border-color: rgba(0, 212, 255, 0.7);
  color: white;
  text-decoration: none;
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(0, 212, 255, 0.4);
  text-shadow: 0 2px 6px rgba(0, 0, 0, 0.7);
}

.btn-content {
  position: relative;
  z-index: 2;
}

.btn-glow-effect {
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
  transition: left 0.6s ease;
}

.modern-news-btn:hover .btn-glow-effect {
  left: 100%;
}

/* ===================================================================================== */
/* FOOTER DE CARDS MODERNIZADO */
/* ===================================================================================== */

.modern-card-footer {
  padding: 1rem 1.5rem;
  background: rgba(255, 255, 255, 0.03);
  backdrop-filter: blur(10px);
  border-top: 1px solid rgba(0, 212, 255, 0.1);
  color: rgba(255, 255, 255, 0.7);
  display: flex;
  align-items: center;
  font-size: 0.85rem;
  text-shadow: 0 1px 3px rgba(0, 0, 0, 0.5);
  transition: all 0.3s ease;
}

.modern-card-footer i {
  color: #00d4ff;
  filter: brightness(1.1) drop-shadow(0 1px 2px rgba(0, 212, 255, 0.3));
}

.modern-news-card:hover .modern-card-footer {
  background: rgba(255, 255, 255, 0.06);
  border-top-color: rgba(0, 212, 255, 0.2);
  color: rgba(255, 255, 255, 0.9);
}

/* ===================================================================================== */
/* EFECTOS HOVER PARA TÍTULO */
/* ===================================================================================== */

.news-title-wrapper:hover .title-icon-wrapper {
  transform: translateY(-3px) scale(1.05);
  box-shadow: 0 12px 35px rgba(0, 212, 255, 0.5);
  background: linear-gradient(135deg, #17a2b8 0%, #00d4ff 100%);
}

.news-title-wrapper:hover .news-title-main {
  color: #ffffff;
  text-shadow: 0 4px 12px rgba(0, 212, 255, 0.6), 0 0 25px rgba(0, 212, 255, 0.4);
  transform: translateY(-1px);
  transition: all 0.3s ease;
}

.news-title-wrapper:hover .title-decorative-line {
  width: 100px;
  background: linear-gradient(90deg, transparent 0%, #00d4ff 15%, #17a2b8 35%, #00ffff 50%, #17a2b8 65%, #00d4ff 85%, transparent 100%);
  box-shadow: 0 0 15px rgba(0, 212, 255, 0.5);
  transition: all 0.4s ease;
}

/* ===================================================================================== */
/* ANIMACIONES TECNOLÓGICAS */
/* ===================================================================================== */

@keyframes newsGridFloat {
    0%, 100% {
        transform: translate(0, 0);
        opacity: 0.6;
    }
    50% {
        transform: translate(6px, -8px);
        opacity: 0.8;
    }
}

@keyframes newsOverlayShift {
    0%, 100% {
        background-position: 0% 0%, 100% 100%, 50% 0%, 0% 100%;
    }
    50% {
        background-position: 100% 100%, 0% 0%, 25% 75%, 75% 25%;
    }
}

@keyframes newsFloatTech {
    0% {
        transform: translateY(0px) rotate(0deg);
        opacity: 0.6;
    }
    50% {
        transform: translateY(-15px) rotate(180deg);
        opacity: 1;
    }
    100% {
        transform: translateY(0px) rotate(360deg);
        opacity: 0.6;
    }
}

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

@keyframes cardBorderGlow {
  0%, 100% {
    opacity: 0.5;
  }
  50% {
    opacity: 1;
  }
}

@keyframes cardShine {
  0% {
    transform: translateX(-100%) translateY(-100%) rotate(-45deg);
    opacity: 0;
  }
  50% {
    transform: translateX(0%) translateY(0%) rotate(-45deg);
    opacity: 1;
  }
  100% {
    transform: translateX(100%) translateY(100%) rotate(-45deg);
    opacity: 0;
  }
}

/* ===================================================================================== */
/* RESPONSIVE DESIGN */
/* ===================================================================================== */

@media (max-width: 768px) {
    .news-tech-background {
        background-size: 40px 40px, 40px 40px, 12px 12px, 12px 12px;
        opacity: 0.4;
    }
    
    .news-floating-particles::before,
    .news-floating-particles::after {
        display: none;
    }
    
    .modern-news-card {
        margin-bottom: 1.5rem;
    }
    
    .modern-news-card:hover {
        transform: translateY(-8px) scale(1.01);
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

/* Interacción con hover de sección completa */
#noticias:hover .news-tech-background {
  opacity: 0.8;
  animation-duration: 20s;
}

#noticias:hover .news-grid-overlay {
  opacity: 0.5;
  animation-duration: 25s;
}

#noticias:hover .news-floating-particles {
  animation-duration: 12s;
}
</style>