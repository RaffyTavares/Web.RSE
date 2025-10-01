<?php ?>
<!-- Modales Mejorados -->
<!-- Modal Servicio 1 - Reparación de Tarjetas -->
<div class="modal fade" id="modalServicio1" tabindex="-1" aria-labelledby="modalServicio1Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-primary text-white rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio1Label">
          <i class="bi bi-cpu me-2"></i>Reparación Especializada de Tarjetas Electrónicas
        </h5>
        <button type="button" class="btn-close btn-close-white position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/taller1.JPG" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-primary mb-3" alt="Reparación de Tarjetas" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(0,123,255,0.2);">
              <div class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                <i class="bi bi-award me-1"></i>Especialistas Certificados
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-primary fw-bold mb-3"><i class="bi bi-gear-fill me-2"></i>Servicios Especializados</h6>
              <p class="fs-6 text-dark mb-3">
                Nuestro equipo de <strong>ingenieros especializados</strong> en electrónica digital ofrece diagnóstico y reparación profesional de tarjetas para aires acondicionados inverter, utilizando <span class="text-primary fw-semibold">tecnología de vanguardia</span> y repuestos originales.
              </p>
            </div>
            
            <!-- Tipos de Reparación -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <div class="card border-primary border-opacity-25 h-100">
                  <div class="card-body p-3">
                    <h6 class="card-title text-primary mb-2"><i class="bi bi-circuit-board me-2"></i>Tarjetas Inverter</h6>
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Módulos de potencia</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Controladoras principales</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Sensores de temperatura</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-success border-opacity-25 h-100">
                  <div class="card-body p-3">
                    <h6 class="card-title text-success mb-2"><i class="bi bi-tools me-2"></i>Reparaciones</h6>
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Componentes SMD</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Microprocesadores</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Fuentes de alimentación</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Proceso de Trabajo -->
            <div class="accordion accordion-flush" id="accordionReparacion">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReparacion" aria-expanded="false">
                    <i class="bi bi-list-check me-2 text-primary"></i><strong>Proceso de Reparación</strong>
                  </button>
                </h2>
                <div id="collapseReparacion" class="accordion-collapse collapse" data-bs-parent="#accordionReparacion">
                  <div class="accordion-body">
                    <div class="row g-2">
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-primary">1</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Diagnóstico</small>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-info bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-info">2</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Cotización</small>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-warning bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-warning">3</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Reparación</small>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-success">4</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Pruebas</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Información Adicional -->
        <div class="row g-3 mt-3">
          <div class="col-md-4">
            <div class="card bg-primary bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-clock-history text-primary fs-3 mb-2"></i>
                <h6 class="card-title text-primary">Tiempo Promedio</h6>
                <p class="card-text small mb-0">2-5 días hábiles según complejidad</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-shield-check text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Garantía</h6>
                <p class="card-text small mb-0">90 días en reparaciones</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-telephone text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Soporte</h6>
                <p class="card-text small mb-0">Asesoría post-reparación</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Diagnóstico gratuito sin compromiso
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="https://wa.me/18297470675" class="btn btn-primary" target="_blank">
              <i class="bi bi-whatsapp me-1"></i>Consultar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 2 - Mantenimiento Preventivo -->
<div class="modal fade" id="modalServicio2" tabindex="-1" aria-labelledby="modalServicio2Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-success text-white rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio2Label">
          <i class="bi bi-tools me-2"></i>Mantenimiento Preventivo Integral
        </h5>
        <button type="button" class="btn-close btn-close-white position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/mantenimiento-electronico.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-success mb-3" alt="Mantenimiento Preventivo" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(40,167,69,0.2);">
              <div class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">
                <i class="bi bi-calendar-check me-1"></i>Programación Flexible
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-success fw-bold mb-3"><i class="bi bi-shield-plus me-2"></i>Protege tu Inversión</h6>
              <p class="fs-6 text-dark mb-3">
                Nuestro programa de <strong>mantenimiento preventivo</strong> está diseñado para maximizar la vida útil de tus equipos, reducir costos operativos y prevenir fallas costosas. <span class="text-success fw-semibold">Ahorra hasta un 40%</span> en reparaciones futuras.
              </p>
            </div>

            <!-- Planes de Mantenimiento -->
            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <div class="card border-success border-opacity-25 h-100">
                  <div class="card-header bg-success bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-success mb-0 text-center"><i class="bi bi-calendar me-1"></i>Básico</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Limpieza general</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Inspección visual</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Medición básica</li>
                    </ul>
                    <div class="text-center mt-2">
                      <small class="text-muted">Cada 6 meses</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card border-warning border-opacity-25 h-100">
                  <div class="card-header bg-warning bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-warning mb-0 text-center"><i class="bi bi-star me-1"></i>Premium</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Todo lo del básico</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Análisis termográfico</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Calibración sensores</li>
                    </ul>
                    <div class="text-center mt-2">
                      <small class="text-muted">Cada 4 meses</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card border-primary border-opacity-25 h-100">
                  <div class="card-header bg-primary bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-primary mb-0 text-center"><i class="bi bi-gem me-1"></i>Enterprise</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Todo lo del premium</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Monitoreo remoto</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Soporte 24/7</li>
                    </ul>
                    <div class="text-center mt-2">
                      <small class="text-muted">Cada 2 meses</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Checklist de Mantenimiento -->
            <div class="accordion accordion-flush" id="accordionMantenimiento">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMantenimiento" aria-expanded="false">
                    <i class="bi bi-clipboard-check me-2 text-success"></i><strong>Checklist Completo</strong>
                  </button>
                </h2>
                <div id="collapseMantenimiento" class="accordion-collapse collapse" data-bs-parent="#accordionMantenimiento">
                  <div class="accordion-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h6 class="text-primary mb-2">Limpieza Especializada</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Serpentines evaporador y condensador</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Filtros de aire y drenajes</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Ventiladores y turbinas</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Compartimento eléctrico</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <h6 class="text-info mb-2">Verificaciones Técnicas</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Presiones del sistema</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Temperaturas de operación</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Conexiones eléctricas</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Funcionamiento de controles</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Beneficios -->
        <div class="row g-3 mt-3">
          <div class="col-md-3">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-piggy-bank text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Ahorro</h6>
                <p class="card-text small mb-0">Hasta 40% menos en reparaciones</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-primary bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-speedometer2 text-primary fs-3 mb-2"></i>
                <h6 class="card-title text-primary">Eficiencia</h6>
                <p class="card-text small mb-0">Optimiza el rendimiento energético</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-calendar-plus text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Vida Útil</h6>
                <p class="card-text small mb-0">Extiende la durabilidad del equipo</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-warning bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-file-text text-warning fs-3 mb-2"></i>
                <h6 class="card-title text-warning">Reportes</h6>
                <p class="card-text small mb-0">Informes detallados post-servicio</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Evaluación inicial gratuita para empresas
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="https://wa.me/18297470675" class="btn btn-success" target="_blank">
              <i class="bi bi-calendar-plus me-1"></i>Programar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 3 - Componentes -->
<div class="modal fade" id="modalServicio3" tabindex="-1" aria-labelledby="modalServicio3Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-info text-white rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio3Label">
          <i class="bi bi-box-seam me-2"></i>Componentes y Repuestos Especializados
        </h5>
        <button type="button" class="btn-close btn-close-white position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/dispositivos2.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-info mb-3" alt="Componentes" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(23,162,184,0.2);">
              <div class="badge bg-info-subtle text-info px-3 py-2 rounded-pill">
                <i class="bi bi-patch-check me-1"></i>Repuestos Originales
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-info fw-bold mb-3"><i class="bi bi-gems me-2"></i>Catálogo Especializado</h6>
              <p class="fs-6 text-dark mb-3">
                Disponemos de un <strong>amplio inventario</strong> de componentes originales y compatibles para sistemas de climatización y refrigeración. Todos nuestros repuestos cuentan con <span class="text-info fw-semibold">certificación de calidad</span> y garantía de fábrica.
              </p>
            </div>

            <!-- Categorías de Componentes -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <div class="card border-info border-opacity-25 h-100">
                  <div class="card-header bg-info bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-info mb-0"><i class="bi bi-cpu me-1"></i>Electrónicos</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-dot text-info"></i>Tarjetas controladoras</li>
                      <li><i class="bi bi-dot text-info"></i>Sensores de temperatura</li>
                      <li><i class="bi bi-dot text-info"></i>Displays y controles</li>
                      <li><i class="bi bi-dot text-info"></i>Módulos inverter</li>
                      <li><i class="bi bi-dot text-info"></i>Transformadores</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-primary border-opacity-25 h-100">
                  <div class="card-header bg-primary bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-primary mb-0"><i class="bi bi-gear me-1"></i>Mecánicos</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-dot text-primary"></i>Compresores inverter</li>
                      <li><i class="bi bi-dot text-primary"></i>Ventiladores EC</li>
                      <li><i class="bi bi-dot text-primary"></i>Válvulas expansión</li>
                      <li><i class="bi bi-dot text-primary"></i>Filtros deshidratadores</li>
                      <li><i class="bi bi-dot text-primary"></i>Serpentines</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Marcas Disponibles -->
            <div class="mb-4">
              <h6 class="text-dark fw-bold mb-3"><i class="bi bi-building me-2"></i>Marcas Principales</h6>
              <div class="row g-2">
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Samsung</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">LG</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Daikin</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Midea</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Gree</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Carrier</div>
                </div>
              </div>
            </div>

            <!-- Proceso de Pedido -->
            <div class="accordion accordion-flush" id="accordionComponentes">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComponentes" aria-expanded="false">
                    <i class="bi bi-cart-check me-2 text-info"></i><strong>Proceso de Pedido</strong>
                  </button>
                </h2>
                <div id="collapseComponentes" class="accordion-collapse collapse" data-bs-parent="#accordionComponentes">
                  <div class="accordion-body">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <div class="d-flex align-items-start">
                          <div class="flex-shrink-0">
                            <div class="rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                              <i class="bi bi-search text-info"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Identificación</h6>
                            <small class="text-muted">Identifica el modelo exacto y número de serie de tu equipo</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="d-flex align-items-start">
                          <div class="flex-shrink-0">
                            <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                              <i class="bi bi-chat-dots text-primary"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Consulta</h6>
                            <small class="text-muted">Contáctanos con los datos del componente necesario</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="d-flex align-items-start">
                          <div class="flex-shrink-0">
                            <div class="rounded-circle bg-warning bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                              <i class="bi bi-clock text-warning"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Disponibilidad</h6>
                            <small class="text-muted">Verificamos stock y tiempo de entrega</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="d-flex align-items-start">
                          <div class="flex-shrink-0">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                              <i class="bi bi-truck text-success"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Entrega</h6>
                            <small class="text-muted">Envío a domicilio o recogida en taller</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Servicios Adicionales -->
        <div class="row g-3 mt-3">
          <div class="col-md-3">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-truck text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Envío</h6>
                <p class="card-text small mb-0">Delivery en Santo Domingo</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-primary bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-tools text-primary fs-3 mb-2"></i>
                <h6 class="card-title text-primary">Instalación</h6>
                <p class="card-text small mb-0">Servicio técnico incluido</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-shield-check text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Garantía</h6>
                <p class="card-text small mb-0">Hasta 2 años según producto</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-warning bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-headset text-warning fs-3 mb-2"></i>
                <h6 class="card-title text-warning">Asesoría</h6>
                <p class="card-text small mb-0">Soporte técnico especializado</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Cotización gratuita • Precios competitivos
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="https://wa.me/18297470675" class="btn btn-info" target="_blank">
              <i class="bi bi-cart-plus me-1"></i>Cotizar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 4 - Tarjetas de Neveras Inverter -->
<div class="modal fade" id="modalServicio4" tabindex="-1" aria-labelledby="modalServicio4Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-warning text-dark rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio4Label">
          <i class="bi bi-snow me-2"></i>Especialistas en Neveras Inverter
        </h5>
        <button type="button" class="btn-close position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/Samsung-refrigerator.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-warning mb-3" alt="Neveras Inverter" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(255,193,7,0.2);">
              <div class="badge bg-warning-subtle text-warning px-3 py-2 rounded-pill">
                <i class="bi bi-thermometer-snow me-1"></i>Tecnología Inverter
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-warning fw-bold mb-3"><i class="bi bi-snow2 me-2"></i>Refrigeración Inteligente</h6>
              <p class="fs-6 text-dark mb-3">
                Especializados en <strong>diagnóstico y reparación</strong> de tarjetas electrónicas para neveras inverter. Nuestro equipo domina la tecnología de <span class="text-warning fw-semibold">control variable de velocidad</span> que optimiza el consumo energético y mejora la conservación de alimentos.
              </p>
            </div>

            <!-- Problemas Comunes -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <div class="card border-danger border-opacity-25 h-100">
                  <div class="card-header bg-danger bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-danger mb-0"><i class="bi bi-exclamation-triangle me-1"></i>Fallas Frecuentes</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-x-circle text-danger me-1"></i>No enfría correctamente</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Ruidos anormales</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Display con errores</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Consumo excesivo</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Ciclos irregulares</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-success border-opacity-25 h-100">
                  <div class="card-header bg-success bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-success mb-0"><i class="bi bi-wrench me-1"></i>Nuestras Soluciones</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check-circle text-success me-1"></i>Reparación de inverter</li>
                      <li><i class="bi bi-check-circle text-success me-1"></i>Calibración de sensores</li>
                      <li><i class="bi bi-check-circle text-success me-1"></i>Actualización firmware</li>
                      <li><i class="bi bi-check-circle text-success me-1"></i>Optimización energética</li>
                      <li><i class="bi bi-check-circle text-success me-1"></i>Prevención de fallas</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Marcas Especializadas -->
            <div class="mb-4">
              <h6 class="text-dark fw-bold mb-3"><i class="bi bi-snow me-2"></i>Marcas Especializadas</h6>
              <div class="row g-2">
                <div class="col-6 col-md-3">
                  <div class="card border-0 bg-white shadow-sm">
                    <div class="card-body p-2 text-center">
                      <strong class="text-primary">Samsung</strong>
                      <br><small class="text-muted">Twin Cooling Plus</small>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="card border-0 bg-white shadow-sm">
                    <div class="card-body p-2 text-center">
                      <strong class="text-success">LG</strong>
                      <br><small class="text-muted">Linear Inverter</small>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="card border-0 bg-white shadow-sm">
                    <div class="card-body p-2 text-center">
                      <strong class="text-warning">Whirlpool</strong>
                      <br><small class="text-muted">6th Sense</small>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="card border-0 bg-white shadow-sm">
                    <div class="card-body p-2 text-center">
                      <strong class="text-info">Mabe</strong>
                      <br><small class="text-muted">Twin Tech</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tecnologías -->
            <div class="accordion accordion-flush" id="accordionNeveras">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNeveras" aria-expanded="false">
                    <i class="bi bi-cpu-fill me-2 text-warning"></i><strong>Tecnologías que Manejamos</strong>
                  </button>
                </h2>
                <div id="collapseNeveras" class="accordion-collapse collapse" data-bs-parent="#accordionNeveras">
                  <div class="accordion-body">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <h6 class="text-primary mb-2">Control Inverter</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Modulación PWM avanzada</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Control de velocidad variable</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Sensores de temperatura digital</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <h6 class="text-success mb-2">Sistemas Inteligentes</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Auto-diagnóstico de fallas</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Optimización automática</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Conectividad WiFi/IoT</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Ventajas del Servicio -->
        <div class="row g-3 mt-3">
          <div class="col-md-3">
            <div class="card bg-warning bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-lightning-charge text-warning fs-3 mb-2"></i>
                <h6 class="card-title text-warning">Eficiencia</h6>
                <p class="card-text small mb-0">Hasta 60% menos consumo energético</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-thermometer-half text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Precisión</h6>
                <p class="card-text small mb-0">Control de temperatura ±1°C</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-volume-off text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Silencioso</h6>
                <p class="card-text small mb-0">Operación ultra-silenciosa</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-primary bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-calendar-week text-primary fs-3 mb-2"></i>
                <h6 class="card-title text-primary">Durabilidad</h6>
                <p class="card-text small mb-0">Mayor vida útil del compresor</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Especialistas certificados en tecnología inverter
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="https://wa.me/18297470675" class="btn btn-warning" target="_blank">
              <i class="bi bi-snow me-1"></i>Consultar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 5 - Protectores de Voltaje -->
<div class="modal fade" id="modalServicio5" tabindex="-1" aria-labelledby="modalServicio5Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-danger text-white rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio5Label">
          <i class="bi bi-plug me-2"></i>Protección Eléctrica Profesional
        </h5>
        <button type="button" class="btn-close btn-close-white position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/pexels-pixabay-257736.jpg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-danger mb-3" alt="Protectores de Voltaje" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(220,53,69,0.2);">
              <div class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill">
                <i class="bi bi-shield-fill-check me-1"></i>Protección Certificada
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-danger fw-bold mb-3"><i class="bi bi-shield-shaded me-2"></i>Protege tu Inversión</h6>
              <p class="fs-6 text-dark mb-3">
                En República Dominicana, las <strong>fluctuaciones eléctricas</strong> son una de las principales causas de daño en equipos electrónicos. Nuestros <span class="text-danger fw-semibold">protectores certificados</span> salvaguardan tu inversión contra sobrevoltajes, bajones y cortes abruptos de energía.
              </p>
            </div>

            <!-- Tipos de Protección -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <div class="card border-danger border-opacity-25 h-100">
                  <div class="card-header bg-danger bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-danger mb-0"><i class="bi bi-house me-1"></i>Residencial</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-dot text-danger"></i>Aires acondicionados</li>
                      <li><i class="bi bi-dot text-danger"></i>Neveras y lavadoras</li>
                      <li><i class="bi bi-dot text-danger"></i>Equipos de entretenimiento</li>
                      <li><i class="bi bi-dot text-danger"></i>Computadoras y electrónicos</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-warning border-opacity-25 h-100">
                  <div class="card-header bg-warning bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-warning mb-0"><i class="bi bi-building me-1"></i>Comercial</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-dot text-warning"></i>Sistemas HVAC industriales</li>
                      <li><i class="bi bi-dot text-warning"></i>Equipos de refrigeración</li>
                      <li><i class="bi bi-dot text-warning"></i>Sistemas de cómputo</li>
                      <li><i class="bi bi-dot text-warning"></i>Maquinaria especializada</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Problemas que Evitamos -->
            <div class="mb-4">
              <h6 class="text-dark fw-bold mb-3"><i class="bi bi-exclamation-octagon me-2"></i>Problemas que Prevenimos</h6>
              <div class="row g-2">
                <div class="col<?php ?>
<!-- Modales Mejorados -->
<!-- Modal Servicio 1 - Reparación de Tarjetas -->
<div class="modal fade" id="modalServicio1" tabindex="-1" aria-labelledby="modalServicio1Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-primary text-white rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio1Label">
          <i class="bi bi-cpu me-2"></i>Reparación Especializada de Tarjetas Electrónicas
        </h5>
        <button type="button" class="btn-close btn-close-white position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/taller1.JPG" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-primary mb-3" alt="Reparación de Tarjetas" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(0,123,255,0.2);">
              <div class="badge bg-primary-subtle text-primary px-3 py-2 rounded-pill">
                <i class="bi bi-award me-1"></i>Especialistas Certificados
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-primary fw-bold mb-3"><i class="bi bi-gear-fill me-2"></i>Servicios Especializados</h6>
              <p class="fs-6 text-dark mb-3">
                Nuestro equipo de <strong>ingenieros especializados</strong> en electrónica digital ofrece diagnóstico y reparación profesional de tarjetas para aires acondicionados inverter, utilizando <span class="text-primary fw-semibold">tecnología de vanguardia</span> y repuestos originales.
              </p>
            </div>
            
            <!-- Tipos de Reparación -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <div class="card border-primary border-opacity-25 h-100">
                  <div class="card-body p-3">
                    <h6 class="card-title text-primary mb-2"><i class="bi bi-circuit-board me-2"></i>Tarjetas Inverter</h6>
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Módulos de potencia</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Controladoras principales</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Sensores de temperatura</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-success border-opacity-25 h-100">
                  <div class="card-body p-3">
                    <h6 class="card-title text-success mb-2"><i class="bi bi-tools me-2"></i>Reparaciones</h6>
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Componentes SMD</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Microprocesadores</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Fuentes de alimentación</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Proceso de Trabajo -->
            <div class="accordion accordion-flush" id="accordionReparacion">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseReparacion" aria-expanded="false">
                    <i class="bi bi-list-check me-2 text-primary"></i><strong>Proceso de Reparación</strong>
                  </button>
                </h2>
                <div id="collapseReparacion" class="accordion-collapse collapse" data-bs-parent="#accordionReparacion">
                  <div class="accordion-body">
                    <div class="row g-2">
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-primary bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-primary">1</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Diagnóstico</small>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-info bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-info">2</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Cotización</small>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-warning bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-warning">3</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Reparación</small>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-success">4</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Pruebas</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Información Adicional -->
        <div class="row g-3 mt-3">
          <div class="col-md-4">
            <div class="card bg-primary bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-clock-history text-primary fs-3 mb-2"></i>
                <h6 class="card-title text-primary">Tiempo Promedio</h6>
                <p class="card-text small mb-0">2-5 días hábiles según complejidad</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-shield-check text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Garantía</h6>
                <p class="card-text small mb-0">90 días en reparaciones</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-telephone text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Soporte</h6>
                <p class="card-text small mb-0">Asesoría post-reparación</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Diagnóstico gratuito sin compromiso
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="https://wa.me/18297470675" class="btn btn-primary" target="_blank">
              <i class="bi bi-whatsapp me-1"></i>Consultar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 2 - Mantenimiento Preventivo -->
<div class="modal fade" id="modalServicio2" tabindex="-1" aria-labelledby="modalServicio2Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-success text-white rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio2Label">
          <i class="bi bi-tools me-2"></i>Mantenimiento Preventivo Integral
        </h5>
        <button type="button" class="btn-close btn-close-white position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/mantenimiento-electronico.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-success mb-3" alt="Mantenimiento Preventivo" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(40,167,69,0.2);">
              <div class="badge bg-success-subtle text-success px-3 py-2 rounded-pill">
                <i class="bi bi-calendar-check me-1"></i>Programación Flexible
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-success fw-bold mb-3"><i class="bi bi-shield-plus me-2"></i>Protege tu Inversión</h6>
              <p class="fs-6 text-dark mb-3">
                Nuestro programa de <strong>mantenimiento preventivo</strong> está diseñado para maximizar la vida útil de tus equipos, reducir costos operativos y prevenir fallas costosas. <span class="text-success fw-semibold">Ahorra hasta un 40%</span> en reparaciones futuras.
              </p>
            </div>

            <!-- Planes de Mantenimiento -->
            <div class="row g-3 mb-4">
              <div class="col-md-4">
                <div class="card border-success border-opacity-25 h-100">
                  <div class="card-header bg-success bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-success mb-0 text-center"><i class="bi bi-calendar me-1"></i>Básico</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Limpieza general</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Inspección visual</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Medición básica</li>
                    </ul>
                    <div class="text-center mt-2">
                      <small class="text-muted">Cada 6 meses</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card border-warning border-opacity-25 h-100">
                  <div class="card-header bg-warning bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-warning mb-0 text-center"><i class="bi bi-star me-1"></i>Premium</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Todo lo del básico</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Análisis termográfico</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Calibración sensores</li>
                    </ul>
                    <div class="text-center mt-2">
                      <small class="text-muted">Cada 4 meses</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card border-primary border-opacity-25 h-100">
                  <div class="card-header bg-primary bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-primary mb-0 text-center"><i class="bi bi-gem me-1"></i>Enterprise</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check2 text-success me-1"></i>Todo lo del premium</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Monitoreo remoto</li>
                      <li><i class="bi bi-check2 text-success me-1"></i>Soporte 24/7</li>
                    </ul>
                    <div class="text-center mt-2">
                      <small class="text-muted">Cada 2 meses</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Checklist de Mantenimiento -->
            <div class="accordion accordion-flush" id="accordionMantenimiento">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseMantenimiento" aria-expanded="false">
                    <i class="bi bi-clipboard-check me-2 text-success"></i><strong>Checklist Completo</strong>
                  </button>
                </h2>
                <div id="collapseMantenimiento" class="accordion-collapse collapse" data-bs-parent="#accordionMantenimiento">
                  <div class="accordion-body">
                    <div class="row">
                      <div class="col-md-6">
                        <h6 class="text-primary mb-2">Limpieza Especializada</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Serpentines evaporador y condensador</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Filtros de aire y drenajes</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Ventiladores y turbinas</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Compartimento eléctrico</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <h6 class="text-info mb-2">Verificaciones Técnicas</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Presiones del sistema</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Temperaturas de operación</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Conexiones eléctricas</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Funcionamiento de controles</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Beneficios -->
        <div class="row g-3 mt-3">
          <div class="col-md-3">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-piggy-bank text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Ahorro</h6>
                <p class="card-text small mb-0">Hasta 40% menos en reparaciones</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-primary bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-speedometer2 text-primary fs-3 mb-2"></i>
                <h6 class="card-title text-primary">Eficiencia</h6>
                <p class="card-text small mb-0">Optimiza el rendimiento energético</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-calendar-plus text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Vida Útil</h6>
                <p class="card-text small mb-0">Extiende la durabilidad del equipo</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-warning bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-file-text text-warning fs-3 mb-2"></i>
                <h6 class="card-title text-warning">Reportes</h6>
                <p class="card-text small mb-0">Informes detallados post-servicio</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Evaluación inicial gratuita para empresas
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="https://wa.me/18297470675" class="btn btn-success" target="_blank">
              <i class="bi bi-calendar-plus me-1"></i>Programar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 3 - Componentes -->
<div class="modal fade" id="modalServicio3" tabindex="-1" aria-labelledby="modalServicio3Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-info text-white rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio3Label">
          <i class="bi bi-box-seam me-2"></i>Componentes y Repuestos Especializados
        </h5>
        <button type="button" class="btn-close btn-close-white position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/dispositivos2.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-info mb-3" alt="Componentes" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(23,162,184,0.2);">
              <div class="badge bg-info-subtle text-info px-3 py-2 rounded-pill">
                <i class="bi bi-patch-check me-1"></i>Repuestos Originales
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-info fw-bold mb-3"><i class="bi bi-gems me-2"></i>Catálogo Especializado</h6>
              <p class="fs-6 text-dark mb-3">
                Disponemos de un <strong>amplio inventario</strong> de componentes originales y compatibles para sistemas de climatización y refrigeración. Todos nuestros repuestos cuentan con <span class="text-info fw-semibold">certificación de calidad</span> y garantía de fábrica.
              </p>
            </div>

            <!-- Categorías de Componentes -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <div class="card border-info border-opacity-25 h-100">
                  <div class="card-header bg-info bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-info mb-0"><i class="bi bi-cpu me-1"></i>Electrónicos</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-dot text-info"></i>Tarjetas controladoras</li>
                      <li><i class="bi bi-dot text-info"></i>Sensores de temperatura</li>
                      <li><i class="bi bi-dot text-info"></i>Displays y controles</li>
                      <li><i class="bi bi-dot text-info"></i>Módulos inverter</li>
                      <li><i class="bi bi-dot text-info"></i>Transformadores</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-primary border-opacity-25 h-100">
                  <div class="card-header bg-primary bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-primary mb-0"><i class="bi bi-gear me-1"></i>Mecánicos</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-dot text-primary"></i>Compresores inverter</li>
                      <li><i class="bi bi-dot text-primary"></i>Ventiladores EC</li>
                      <li><i class="bi bi-dot text-primary"></i>Válvulas expansión</li>
                      <li><i class="bi bi-dot text-primary"></i>Filtros deshidratadores</li>
                      <li><i class="bi bi-dot text-primary"></i>Serpentines</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Marcas Disponibles -->
            <div class="mb-4">
              <h6 class="text-dark fw-bold mb-3"><i class="bi bi-building me-2"></i>Marcas Principales</h6>
              <div class="row g-2">
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Samsung</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">LG</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Daikin</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Midea</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Gree</div>
                </div>
                <div class="col-4 col-md-2">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Carrier</div>
                </div>
              </div>
            </div>

            <!-- Proceso de Pedido -->
            <div class="accordion accordion-flush" id="accordionComponentes">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseComponentes" aria-expanded="false">
                    <i class="bi bi-cart-check me-2 text-info"></i><strong>Proceso de Pedido</strong>
                  </button>
                </h2>
                <div id="collapseComponentes" class="accordion-collapse collapse" data-bs-parent="#accordionComponentes">
                  <div class="accordion-body">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <div class="d-flex align-items-start">
                          <div class="flex-shrink-0">
                            <div class="rounded-circle bg-info bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                              <i class="bi bi-search text-info"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Identificación</h6>
                            <small class="text-muted">Identifica el modelo exacto y número de serie de tu equipo</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="d-flex align-items-start">
                          <div class="flex-shrink-0">
                            <div class="rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                              <i class="bi bi-chat-dots text-primary"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Consulta</h6>
                            <small class="text-muted">Contáctanos con los datos del componente necesario</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="d-flex align-items-start">
                          <div class="flex-shrink-0">
                            <div class="rounded-circle bg-warning bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                              <i class="bi bi-clock text-warning"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Disponibilidad</h6>
                            <small class="text-muted">Verificamos stock y tiempo de entrega</small>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="d-flex align-items-start">
                          <div class="flex-shrink-0">
                            <div class="rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                              <i class="bi bi-truck text-success"></i>
                            </div>
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-1">Entrega</h6>
                            <small class="text-muted">Envío a domicilio o recogida en taller</small>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Servicios Adicionales -->
        <div class="row g-3 mt-3">
          <div class="col-md-3">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-truck text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Envío</h6>
                <p class="card-text small mb-0">Delivery en Santo Domingo</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-primary bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-tools text-primary fs-3 mb-2"></i>
                <h6 class="card-title text-primary">Instalación</h6>
                <p class="card-text small mb-0">Servicio técnico incluido</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-shield-check text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Garantía</h6>
                <p class="card-text small mb-0">Hasta 2 años según producto</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-warning bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-headset text-warning fs-3 mb-2"></i>
                <h6 class="card-title text-warning">Asesoría</h6>
                <p class="card-text small mb-0">Soporte técnico especializado</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Cotización gratuita • Precios competitivos
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="https://wa.me/18297470675" class="btn btn-info" target="_blank">
              <i class="bi bi-cart-plus me-1"></i>Cotizar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 4 - Tarjetas de Neveras Inverter -->
<div class="modal fade" id="modalServicio4" tabindex="-1" aria-labelledby="modalServicio4Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-warning text-dark rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio4Label">
          <i class="bi bi-snow me-2"></i>Especialistas en Neveras Inverter
        </h5>
        <button type="button" class="btn-close position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/Samsung-refrigerator.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-warning mb-3" alt="Neveras Inverter" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(255,193,7,0.2);">
              <div class="badge bg-warning-subtle text-warning px-3 py-2 rounded-pill">
                <i class="bi bi-thermometer-snow me-1"></i>Tecnología Inverter
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-warning fw-bold mb-3"><i class="bi bi-snow2 me-2"></i>Refrigeración Inteligente</h6>
              <p class="fs-6 text-dark mb-3">
                Especializados en <strong>diagnóstico y reparación</strong> de tarjetas electrónicas para neveras inverter. Nuestro equipo domina la tecnología de <span class="text-warning fw-semibold">control variable de velocidad</span> que optimiza el consumo energético y mejora la conservación de alimentos.
              </p>
            </div>

            <!-- Problemas Comunes -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <div class="card border-danger border-opacity-25 h-100">
                  <div class="card-header bg-danger bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-danger mb-0"><i class="bi bi-exclamation-triangle me-1"></i>Fallas Frecuentes</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-x-circle text-danger me-1"></i>No enfría correctamente</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Ruidos anormales</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Display con errores</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Consumo excesivo</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Ciclos irregulares</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-success border-opacity-25 h-100">
                  <div class="card-header bg-success bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-success mb-0"><i class="bi bi-wrench me-1"></i>Nuestras Soluciones</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-check-circle text-success me-1"></i>Reparación de inverter</li>
                      <li><i class="bi bi-check-circle text-success me-1"></i>Calibración de sensores</li>
                      <li><i class="bi bi-check-circle text-success me-1"></i>Actualización firmware</li>
                      <li><i class="bi bi-check-circle text-success me-1"></i>Optimización energética</li>
                      <li><i class="bi bi-check-circle text-success me-1"></i>Prevención de fallas</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Marcas Especializadas -->
            <div class="mb-4">
              <h6 class="text-dark fw-bold mb-3"><i class="bi bi-snow me-2"></i>Marcas Especializadas</h6>
              <div class="row g-2">
                <div class="col-6 col-md-3">
                  <div class="card border-0 bg-white shadow-sm">
                    <div class="card-body p-2 text-center">
                      <strong class="text-primary">Samsung</strong>
                      <br><small class="text-muted">Twin Cooling Plus</small>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="card border-0 bg-white shadow-sm">
                    <div class="card-body p-2 text-center">
                      <strong class="text-success">LG</strong>
                      <br><small class="text-muted">Linear Inverter</small>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="card border-0 bg-white shadow-sm">
                    <div class="card-body p-2 text-center">
                      <strong class="text-warning">Whirlpool</strong>
                      <br><small class="text-muted">6th Sense</small>
                    </div>
                  </div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="card border-0 bg-white shadow-sm">
                    <div class="card-body p-2 text-center">
                      <strong class="text-info">Mabe</strong>
                      <br><small class="text-muted">Twin Tech</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Tecnologías -->
            <div class="accordion accordion-flush" id="accordionNeveras">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNeveras" aria-expanded="false">
                    <i class="bi bi-cpu-fill me-2 text-warning"></i><strong>Tecnologías que Manejamos</strong>
                  </button>
                </h2>
                <div id="collapseNeveras" class="accordion-collapse collapse" data-bs-parent="#accordionNeveras">
                  <div class="accordion-body">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <h6 class="text-primary mb-2">Control Inverter</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Modulación PWM avanzada</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Control de velocidad variable</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Sensores de temperatura digital</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <h6 class="text-success mb-2">Sistemas Inteligentes</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Auto-diagnóstico de fallas</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Optimización automática</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Conectividad WiFi/IoT</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Ventajas del Servicio -->
        <div class="row g-3 mt-3">
          <div class="col-md-3">
            <div class="card bg-warning bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-lightning-charge text-warning fs-3 mb-2"></i>
                <h6 class="card-title text-warning">Eficiencia</h6>
                <p class="card-text small mb-0">Hasta 60% menos consumo energético</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-thermometer-half text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Precisión</h6>
                <p class="card-text small mb-0">Control de temperatura ±1°C</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-volume-off text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Silencioso</h6>
                <p class="card-text small mb-0">Operación ultra-silenciosa</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-primary bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-calendar-week text-primary fs-3 mb-2"></i>
                <h6 class="card-title text-primary">Durabilidad</h6>
                <p class="card-text small mb-0">Mayor vida útil del compresor</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Especialistas certificados en tecnología inverter
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="https://wa.me/18297470675" class="btn btn-warning" target="_blank">
              <i class="bi bi-snow me-1"></i>Consultar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 5 - Protectores de Voltaje -->
<div class="modal fade" id="modalServicio5" tabindex="-1" aria-labelledby="modalServicio5Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-danger text-white rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio5Label">
          <i class="bi bi-plug me-2"></i>Protección Eléctrica Profesional
        </h5>
        <button type="button" class="btn-close btn-close-white position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/pexels-pixabay-257736.jpg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-danger mb-3" alt="Protectores de Voltaje" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(220,53,69,0.2);">
              <div class="badge bg-danger-subtle text-danger px-3 py-2 rounded-pill">
                <i class="bi bi-shield-fill-check me-1"></i>Protección Certificada
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-danger fw-bold mb-3"><i class="bi bi-shield-shaded me-2"></i>Protege tu Inversión</h6>
              <p class="fs-6 text-dark mb-3">
                En República Dominicana, las <strong>fluctuaciones eléctricas</strong> son una de las principales causas de daño en equipos electrónicos. Nuestros <span class="text-danger fw-semibold">protectores certificados</span> salvaguardan tu inversión contra sobrevoltajes, bajones y cortes abruptos de energía.
              </p>
            </div>

            <!-- Tipos de Protección -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <div class="card border-danger border-opacity-25 h-100">
                  <div class="card-header bg-danger bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-danger mb-0"><i class="bi bi-house me-1"></i>Residencial</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-dot text-danger"></i>Aires acondicionados</li>
                      <li><i class="bi bi-dot text-danger"></i>Neveras y lavadoras</li>
                      <li><i class="bi bi-dot text-danger"></i>Equipos de entretenimiento</li>
                      <li><i class="bi bi-dot text-danger"></i>Computadoras y electrónicos</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-warning border-opacity-25 h-100">
                  <div class="card-header bg-warning bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-warning mb-0"><i class="bi bi-building me-1"></i>Comercial</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-dot text-warning"></i>Sistemas HVAC industriales</li>
                      <li><i class="bi bi-dot text-warning"></i>Equipos de refrigeración</li>
                      <li><i class="bi bi-dot text-warning"></i>Sistemas de cómputo</li>
                      <li><i class="bi bi-dot text-warning"></i>Maquinaria especializada</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Problemas que Evitamos -->
            <div class="mb-4">
              <h6 class="text-dark fw-bold mb-3"><i class="bi bi-exclamation-octagon me-2"></i>Problemas que Prevenimos</h6>
              <div class="row g-2">
                <div class="col-6 col-md-3">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Daños por picos</div>
                </div>
                <div class="col-6 col-md-3">        
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Cortes abruptos</div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Sobrecalentamiento</div>
                </div>
                <div class="col-6 col-md-3">
                  <div class="badge bg-light text-dark border p-2 w-100 text-center">Fluctuaciones</div>
                </div>
              </div>
            </div>

            <!-- Tipos de Protectores -->
            <div class="accordion accordion-flush" id="accordionProtectores">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProtectores" aria-expanded="false">
                    <i class="bi bi-shield-fill-plus me-2 text-danger"></i><strong>Tipos de Protectores</strong>
                  </button>
                </h2>
                <div id="collapseProtectores" class="accordion-collapse collapse" data-bs-parent="#accordionProtectores">
                  <div class="accordion-body">
                    <div class="row g-3">
                      <div class="col-md-6">
                        <h6 class="text-primary mb-2">Protectores Básicos</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Supresores de picos</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Filtros de línea</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Reguladores de voltaje</li>
                        </ul>
                      </div>
                      <div class="col-md-6">
                        <h6 class="text-warning mb-2">Protectores Avanzados</h6>
                        <ul class="list-unstyled small">
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>UPS con estabilizador</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Protectores trifásicos</li>
                          <li><i class="bi bi-arrow-right text-muted me-1"></i>Sistemas de monitoreo</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Características -->
        <div class="row g-3 mt-3">
          <div class="col-md-3">
            <div class="card bg-danger bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-lightning text-danger fs-3 mb-2"></i>
                <h6 class="card-title text-danger">Respuesta Rápida</h6>
                <p class="card-text small mb-0">Protección en microsegundos</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-warning bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-graph-up text-warning fs-3 mb-2"></i>
                <h6 class="card-title text-warning">Monitoreo</h6>
                <p class="card-text small mb-0">Displays LED informativos</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-award text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Certificados</h6>
                <p class="card-text small mb-0">Normas internacionales</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-gear text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Instalación</h6>
                <p class="card-text small mb-0">Configuración profesional</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Evaluación gratuita de riesgo eléctrico
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="https://wa.me/18297470675" class="btn btn-danger" target="_blank">
              <i class="bi bi-shield-check me-1"></i>Proteger
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 6 - Urgencias -->
<div class="modal fade" id="modalServicio6" tabindex="-1" aria-labelledby="modalServicio6Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-dark text-white rounded-top-4 position-relative overflow-hidden">
        <div class="position-absolute top-0 start-0 w-100 h-100 opacity-25" style="background: linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)), linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%, transparent 75%, rgba(255,255,255,0.1) 75%, rgba(255,255,255,0.1)); background-size: 20px 20px; background-position: 0 0, 10px 10px;"></div>
        <h5 class="modal-title fw-bold position-relative" id="modalServicio6Label">
          <i class="bi bi-exclamation-triangle me-2"></i>Servicio de Urgencias 24/7
        </h5>
        <button type="button" class="btn-close btn-close-white position-relative" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <div class="row g-4">
          <div class="col-lg-5">
            <div class="text-center">
              <img src="img/urgencia-electronica.png" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-dark mb-3" alt="Servicio de Urgencias" style="height: 280px; object-fit: cover; box-shadow: 0 8px 32px rgba(33,37,41,0.2);">
              <div class="badge bg-dark-subtle text-dark px-3 py-2 rounded-pill">
                <i class="bi bi-clock me-1"></i>Disponible 24/7
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="mb-4">
              <h6 class="text-dark fw-bold mb-3"><i class="bi bi-lightning-charge me-2"></i>Respuesta Inmediata</h6>
              <p class="fs-6 text-dark mb-3">
                Entendemos que las fallas en equipos de climatización pueden ser <strong>críticas</strong>, especialmente en horarios fuera de oficina. Nuestro servicio de <span class="text-dark fw-semibold">urgencias 24/7</span> garantiza respuesta rápida para emergencias que no pueden esperar.
              </p>
            </div>

            <!-- Tipos de Urgencias -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <div class="card border-danger border-opacity-25 h-100">
                  <div class="card-header bg-danger bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-danger mb-0"><i class="bi bi-fire me-1"></i>Emergencias Críticas</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Falla total del sistema</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Ruidos extraños peligrosos</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Olores a quemado</li>
                      <li><i class="bi bi-x-circle text-danger me-1"></i>Chispas o humo</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="card border-warning border-opacity-25 h-100">
                  <div class="card-header bg-warning bg-opacity-10 border-0 py-2">
                    <h6 class="card-title text-warning mb-0"><i class="bi bi-clock-history me-1"></i>Urgencias Comerciales</h6>
                  </div>
                  <div class="card-body p-3">
                    <ul class="list-unstyled small mb-0">
                      <li><i class="bi bi-exclamation-triangle text-warning me-1"></i>Restaurantes y hoteles</li>
                      <li><i class="bi bi-exclamation-triangle text-warning me-1"></i>Centros de datos</li>
                      <li><i class="bi bi-exclamation-triangle text-warning me-1"></i>Clínicas y hospitales</li>
                      <li><i class="bi bi-exclamation-triangle text-warning me-1"></i>Tiendas y oficinas</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

            <!-- Proceso de Urgencia -->
            <div class="accordion accordion-flush" id="accordionUrgencias">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUrgencias" aria-expanded="false">
                    <i class="bi bi-stopwatch me-2 text-dark"></i><strong>Protocolo de Urgencia</strong>
                  </button>
                </h2>
                <div id="collapseUrgencias" class="accordion-collapse collapse" data-bs-parent="#accordionUrgencias">
                  <div class="accordion-body">
                    <div class="row g-2">
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-danger bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-danger">1</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Llamada inmediata</small>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-warning bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-warning">2</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Evaluación remota</small>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-info bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-info">3</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Despacho técnico</small>
                        </div>
                      </div>
                      <div class="col-6 col-md-3">
                        <div class="text-center p-2">
                          <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <span class="fw-bold text-success">4</span>
                          </div>
                          <small class="d-block mt-2 text-muted">Solución rápida</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Tiempos de Respuesta -->
        <div class="row g-3 mt-3">
          <div class="col-md-3">
            <div class="card bg-danger bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-stopwatch text-danger fs-3 mb-2"></i>
                <h6 class="card-title text-danger">Zona Metropolitana</h6>
                <p class="card-text small mb-0">30-60 minutos</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-warning bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-geo-alt text-warning fs-3 mb-2"></i>
                <h6 class="card-title text-warning">Gran Santo Domingo</h6>
                <p class="card-text small mb-0">1-2 horas</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-info bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-telephone text-info fs-3 mb-2"></i>
                <h6 class="card-title text-info">Línea Directa</h6>
                <p class="card-text small mb-0">829-596-5912</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card bg-success bg-opacity-5 border-0 h-100">
              <div class="card-body text-center">
                <i class="bi bi-tools text-success fs-3 mb-2"></i>
                <h6 class="card-title text-success">Herramientas</h6>
                <p class="card-text small mb-0">Equipamiento completo</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4 border-top-0">
        <div class="d-flex flex-wrap gap-2 w-100 justify-content-between align-items-center">
          <div class="text-muted small">
            <i class="bi bi-info-circle me-1"></i>Tarifas especiales aplican en horario nocturno y fines de semana
          </div>
          <div>
            <button type="button" class="btn btn-outline-secondary me-2" data-bs-dismiss="modal">Cerrar</button>
            <a href="tel:8295965912" class="btn btn-dark" target="_blank">
              <i class="bi bi-telephone me-1"></i>Urgencia
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>