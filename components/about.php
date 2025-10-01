<?php ?>
<!-- Nosotros Section -->
<section id="nosotros" class="py-3" style="background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);">
    <div class="container">
        <!-- Título Elegante para Nosotros -->
        <div class="text-center mb-3">
            <div class="about-title-wrapper position-relative d-inline-block">
                <h2 class="about-elegant-title mb-3">
                    <div class="title-shield-container">
                        <div class="company-shield">
                            <i class="bi bi-building"></i>
                            <div class="shield-glow"></div>
                        </div>
                    </div>
                    <span class="about-title-main">Sobre</span>
                    <span class="about-title-sub">Nosotros</span>
                </h2>
                <div class="title-company-line">
                    <div class="company-dot company-dot-start"></div>
                    <div class="company-progress-line"></div>
                    <div class="company-dot company-dot-end"></div>
                </div>
            </div>
        </div>
        
        <!-- Layout Superpuesto Moderno -->
        <div class="modern-about-container position-relative" style="min-height: 75vh;">
            <!-- Imagen de fondo con overlay -->
            <div class="background-image-container">
                <img id="nosotros-background-img" src="img/fachada.RSE.jpg" alt="Rafael Soluciones Electrónica" class="background-image">
                <div class="image-overlay"></div>
                <div class="image-gradient-overlay"></div>
            </div>
            
            <!-- Tarjeta flotante con glassmorphism -->
            <div class="floating-info-card" data-aos="fade-up" data-aos-delay="300">
                <!-- Estadísticas destacadas -->
                <div class="stats-section">
                    <div class="row text-center mb-4">
                        <div class="col-4">
                            <div class="stat-item-glass">
                                <div class="stat-number text-primary fw-bold fs-3">10+</div>
                                <div class="stat-label text-white-50 small">Años de Experiencia</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item-glass">
                                <div class="stat-number text-success fw-bold fs-3">300+</div>
                                <div class="stat-label text-white-50 small">Clientes Satisfechos</div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="stat-item-glass">
                                <div class="stat-number text-info fw-bold fs-3">3.5K+</div>
                                <div class="stat-label text-white-50 small">Reparaciones Exitosas</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Línea separadora glass -->
                <hr class="glass-separator my-3">
                
                <!-- Contenido principal en dos columnas -->
                <div class="row align-items-start">
                    <!-- Columna izquierda: Descripción -->
                    <div class="col-md-6">
                        <p class="lead text-white mb-3 fs-6 fst-italic glass-text">
                            <strong class="text-primary">Rafael Soluciones Electrónica</strong> es sinónimo de liderazgo y excelencia en el sector de reparación y mantenimiento de tarjetas electrónicas para aires acondicionados y neveras inverter. Más de <strong class="text-info">10 años de experiencia</strong> nos respaldan.
                        </p>
                        
                        <!-- Mensaje de compromiso glass style -->
                        <div class="glass-commitment-box mb-3">
                            <p class="mb-0 text-center fst-italic small">
                                <i class="bi bi-quote text-primary me-1"></i>
                                <em class="text-white">Tu aliado estratégico en soluciones electrónicas.</em>
                                <i class="bi bi-quote text-primary ms-1"></i>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Columna derecha: Lista y botones -->
                    <div class="col-md-6">
                        <!-- Lista mejorada con iconos para glass -->
                        <div class="mb-3">
                            <h6 class="text-primary fw-bold mb-2 small"><i class="bi bi-star-fill me-2"></i>Nuestras Fortalezas</h6>
                            <ul class="list-unstyled glass-list">
                                <li class="mb-1 d-flex align-items-start">
                                    <i class="bi bi-patch-check-fill text-success me-2 mt-1 fs-6"></i>
                                    <span class="text-white-75 small">Equipo técnico certificado.</span>
                                </li>
                                <li class="mb-1 d-flex align-items-start">
                                    <i class="bi bi-cpu-fill text-primary me-2 mt-1 fs-6"></i>
                                    <span class="text-white-75 small">Tecnología de vanguardia.</span>
                                </li>
                                <li class="mb-1 d-flex align-items-start">
                                    <i class="bi bi-person-hearts text-info me-2 mt-1 fs-6"></i>
                                    <span class="text-white-75 small">Atención personalizada.</span>
                                </li>
                                <li class="mb-1 d-flex align-items-start">
                                    <i class="bi bi-shield-fill-check text-warning me-2 mt-1 fs-6"></i>
                                    <span class="text-white-75 small">Calidad y transparencia.</span>
                                </li>
                            </ul>
                        </div>
                        
                        <!-- Llamadas a la acción glass style -->
                        <div class="d-flex gap-2 flex-wrap justify-content-center">
                            <button class="btn btn-glass-primary px-3 py-2 fw-semibold small" type="button" data-bs-toggle="modal" data-bs-target="#modalSobreMi">
                                <i class="bi bi-person-circle me-1"></i>Sobre mí
                            </button>
                            <a href="#contacto" class="btn btn-glass-success px-3 py-2 fw-semibold small">
                                <i class="bi bi-whatsapp me-1"></i>Contáctanos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===================================================================================== */
/* TÍTULO ELEGANTE PARA NOSOTROS */
/* ===================================================================================== */
.about-title-wrapper {
  padding: 1.5rem 0;
  max-width: 480px;
}

.elegant-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: white;
  text-shadow: 2px 2px 8px rgba(0,0,0,0.3);
  margin: 0;
  padding: 0.5rem 0;
  position: relative;
  display: inline-block;
  background: linear-gradient(45deg, #ffffff, #e3f2fd, #ffffff);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}

.title-shield-container {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 0.8rem;
  position: relative;
}

.company-shield {
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #007bff 0%, #0056b3 50%, #004085 100%);
  border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 1.8rem;
  box-shadow: 
    0 8px 25px rgba(0,123,255,0.3),
    inset 0 2px 10px rgba(255,255,255,0.2),
    inset 0 -2px 10px rgba(0,0,0,0.1);
  position: relative;
  overflow: hidden;
  transition: all 0.4s ease;
  animation: shieldFloat 4s ease-in-out infinite;
}

.company-shield::before {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: linear-gradient(45deg, #007bff, #17a2b8, #007bff, #0056b3);
  border-radius: inherit;
  z-index: -1;
  animation: borderRotate 3s linear infinite;
}

.shield-glow {
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.15) 50%, transparent 70%);
  transform: rotate(-45deg);
  animation: shieldShine 3.5s ease-in-out infinite;
}

.about-title-main {
  font-weight: 800;
  color: #007bff;
  display: block;
  letter-spacing: 1.5px;
  text-shadow: 0 3px 6px rgba(0,123,255,0.15);
  line-height: 1.1;
  margin-bottom: 0.1rem;
  position: relative;
}

.about-title-main::after {
  content: '';
  position: absolute;
  bottom: -5px;
  left: 50%;
  transform: translateX(-50%);
  width: 40px;
  height: 2px;
  background: linear-gradient(90deg, transparent 0%, #007bff 50%, transparent 100%);
  opacity: 0.6;
}

.about-title-sub {
  font-weight: 600;
  color: #495057;
  display: block;
  font-size: 0.75em;
  font-style: italic;
  opacity: 0.85;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.title-company-line {
  position: relative;
  width: 120px;
  height: 16px;
  margin-top: 1.8rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.company-progress-line {
  position: absolute;
  top: 50%;
  left: 10px;
  right: 10px;
  height: 3px;
  background: linear-gradient(90deg, #007bff 0%, #17a2b8 50%, #0056b3 100%);
  border-radius: 2px;
  transform: translateY(-50%);
  animation: companyLinePulse 2.5s ease-in-out infinite;
  box-shadow: 0 2px 8px rgba(0,123,255,0.2);
}

.company-dot {
  width: 14px;
  height: 14px;
  border-radius: 50%;
  box-shadow: 0 3px 10px rgba(0,123,255,0.3);
  z-index: 2;
  position: relative;
  border: 2px solid white;
}

.company-dot-start {
  background: #007bff;
  animation: companyDotPulse 2s ease-in-out infinite;
}

.company-dot-end {
  background: #0056b3;
  animation: companyDotPulse 2s ease-in-out infinite 1s;
}

/* Efectos hover elegantes */
.about-title-wrapper:hover .company-shield {
  transform: translateY(-3px) scale(1.05);
  box-shadow: 
    0 12px 35px rgba(0,123,255,0.4),
    inset 0 3px 15px rgba(255,255,255,0.3),
    inset 0 -3px 15px rgba(0,0,0,0.15);
  animation-duration: 2s;
}

.about-title-wrapper:hover .about-title-main {
  color: #0056b3;
  text-shadow: 0 5px 10px rgba(0,123,255,0.25);
  transform: translateY(-2px);
  transition: all 0.3s ease;
}

.about-title-wrapper:hover .about-title-main::after {
  width: 60px;
  opacity: 1;
  background: linear-gradient(90deg, transparent 0%, #0056b3 30%, #007bff 70%, transparent 100%);
  transition: all 0.4s ease;
}

.about-title-wrapper:hover .company-progress-line {
  background: linear-gradient(90deg, #0056b3 0%, #007bff 25%, #17a2b8 50%, #007bff 75%, #0056b3 100%);
  height: 4px;
  box-shadow: 0 3px 15px rgba(0,123,255,0.4);
  transition: all 0.4s ease;
}

/* Animaciones corporativas */
@keyframes shieldFloat {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-5px);
  }
}

@keyframes borderRotate {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes shieldShine {
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

@keyframes companyLinePulse {
  0%, 100% {
    opacity: 0.8;
    transform: translateY(-50%) scaleX(1);
  }
  50% {
    opacity: 1;
    transform: translateY(-50%) scaleX(1.03);
  }
}

@keyframes companyDotPulse {
  0%, 100% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.15);
    opacity: 0.9;
    box-shadow: 0 5px 15px rgba(0,123,255,0.5);
  }
}

/* Responsive para título nosotros */
@media (max-width: 768px) {
  .about-title-wrapper {
    padding: 1rem 0;
  }
  
  .company-shield {
    width: 60px;
    height: 60px;
    font-size: 1.8rem;
  }
  
  .title-shield-container {
    margin-bottom: 1rem;
  }
  
  .title-company-line {
    width: 90px;
    margin-top: 1.2rem;
  }
  
  .company-dot {
    width: 12px;
    height: 12px;
  }
}

/* ===================================================================================== */
/* LAYOUT SUPERPUESTO MODERNO CON GLASSMORPHISM */
/* ===================================================================================== */
.modern-about-container {
  width: 100%;
  min-height: 450px;
  border-radius: 20px;
  overflow: visible;
  box-shadow: 0 20px 50px rgba(0,0,0,0.15);
  display: flex;
  align-items: center;
  padding: 1rem 0;
}

.background-image-container {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1;
}

.background-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  filter: brightness(0.95) contrast(1.25) saturate(1.15);
  transition: opacity 2s ease-in-out, filter 2s ease-in-out;
}

.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.15);
  z-index: 2;
}

.image-gradient-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, 
    rgba(0,123,255,0.15) 0%, 
    rgba(23,162,184,0.1) 50%, 
    rgba(0,86,179,0.15) 100%);
  z-index: 3;
}

.floating-info-card {
  position: relative;
  z-index: 4;
  max-width: 900px;
  width: 100%;
  margin: 0 auto;
  padding: 2rem 2.5rem;
  background: rgba(255,255,255,0.08);
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
  border: 1px solid rgba(255,255,255,0.2);
  border-radius: 20px;
  box-shadow: 
    0 8px 32px rgba(0,0,0,0.15),
    inset 0 1px 0 rgba(255,255,255,0.2);
  animation: floatCard 6s ease-in-out infinite;
}

@keyframes floatCard {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-8px);
  }
}

/* Estadísticas Glass Style */
.stats-section {
  margin-bottom: 1.5rem;
}

.stat-item-glass {
  position: relative;
  padding: 1.2rem 0.6rem;
  border-radius: 15px;
  background: rgba(255,255,255,0.05);
  backdrop-filter: blur(8px);
  border: 1px solid rgba(255,255,255,0.12);
  transition: all 0.4s ease;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.stat-item-glass:hover {
  background: rgba(255,255,255,0.15);
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0,123,255,0.2);
  border-color: rgba(0,123,255,0.3);
}

.stat-item-glass .stat-number {
  font-size: 2.2rem !important;
  text-shadow: 0 2px 8px rgba(0,0,0,0.3);
  margin-bottom: 0.5rem;
  filter: brightness(1.2);
}

.stat-item-glass .stat-label {
  font-weight: 600;
  letter-spacing: 0.8px;
  text-transform: uppercase;
  text-shadow: 0 1px 3px rgba(0,0,0,0.5);
}

/* Separador Glass */
.glass-separator {
  background: linear-gradient(90deg, 
    transparent 0%, 
    rgba(255,255,255,0.3) 20%, 
    rgba(0,123,255,0.5) 50%, 
    rgba(255,255,255,0.3) 80%, 
    transparent 100%);
  height: 2px !important;
  border: none !important;
  opacity: 1 !important;
  box-shadow: 0 1px 10px rgba(0,123,255,0.3);
}

/* Texto Glass */
.glass-text {
  text-shadow: 0 2px 8px rgba(0,0,0,0.5);
  line-height: 1.6;
}

.text-white-75 {
  color: rgba(255,255,255,0.85) !important;
  text-shadow: 0 1px 4px rgba(0,0,0,0.5);
}

.text-white-50 {
  color: rgba(255,255,255,0.7) !important;
  text-shadow: 0 1px 3px rgba(0,0,0,0.7);
}

/* Lista Glass */
.glass-list li {
  transition: all 0.3s ease;
  padding: 0.8rem;
  border-radius: 10px;
  margin-bottom: 0.8rem !important;
  background: rgba(255,255,255,0.03);
  backdrop-filter: blur(5px);
  border: 1px solid rgba(255,255,255,0.06);
}

.glass-list li:hover {
  background: rgba(255,255,255,0.12);
  transform: translateX(8px);
  box-shadow: 0 4px 15px rgba(0,123,255,0.15);
  border-color: rgba(0,123,255,0.2);
}

.glass-list li i {
  filter: brightness(1.2) drop-shadow(0 1px 3px rgba(0,0,0,0.5));
  transition: all 0.3s ease;
}

.glass-list li:hover i {
  transform: scale(1.15);
  filter: brightness(1.4) drop-shadow(0 2px 6px rgba(0,0,0,0.7));
}

/* Caja de compromiso Glass */
.glass-commitment-box {
  background: rgba(255,255,255,0.05);
  backdrop-filter: blur(12px);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: 15px;
  padding: 1.5rem;
  position: relative;
  overflow: hidden;
}

.glass-commitment-box::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, 
    transparent 0%, 
    rgba(255,255,255,0.1) 50%, 
    transparent 100%);
  transition: left 0.8s ease;
}

.glass-commitment-box:hover::before {
  left: 100%;
}

.glass-commitment-box em {
  text-shadow: 0 2px 6px rgba(0,0,0,0.5);
  font-size: 1.05em;
}

/* Botones Glass */
.btn-glass-primary {
  background: rgba(0,123,255,0.2);
  backdrop-filter: blur(10px);
  border: 2px solid rgba(0,123,255,0.4);
  color: white;
  font-weight: 600;
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
  text-shadow: 0 1px 3px rgba(0,0,0,0.5);
  position: relative;
  overflow: hidden;
}

.btn-glass-primary:hover {
  background: rgba(0,123,255,0.35);
  border-color: rgba(0,123,255,0.6);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(0,123,255,0.3);
}

.btn-glass-success {
  background: rgba(25,135,84,0.2);
  backdrop-filter: blur(10px);
  border: 2px solid rgba(25,135,84,0.4);
  color: white;
  font-weight: 600;
  letter-spacing: 0.5px;
  transition: all 0.3s ease;
  text-shadow: 0 1px 3px rgba(0,0,0,0.5);
  text-decoration: none;
}

.btn-glass-success:hover {
  background: rgba(25,135,84,0.35);
  border-color: rgba(25,135,84,0.6);
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(25,135,84,0.3);
  text-decoration: none;
}

/* Efectos adicionales */
.btn-glass-primary::before,
.btn-glass-success::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  width: 0;
  height: 0;
  background: rgba(255,255,255,0.15);
  border-radius: 50%;
  transform: translate(-50%, -50%);
  transition: all 0.4s ease;
}

.btn-glass-primary:hover::before,
.btn-glass-success:hover::before {
  width: 300px;
  height: 300px;
}

/* Responsive para layout moderno */
@media (max-width: 768px) {
  .modern-about-container {
    min-height: 400px;
    padding: 0.8rem 0;
  }
  
  .floating-info-card {
    padding: 1.5rem 1.2rem;
    margin: 0.5rem;
    position: relative;
  }
  
  .row.align-items-start {
    flex-direction: column;
  }
  
  .stat-item-glass {
    padding: 1rem 0.5rem;
  }
  
  .stat-item-glass .stat-number {
    font-size: 1.8rem !important;
  }
  
  .d-flex.gap-2 {
    flex-direction: column;
  }
  
  .d-flex.gap-2 .btn {
    width: 100%;
    margin-bottom: 0.8rem;
  }
}

@media (max-width: 576px) {
  .modern-about-container {
    min-height: 380px;
  }
  
  .floating-info-card {
    padding: 1.2rem 0.8rem;
    margin: 0.3rem;
  }
  
  .stats-section .col-4 {
    margin-bottom: 0.5rem;
  }
  
  .stat-item-glass {
    padding: 1rem 0.5rem;
  }
}
</style>

<script>
// Script mejorado para transiciones elegantes de imágenes en about.php
(function() {
    console.log('🔄 Script de about.php mejorado iniciado');
    
    function startAdvancedImageRotation() {
        console.log('🖼️ Iniciando rotación avanzada de imágenes...');
        
        const imagenes = [
            {
                src: 'img/fachada.RSE.jpg',
                title: 'Nuestra Sede',
                effect: 'fadeSlide'
            },
            {
                src: 'img/taller1.JPG', 
                title: 'Taller Especializado',
                effect: 'zoomFade'
            },
            {
                src: 'img/logo1.png',
                title: 'Identidad Corporativa', 
                effect: 'slideRotate'
            }
        ];
        
        let currentIndex = 0;
        const imgElement = document.getElementById('nosotros-background-img');
        
        if (!imgElement) {
            console.error('❌ Elemento de imagen no encontrado');
            return;
        }
        
        console.log('✅ Elemento encontrado, configurando transiciones avanzadas...');
        
        // Precargar todas las imágenes
        const preloadedImages = [];
        imagenes.forEach((img, index) => {
            const preloadImg = new Image();
            preloadImg.src = img.src;
            preloadImg.onload = () => console.log(`📦 Imagen ${index + 1} precargada:`, img.title);
            preloadedImages.push(preloadImg);
        });
        
        // Función para aplicar diferentes efectos de transición
        function applyTransitionEffect(effect, imgElement, newSrc, callback) {
            switch(effect) {
                case 'fadeSlide':
                    // Efecto fade con deslizamiento sutil
                    imgElement.style.transition = 'all 1.8s cubic-bezier(0.4, 0, 0.2, 1)';
                    imgElement.style.opacity = '0';
                    imgElement.style.transform = 'scale(1.05) translateX(-20px)';
                    imgElement.style.filter = 'brightness(0.7) blur(3px)';
                    
                    setTimeout(() => {
                        imgElement.src = newSrc;
                        setTimeout(() => {
                            imgElement.style.opacity = '1';
                            imgElement.style.transform = 'scale(1) translateX(0)';
                            imgElement.style.filter = 'brightness(0.95) contrast(1.25) saturate(1.15)';
                            callback();
                        }, 100);
                    }, 900);
                    break;
                    
                case 'zoomFade':
                    // Efecto zoom out/in elegante
                    imgElement.style.transition = 'all 2s ease-in-out';
                    imgElement.style.opacity = '0.6';
                    imgElement.style.transform = 'scale(0.85)';
                    imgElement.style.filter = 'brightness(0.8) contrast(1.1) sepia(0.2)';
                    
                    setTimeout(() => {
                        imgElement.src = newSrc;
                        setTimeout(() => {
                            imgElement.style.opacity = '1';
                            imgElement.style.transform = 'scale(1)';
                            imgElement.style.filter = 'brightness(0.95) contrast(1.25) saturate(1.15)';
                            callback();
                        }, 150);
                    }, 1000);
                    break;
                    
                case 'slideRotate':
                    // Efecto deslizamiento con rotación sutil
                    imgElement.style.transition = 'all 1.6s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                    imgElement.style.opacity = '0.4';
                    imgElement.style.transform = 'translateX(30px) rotate(2deg) scale(0.95)';
                    imgElement.style.filter = 'brightness(0.75) hue-rotate(10deg)';
                    
                    setTimeout(() => {
                        imgElement.src = newSrc;
                        setTimeout(() => {
                            imgElement.style.opacity = '1';
                            imgElement.style.transform = 'translateX(0) rotate(0deg) scale(1)';
                            imgElement.style.filter = 'brightness(0.95) contrast(1.25) saturate(1.15)';
                            callback();
                        }, 120);
                    }, 800);
                    break;
                    
                default:
                    // Transición por defecto
                    imgElement.style.transition = 'all 1.5s ease-in-out';
                    imgElement.style.opacity = '0.7';
                    
                    setTimeout(() => {
                        imgElement.src = newSrc;
                        setTimeout(() => {
                            imgElement.style.opacity = '1';
                            callback();
                        }, 100);
                    }, 750);
            }
        }
        
        // Función principal de rotación
        const rotateImages = () => {
            const currentImage = imagenes[currentIndex];
            const nextIndex = (currentIndex + 1) % imagenes.length;
            const nextImage = imagenes[nextIndex];
            
            console.log(`🎬 Transición: ${currentImage.title} -> ${nextImage.title} (${nextImage.effect})`);
            
            // Aplicar efecto de transición
            applyTransitionEffect(nextImage.effect, imgElement, nextImage.src, () => {
                console.log(`✨ Transición completada: ${nextImage.title}`);
                currentIndex = nextIndex;
            });
        };
        
        // Iniciar rotación cada 10 segundos para dar más tiempo de apreciación
        const rotationInterval = setInterval(rotateImages, 10000);
        console.log('⏰ Rotación configurada cada 10 segundos');
        
        // Pausar rotación cuando el usuario hace hover sobre la imagen
        let isPaused = false;
        
        imgElement.addEventListener('mouseenter', () => {
            if (!isPaused) {
                console.log('⏸️ Rotación pausada por hover');
                clearInterval(rotationInterval);
                isPaused = true;
                
                // Efecto hover especial
                imgElement.style.transition = 'all 0.8s ease';
                imgElement.style.transform = 'scale(1.02)';
                imgElement.style.filter = 'brightness(1.1) contrast(1.3) saturate(1.2)';
            }
        });
        
        imgElement.addEventListener('mouseleave', () => {
            if (isPaused) {
                console.log('▶️ Rotación reanudada');
                
                // Restaurar estado normal
                imgElement.style.transform = 'scale(1)';
                imgElement.style.filter = 'brightness(0.95) contrast(1.25) saturate(1.15)';
                
                // Reiniciar rotación después de 3 segundos
                setTimeout(() => {
                    startAdvancedImageRotation();
                }, 3000);
                
                isPaused = false;
            }
        });
        
        // Efecto de entrada inicial
        setTimeout(() => {
            imgElement.style.transition = 'all 1s ease-out';
            imgElement.style.opacity = '1';
            imgElement.style.transform = 'scale(1)';
            imgElement.style.filter = 'brightness(0.95) contrast(1.25) saturate(1.15)';
        }, 500);
    }
    
    // Ejecutar cuando el DOM esté listo
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', startAdvancedImageRotation);
    } else {
        startAdvancedImageRotation();
    }
    
    // Fallback con delay
    setTimeout(startAdvancedImageRotation, 1500);
})();
</script>