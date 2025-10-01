<?php ?>
<!-- Proceso de Trabajo Section -->
<section id="proceso-trabajo" class="py-5 bg-gradient" style="background: linear-gradient(135deg, #f8fafc 0%, #e3eafc 100%);">
    <div class="container">
        <!-- Título Elegante para Proceso de Trabajo -->
        <div class="text-center mb-5">
            <div class="process-title-wrapper position-relative d-inline-block">
                <h2 class="process-elegant-title mb-3">
                    <div class="title-gears-container">
                        <div class="gear gear-1">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <div class="gear gear-2">
                            <i class="bi bi-gear-wide-connected"></i>
                        </div>
                    </div>
                    <span class="process-title-main">Nuestro Proceso</span>
                    <span class="process-title-sub">de Trabajo</span>
                </h2>
                <div class="title-workflow-line">
                    <div class="workflow-dot workflow-dot-1"></div>
                    <div class="workflow-dot workflow-dot-2"></div>
                    <div class="workflow-dot workflow-dot-3"></div>
                    <div class="workflow-progress-line"></div>
                </div>
            </div>
        </div>
        <p class="text-center text-muted mb-5 fs-5 fst-italic" style="max-width: 700px; margin: 0 auto;">
            Descubre cómo garantizamos eficiencia, calidad y transparencia en cada servicio.
        </p>
        <div class="timeline position-relative">
            <!-- Línea central -->
            <div class="position-absolute top-0 start-50 translate-middle-x h-100" style="width: 4px; background: #0d6efd1a;"></div>
            <div class="row gy-5">
                <!-- Paso 1 -->
                <div class="col-md-6 offset-md-6 position-relative" data-aos="fade-left" data-aos-delay="100">
                    <div class="timeline-card bg-white shadow-lg border-0 rounded-4 p-4 ms-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="timeline-icon bg-primary text-white me-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 56px; height: 56px;">
                                <i class="bi bi-search" style="font-size: 2rem;"></i>
                            </span>
                            <h5 class="mb-0 fw-bold">Diagnóstico</h5>
                        </div>
                        <p class="mb-0 text-secondary">Análisis detallado para identificar fallas y definir la mejor solución.</p>
                    </div>
                </div>
                <!-- Paso 2 -->
                <div class="col-md-6 position-relative" data-aos="fade-right" data-aos-delay="200">
                    <div class="timeline-card bg-white shadow-lg border-0 rounded-4 p-4 me-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="timeline-icon bg-success text-white me-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 56px; height: 56px;">
                                <i class="bi bi-cash-coin" style="font-size: 2rem;"></i>
                            </span>
                            <h5 class="mb-0 fw-bold">Presupuesto</h5>
                        </div>
                        <p class="mb-0 text-secondary">Calculamos y comunicamos el costo de forma clara y transparente.</p>
                    </div>
                </div>
                <!-- Paso 3 -->
                <div class="col-md-6 offset-md-6 position-relative" data-aos="fade-left" data-aos-delay="300">
                    <div class="timeline-card bg-white shadow-lg border-0 rounded-4 p-4 ms-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="timeline-icon bg-warning text-white me-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 56px; height: 56px;">
                                <i class="bi bi-check-circle" style="font-size: 2rem;"></i>
                            </span>
                            <h5 class="mb-0 fw-bold">Autorización</h5>
                        </div>
                        <p class="mb-0 text-secondary">Esperamos la aprobación del cliente antes de iniciar la reparación.</p>
                    </div>
                </div>
                <!-- Paso 4 -->
                <div class="col-md-6 position-relative" data-aos="fade-right" data-aos-delay="400">
                    <div class="timeline-card bg-white shadow-lg border-0 rounded-4 p-4 me-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="timeline-icon bg-info text-white me-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 56px; height: 56px;">
                                <i class="bi bi-tools" style="font-size: 2rem;"></i>
                            </span>
                            <h5 class="mb-0 fw-bold">Reparación</h5>
                        </div>
                        <p class="mb-0 text-secondary">Utilizamos herramientas avanzadas y repuestos originales para resultados duraderos.</p>
                    </div>
                </div>
                <!-- Paso 5 -->
                <div class="col-md-6 offset-md-6 position-relative" data-aos="fade-left" data-aos-delay="500">
                    <div class="timeline-card bg-white shadow-lg border-0 rounded-4 p-4 ms-5">
                        <div class="d-flex align-items-center mb-3">
                            <span class="timeline-icon bg-success text-white me-3 rounded-circle d-flex align-items-center justify-content-center" style="width: 56px; height: 56px;">
                                <i class="bi bi-check2-circle" style="font-size: 2rem;"></i>
                            </span>
                            <h5 class="mb-0 fw-bold">Pruebas y Entrega</h5>
                        </div>
                        <p class="mb-0 text-secondary">Realizamos pruebas exhaustivas y entregamos el equipo en óptimas condiciones.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* ===================================================================================== */
/* TÍTULO ELEGANTE PARA PROCESO DE TRABAJO */
/* ===================================================================================== */
.process-title-wrapper {
  padding: 1.5rem 0;
  max-width: 550px;
}

.process-elegant-title {
  font-size: clamp(2rem, 5vw, 3.2rem);
  margin: 0;
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 0.5rem;
}

.title-gears-container {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 1rem;
  margin-bottom: 1rem;
  position: relative;
}

.gear {
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  color: white;
  box-shadow: 0 6px 20px rgba(0,123,255,0.25);
  transition: all 0.4s ease;
  position: relative;
  overflow: hidden;
}

.gear-1 {
  width: 55px;
  height: 55px;
  background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
  font-size: 1.8rem;
  animation: rotateGear1 8s linear infinite;
}

.gear-2 {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, #17a2b8 0%, #0d6efd 100%);
  font-size: 2.2rem;
  animation: rotateGear2 10s linear infinite reverse;
}

.gear::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, transparent 30%, rgba(255,255,255,0.15) 50%, transparent 70%);
  transform: rotate(-45deg);
  animation: gearShine 4s ease-in-out infinite;
}

.process-title-main {
  font-weight: 800;
  color: #007bff;
  display: block;
  letter-spacing: 1.5px;
  text-shadow: 0 3px 6px rgba(0,123,255,0.15);
  line-height: 1.1;
  margin-bottom: 0.1rem;
  position: relative;
}

.process-title-sub {
  font-weight: 600;
  color: #495057;
  display: block;
  font-size: 0.75em;
  font-style: italic;
  opacity: 0.85;
  letter-spacing: 1px;
  text-transform: uppercase;
}

.title-workflow-line {
  position: relative;
  width: 140px;
  height: 20px;
  margin-top: 1.5rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.workflow-progress-line {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, #007bff 0%, #17a2b8 50%, #0056b3 100%);
  border-radius: 2px;
  transform: translateY(-50%);
  animation: workflowPulse 3s ease-in-out infinite;
}

.workflow-dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: #007bff;
  box-shadow: 0 2px 8px rgba(0,123,255,0.3);
  z-index: 2;
  position: relative;
  animation: dotPulse 2s ease-in-out infinite;
}

.workflow-dot-1 {
  animation-delay: 0s;
  background: #007bff;
}

.workflow-dot-2 {
  animation-delay: 0.7s;
  background: #17a2b8;
}

.workflow-dot-3 {
  animation-delay: 1.4s;
  background: #0056b3;
}

/* Efectos hover elegantes */
.process-title-wrapper:hover .gear-1 {
  animation-duration: 2s;
  transform: scale(1.05);
  box-shadow: 0 8px 25px rgba(0,123,255,0.35);
}

.process-title-wrapper:hover .gear-2 {
  animation-duration: 2.5s;
  transform: scale(1.05);
  box-shadow: 0 10px 30px rgba(23,162,184,0.35);
}

.process-title-wrapper:hover .process-title-main {
  color: #0056b3;
  text-shadow: 0 4px 8px rgba(0,123,255,0.2);
  transform: translateY(-2px);
  transition: all 0.3s ease;
}

.process-title-wrapper:hover .workflow-progress-line {
  background: linear-gradient(90deg, #0056b3 0%, #007bff 25%, #17a2b8 50%, #007bff 75%, #0056b3 100%);
  height: 4px;
  box-shadow: 0 2px 10px rgba(0,123,255,0.3);
  transition: all 0.4s ease;
}

/* Animaciones profesionales */
@keyframes rotateGear1 {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(360deg);
  }
}

@keyframes rotateGear2 {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(-360deg);
  }
}

@keyframes gearShine {
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

@keyframes workflowPulse {
  0%, 100% {
    opacity: 0.8;
    transform: translateY(-50%) scaleX(1);
  }
  50% {
    opacity: 1;
    transform: translateY(-50%) scaleX(1.05);
  }
}

@keyframes dotPulse {
  0%, 100% {
    transform: scale(1);
    opacity: 1;
  }
  50% {
    transform: scale(1.2);
    opacity: 0.8;
    box-shadow: 0 4px 15px rgba(0,123,255,0.5);
  }
}

/* Responsive para título de proceso */
@media (max-width: 768px) {
  .process-title-wrapper {
    padding: 1rem 0;
  }
  
  .title-gears-container {
    gap: 0.7rem;
    margin-bottom: 0.8rem;
  }
  
  .gear-1 {
    width: 45px;
    height: 45px;
    font-size: 1.5rem;
  }
  
  .gear-2 {
    width: 55px;
    height: 55px;
    font-size: 1.8rem;
  }
  
  .title-workflow-line {
    width: 100px;
    margin-top: 1rem;
  }
  
  .workflow-dot {
    width: 10px;
    height: 10px;
  }
}

/* ===================================================================================== */
/* ESTILOS ORIGINALES DEL PROCESO */
/* ===================================================================================== */
.timeline {
    min-height: 600px;
}
.timeline-card {
    transition: box-shadow .3s;
}
.timeline-card:hover {
    box-shadow: 0 0.5rem 1.5rem rgba(13,110,253,.15);
}
.timeline-icon {
    box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.08);
}
@media (max-width: 767px) {
    .timeline .row > div {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }
    .timeline .position-absolute {
        left: 20px !important;
    }
}
</style>