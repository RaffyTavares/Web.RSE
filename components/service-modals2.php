<?php ?>
<!-- Modales Mejorados con Información Valiosa -->

<!-- Modal Servicio 1 - Reparación de Tarjetas -->
<div class="modal fade" id="modalServicio1" tabindex="-1" aria-labelledby="modalServicio1Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio1Label">
          <i class="bi bi-cpu-fill me-2"></i>Reparación de Tarjetas Electrónicas
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/taller1.JPG" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-primary" alt="Reparación de Tarjetas" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-primary fw-bold mb-3"><i class="bi bi-info-circle me-2"></i>Servicio Especializado</h6>
            <p class="fs-6 text-dark mb-3">
              Ofrecemos <strong>diagnóstico y reparación profesional</strong> de tarjetas electrónicas para aires acondicionados inverter, neveras, lavadoras y equipos industriales. Utilizamos tecnología avanzada como osciloscopios digitales, estaciones de soldadura SMD y herramientas de diagnóstico especializadas.
            </p>
          </div>
          <div class="col-lg-4">
            <!-- Información Rápida -->
            <div class="card border-primary h-100">
              <div class="card-header bg-primary text-white">
                <h6 class="mb-0"><i class="bi bi-clock me-2"></i>Información Rápida</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Tiempo:</strong> 2-5 días hábiles</p>
                <p class="mb-2"><strong>Garantía:</strong> 6 meses</p>
                <p class="mb-2"><strong>Precio base:</strong> $50 - $150</p>
                <p class="mb-0"><strong>Diagnóstico:</strong> GRATIS</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tipos de Fallas que Reparamos -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-primary fw-bold mb-3"><i class="bi bi-wrench me-2"></i>Fallas Comunes que Reparamos</h6>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Falla en módulo IPM (Intelligent Power Module)</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sensores de temperatura dañados</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Problemas de comunicación entre tarjetas</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Componentes SMD quemados</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Fallas en fuentes de alimentación</li>
              <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Problemas en control de velocidad del ventilador</li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6 class="text-primary fw-bold mb-3"><i class="bi bi-gear me-2"></i>Equipos que Atendemos</h6>
            <ul class="list-unstyled">
              <li class="mb-2"><i class="bi bi-snow2 text-info me-2"></i> Aires acondicionados inverter (todas las marcas)</li>
              <li class="mb-2"><i class="bi bi-thermometer-snow text-info me-2"></i> Neveras inverter Samsung, LG, Whirlpool</li>
              <li class="mb-2"><i class="bi bi-droplet text-info me-2"></i> Lavadoras inverter</li>
              <li class="mb-2"><i class="bi bi-lightning-charge text-info me-2"></i> Variadores de frecuencia industriales</li>
              <li class="mb-2"><i class="bi bi-cpu text-info me-2"></i> Tarjetas controladoras personalizadas</li>
            </ul>
          </div>
        </div>

        <!-- Proceso de Reparación -->
        <div class="mb-4">
          <h6 class="text-primary fw-bold mb-3"><i class="bi bi-diagram-3 me-2"></i>Nuestro Proceso de Trabajo</h6>
          <div class="row">
            <div class="col-md-3 text-center mb-3">
              <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>1</strong>
              </div>
              <h6 class="fw-bold">Diagnóstico</h6>
              <p class="small">Análisis completo con instrumentos especializados</p>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>2</strong>
              </div>
              <h6 class="fw-bold">Presupuesto</h6>
              <p class="small">Cotización detallada sin compromiso</p>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>3</strong>
              </div>
              <h6 class="fw-bold">Reparación</h6>
              <p class="small">Trabajo con componentes originales</p>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>4</strong>
              </div>
              <h6 class="fw-bold">Pruebas</h6>
              <p class="small">Verificación completa antes de entrega</p>
            </div>
          </div>
        </div>

        <!-- Precios Detallados -->
        <div class="mb-4">
          <h6 class="text-primary fw-bold mb-3"><i class="bi bi-currency-dollar me-2"></i>Tabla de Precios</h6>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead class="table-primary">
                <tr>
                  <th>Tipo de Reparación</th>
                  <th>Precio Base</th>
                  <th>Tiempo Estimado</th>
                  <th>Garantía</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Cambio de componentes básicos</td>
                  <td>$50 - $80</td>
                  <td>1-2 días</td>
                  <td>6 meses</td>
                </tr>
                <tr>
                  <td>Reparación módulo IPM</td>
                  <td>$100 - $150</td>
                  <td>3-5 días</td>
                  <td>6 meses</td>
                </tr>
                <tr>
                  <td>Reballing/microsoldadura</td>
                  <td>$80 - $120</td>
                  <td>2-4 días</td>
                  <td>3 meses</td>
                </tr>
                <tr>
                  <td>Reparación compleja/multi-falla</td>
                  <td>$120 - $200</td>
                  <td>5-7 días</td>
                  <td>6 meses</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Advertencia y Términos -->
        <div class="alert alert-warning" role="alert">
          <h6 class="alert-heading"><i class="bi bi-exclamation-triangle me-2"></i>Importante</h6>
          <p class="mb-0">Los precios pueden variar según la complejidad de la falla y disponibilidad de componentes. El diagnóstico es gratuito y sin compromiso. La garantía no cubre daños por mal uso o fluctuaciones eléctricas externas.</p>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, necesito información sobre reparación de tarjetas electrónicas" 
             target="_blank" class="btn btn-success">
            <i class="bi bi-whatsapp me-2"></i>Consultar por WhatsApp
          </a>
          <a href="#contacto" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="bi bi-calendar-check me-2"></i>Agendar Cita
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 2 - Mantenimiento Preventivo -->
<div class="modal fade" id="modalServicio2" tabindex="-1" aria-labelledby="modalServicio2Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #28a745 0%, #155724 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio2Label">
          <i class="bi bi-tools me-2"></i>Mantenimiento Preventivo Profesional
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/mantenimiento-electronico.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-success" alt="Mantenimiento Preventivo" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-success fw-bold mb-3"><i class="bi bi-shield-check me-2"></i>¿Por qué es Importante?</h6>
            <p class="fs-6 text-dark mb-3">
              El mantenimiento preventivo es <strong>la clave para evitar reparaciones costosas</strong>. Nuestro servicio especializado incluye limpieza profunda, verificación de componentes, ajuste de parámetros y actualización de firmware cuando es necesario. <span class="text-success fw-bold">Prevenir es 5 veces más económico que reparar</span>.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="card border-success h-100">
              <div class="card-header bg-success text-white">
                <h6 class="mb-0"><i class="bi bi-calendar-check me-2"></i>Información del Servicio</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Duración:</strong> 1-2 horas</p>
                <p class="mb-2"><strong>Frecuencia:</strong> Cada 6 meses</p>
                <p class="mb-2"><strong>Precio:</strong> $75 - $120</p>
                <p class="mb-0"><strong>Incluye:</strong> Informe técnico</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Qué Incluye el Servicio -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-success fw-bold mb-3"><i class="bi bi-list-check me-2"></i>Checklist de Mantenimiento</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item border-0 ps-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <strong>Limpieza profunda:</strong> Filtros, serpentines, ventiladores
              </li>
              <li class="list-group-item border-0 ps-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <strong>Revisión eléctrica:</strong> Conexiones, cables, terminales
              </li>
              <li class="list-group-item border-0 ps-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <strong>Prueba de sensores:</strong> Temperatura, presión, flujo
              </li>
              <li class="list-group-item border-0 ps-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <strong>Verificación de tarjetas:</strong> Componentes visuales y funcionales
              </li>
              <li class="list-group-item border-0 ps-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <strong>Ajuste de parámetros:</strong> Temperaturas, velocidades, presiones
              </li>
              <li class="list-group-item border-0 ps-0">
                <i class="bi bi-check-circle-fill text-success me-2"></i>
                <strong>Pruebas funcionales:</strong> Ciclos completos de operación
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6 class="text-success fw-bold mb-3"><i class="bi bi-award me-2"></i>Beneficios Comprobados</h6>
            <div class="row text-center">
              <div class="col-6 mb-3">
                <div class="bg-success bg-opacity-10 p-3 rounded-3">
                  <h3 class="text-success fw-bold mb-1">30%</h3>
                  <small>Menos consumo de energía</small>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="bg-success bg-opacity-10 p-3 rounded-3">
                  <h3 class="text-success fw-bold mb-1">50%</h3>
                  <small>Reducción de fallas</small>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="bg-success bg-opacity-10 p-3 rounded-3">
                  <h3 class="text-success fw-bold mb-1">2x</h3>
                  <small>Mayor vida útil</small>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="bg-success bg-opacity-10 p-3 rounded-3">
                  <h3 class="text-success fw-bold mb-1">60%</h3>
                  <small>Mejor rendimiento</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Planes de Mantenimiento -->
        <div class="mb-4">
          <h6 class="text-success fw-bold mb-3"><i class="bi bi-calendar-range me-2"></i>Planes de Mantenimiento</h6>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card h-100 border-success">
                <div class="card-header bg-success text-white text-center">
                  <h6 class="mb-0">Plan Básico</h6>
                </div>
                <div class="card-body text-center">
                  <h4 class="text-success">$75</h4>
                  <p class="small">Por equipo / cada 6 meses</p>
                  <ul class="list-unstyled small">
                    <li>✓ Limpieza básica</li>
                    <li>✓ Revisión visual</li>
                    <li>✓ Pruebas básicas</li>
                    <li>✓ Informe simple</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card h-100 border-success shadow">
                <div class="card-header bg-success text-white text-center">
                  <h6 class="mb-0">Plan Profesional 
                    <span class="badge bg-warning text-dark ms-1">Popular</span>
                  </h6>
                </div>
                <div class="card-body text-center">
                  <h4 class="text-success">$100</h4>
                  <p class="small">Por equipo / cada 4 meses</p>
                  <ul class="list-unstyled small">
                    <li>✓ Limpieza profunda</li>
                    <li>✓ Revisión eléctrica completa</li>
                    <li>✓ Ajuste de parámetros</li>
                    <li>✓ Informe detallado</li>
                    <li>✓ Recomendaciones</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card h-100 border-success">
                <div class="card-header bg-success text-white text-center">
                  <h6 class="mb-0">Plan Premium</h6>
                </div>
                <div class="card-body text-center">
                  <h4 class="text-success">$120</h4>
                  <p class="small">Por equipo / cada 3 meses</p>
                  <ul class="list-unstyled small">
                    <li>✓ Todo lo del Plan Profesional</li>
                    <li>✓ Monitoreo remoto básico</li>
                    <li>✓ Prioridad en reparaciones</li>
                    <li>✓ 15% desc. en repuestos</li>
                    <li>✓ Soporte telefónico</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Cuando Hacer Mantenimiento -->
        <div class="alert alert-info" role="alert">
          <h6 class="alert-heading"><i class="bi bi-info-circle me-2"></i>¿Cuándo Hacer Mantenimiento?</h6>
          <div class="row">
            <div class="col-md-6">
              <strong>Señales de que necesitas mantenimiento:</strong>
              <ul class="mb-0 mt-2">
                <li>Aumento en el consumo eléctrico</li>
                <li>Ruidos extraños o vibraciones</li>
                <li>Enfriamiento/calentamiento irregular</li>
                <li>Olores desagradables</li>
              </ul>
            </div>
            <div class="col-md-6">
              <strong>Frecuencia recomendada:</strong>
              <ul class="mb-0 mt-2">
                <li>Residencial: Cada 6 meses</li>
                <li>Comercial: Cada 3-4 meses</li>
                <li>Industrial: Cada 2-3 meses</li>
                <li>Ambientes polvorientos: Mensual</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, quiero agendar mantenimiento preventivo para mis equipos" 
             target="_blank" class="btn btn-success">
            <i class="bi bi-whatsapp me-2"></i>Agendar WhatsApp
          </a>
          <a href="#contacto" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="bi bi-calendar-plus me-2"></i>Plan de Mantenimiento
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Continúo con los demás modales... -->
<!-- Modal Servicio 3 - Componentes -->
<div class="modal fade" id="modalServicio3" tabindex="-1" aria-labelledby="modalServicio3Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #17a2b8 0%, #0c5460 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio3Label">
          <i class="bi bi-box-seam me-2"></i>Venta de Componentes Electrónicos
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen y descripción principal -->
        <div class="row mb-4">
          <div class="col-lg-6">
            <img src="img/dispositivos2.jpeg" class="img-fluid rounded-4 shadow border border-3 border-info w-100" alt="Componentes" style="height: 300px; object-fit: cover;">
          </div>
          <div class="col-lg-6">
            <h6 class="text-info fw-bold mb-3"><i class="bi bi-award me-2"></i>Componentes Certificados</h6>
            <p class="fs-6 text-dark mb-3">
              Manejamos <strong>componentes originales y certificados</strong> de las mejores marcas mundiales. Nuestro inventario incluye desde componentes básicos hasta módulos especializados para equipos inverter de alta gama.
            </p>
            <div class="row text-center">
              <div class="col-4">
                <h4 class="text-info mb-1">500+</h4>
                <small>Referencias en stock</small>
              </div>
              <div class="col-4">
                <h4 class="text-info mb-1">98%</h4>
                <small>Disponibilidad</small>
              </div>
              <div class="col-4">
                <h4 class="text-info mb-1">24h</h4>
                <small>Entrega local</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Catálogo de Componentes -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-info fw-bold mb-3"><i class="bi bi-grid me-2"></i>Componentes Disponibles</h6>
            
            <div class="accordion" id="componentesAccordion">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#modulosIPM">
                    <i class="bi bi-cpu me-2"></i>Módulos IPM y Drivers
                  </button>
                </h2>
                <div id="modulosIPM" class="accordion-collapse collapse" data-bs-parent="#componentesAccordion">
                  <div class="accordion-body small">
                    <ul class="mb-0">
                      <li>Mitsubishi: PM15RSK060, PM25RSK120, PM50RSK060</li>
                      <li>Fuji: 7MBR15SA120, 7MBR25SA120, 7MBR50SA060</li>
                      <li>Semikron: SKM50GB063D, SKM75GB176D</li>
                      <li>Drivers: IR2110, IR2130, FAN7392</li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sensores">
                    <i class="bi bi-thermometer me-2"></i>Sensores y Detectores
                  </button>
                </h2>
                <div id="sensores" class="accordion-collapse collapse" data-bs-parent="#componentesAccordion">
                  <div class="accordion-body small">
                    <ul class="mb-0">
                      <li>Sensores de temperatura: NTC 10K, 50K, PT1000</li>
                      <li>Sensores de presión: 0-5V, 4-20mA</li>
                      <li>Hall sensors: ACS712, ACS758, CSLA2EN</li>
                      <li>Termostatos: KSD301, KSD9700</li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#microcontroladores">
                    <i class="bi bi-motherboard me-2"></i>Microcontroladores
                  </button>
                </h2>
                <div id="microcontroladores" class="accordion-collapse collapse" data-bs-parent="#componentesAccordion">
                  <div class="accordion-body small">
                    <ul class="mb-0">
                      <li>Renesas: R8C/23, R8C/24, RX210, RX621</li>
                      <li>Microchip: PIC18F, PIC24F, dsPIC33F</li>
                      <li>STM: STM32F103, STM32F407</li>
                      <li>Memorias EEPROM: 24C02, 24C08, 24C16</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <h6 class="text-info fw-bold mb-3"><i class="bi bi-tags me-2"></i>Precios Competitivos</h6>
            <div class="table-responsive">
              <table class="table table-sm table-hover">
                <thead class="table-info">
                  <tr>
                    <th>Categoría</th>
                    <th>Rango de Precios</th>
                    <th>Disponibilidad</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Módulos IPM</td>
                    <td>$25 - $180</td>
                    <td><span class="badge bg-success">Alta</span></td>
                  </tr>
                  <tr>
                    <td>Sensores NTC</td>
                    <td>$3 - $15</td>
                    <td><span class="badge bg-success">Alta</span></td>
                  </tr>
                  <tr>
                    <td>Microcontroladores</td>
                    <td>$5 - $35</td>
                    <td><span class="badge bg-warning">Media</span></td>
                  </tr>
                  <tr>
                    <td>Drivers</td>
                    <td>$2 - $12</td>
                    <td><span class="badge bg-success">Alta</span></td>
                  </tr>
                  <tr>
                    <td>Capacitores</td>
                    <td>$1 - $25</td>
                    <td><span class="badge bg-success">Alta</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <!-- Marcas que Manejamos -->
            <h6 class="text-info fw-bold mb-3 mt-4"><i class="bi bi-building me-2"></i>Marcas Certificadas</h6>
            <div class="row text-center">
              <div class="col-3 mb-2">
                <div class="bg-info bg-opacity-10 p-2 rounded">
                  <small><strong>Mitsubishi</strong></small>
                </div>
              </div>
              <div class="col-3 mb-2">
                <div class="bg-info bg-opacity-10 p-2 rounded">
                  <small><strong>Fuji</strong></small>
                </div>
              </div>
              <div class="col-3 mb-2">
                <div class="bg-info bg-opacity-10 p-2 rounded">
                  <small><strong>Infineon</strong></small>
                </div>
              </div>
              <div class="col-3 mb-2">
                <div class="bg-info bg-opacity-10 p-2 rounded">
                  <small><strong>Semikron</strong></small>
                </div>
              </div>
              <div class="col-3 mb-2">
                <div class="bg-info bg-opacity-10 p-2 rounded">
                  <small><strong>IR/Infineon</strong></small>
                </div>
              </div>
              <div class="col-3 mb-2">
                <div class="bg-info bg-opacity-10 p-2 rounded">
                  <small><strong>Vishay</strong></small>
                </div>
              </div>
              <div class="col-3 mb-2">
                <div class="bg-info bg-opacity-10 p-2 rounded">
                  <small><strong>Renesas</strong></small>
                </div>
              </div>
              <div class="col-3 mb-2">
                <div class="bg-info bg-opacity-10 p-2 rounded">
                  <small><strong>STM</strong></small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Servicios Adicionales -->
        <div class="row mb-4">
          <div class="col-md-4">
            <div class="card border-info h-100">
              <div class="card-body text-center">
                <i class="bi bi-truck text-info mb-3" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Entrega Express</h6>
                <p class="small mb-0">Entrega en 24-48 horas en Santiago y Santo Domingo. Envíos a todo el país.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-info h-100">
              <div class="card-body text-center">
                <i class="bi bi-search text-info mb-3" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Búsqueda Especializada</h6>
                <p class="small mb-0">Si no tenemos el componente, lo conseguimos en máximo 7 días.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-info h-100">
              <div class="card-body text-center">
                <i class="bi bi-tools text-info mb-3" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Instalación</h6>
                <p class="small mb-0">Servicio de instalación profesional disponible (+$20-50).</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Descuentos y Promociones -->
        <div class="alert alert-info" role="alert">
          <h6 class="alert-heading"><i class="bi bi-percent me-2"></i>Descuentos Especiales</h6>
          <div class="row">
            <div class="col-md-6">
              <ul class="mb-0">
                <li><strong>5% descuento:</strong> Compras mayores a $100</li>
                <li><strong>10% descuento:</strong> Compras mayores a $300</li>
                <li><strong>15% descuento:</strong> Técnicos registrados</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="mb-0">
                <li><strong>Precio especial:</strong> Compras al por mayor</li>
                <li><strong>Crédito:</strong> Para empresas establecidas</li>
                <li><strong>Garantía:</strong> 6 meses en todos los componentes</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, necesito consultar disponibilidad de componentes" 
             target="_blank" class="btn btn-info">
            <i class="bi bi-whatsapp me-2"></i>Catálogo WhatsApp
          </a>
          <a href="#contacto" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="bi bi-cart-plus me-2"></i>Solicitar Cotización
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Continuaré con los demás modales si deseas... -->


<!-- Modales Mejorados con Información Valiosa -->

<!-- Modal Servicio 4 - Tarjetas de Neveras Inverter -->
<div class="modal fade" id="modalServicio4" tabindex="-1" aria-labelledby="modalServicio4Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio4Label">
          <i class="bi bi-snow me-2"></i>Reparación de Tarjetas de Neveras Inverter
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/Inverter_Samsung.JPG" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-warning" alt="Tarjetas Neveras Inverter" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-gear-wide-connected me-2"></i>Especialistas en Neveras Inverter</h6>
            <p class="fs-6 text-dark mb-3">
              Somos <strong>especialistas certificados en reparación</strong> de tarjetas electrónicas para neveras inverter, especialmente <strong>Samsung, LG y Whirlpool</strong>. Utilizamos herramientas especializadas para diagnóstico y reparación de sistemas de control avanzados.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="card border-warning h-100">
              <div class="card-header bg-warning text-dark">
                <h6 class="mb-0"><i class="bi bi-info-circle me-2"></i>Datos del Servicio</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Tiempo:</strong> 3-7 días hábiles</p>
                <p class="mb-2"><strong>Garantía:</strong> 6 meses</p>
                <p class="mb-2"><strong>Precio:</strong> $80 - $200</p>
                <p class="mb-0"><strong>Éxito:</strong> 95% de casos</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Marcas y Modelos -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-list-stars me-2"></i>Marcas Especializadas</h6>
            <div class="row">
              <div class="col-6 mb-3">
                <div class="card border-warning h-100">
                  <div class="card-body text-center p-3">
                    <i class="bi bi-star-fill text-warning mb-2" style="font-size: 1.5rem;"></i>
                    <h6 class="mb-1">Samsung</h6>
                    <small class="text-muted">Twin Cooling, Digital Inverter</small>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="card border-warning h-100">
                  <div class="card-body text-center p-3">
                    <i class="bi bi-star-fill text-warning mb-2" style="font-size: 1.5rem;"></i>
                    <h6 class="mb-1">LG</h6>
                    <small class="text-muted">Linear Compressor, Smart ThinQ</small>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="card border-warning h-100">
                  <div class="card-body text-center p-3">
                    <i class="bi bi-star-fill text-warning mb-2" style="font-size: 1.5rem;"></i>
                    <h6 class="mb-1">Whirlpool</h6>
                    <small class="text-muted">6th Sense, Adaptive Intelligence</small>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="card border-warning h-100">
                  <div class="card-body text-center p-3">
                    <i class="bi bi-star-fill text-warning mb-2" style="font-size: 1.5rem;"></i>
                    <h6 class="mb-1">Otras</h6>
                    <small class="text-muted">Mabe, Frigidaire, Electrolux</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-exclamation-triangle me-2"></i>Fallas Comunes</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>No enfría:</strong> Problemas en control de compresor
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>Códigos de error:</strong> E1, E2, 1E, 5E, OF OF
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>No congela:</strong> Falla en sensores NTC
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>Ruido extraño:</strong> Control de ventiladores dañado
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>Consumo alto:</strong> Módulo inverter defectuoso
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>No responde:</strong> Microcontrolador dañado
              </li>
            </ul>
          </div>
        </div>

        <!-- Componentes que Reparamos -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-cpu me-2"></i>Componentes que Reparamos</h6>
          <div class="row">
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-motherboard text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Tarjeta Principal</h6>
                <small>Control general y comunicación</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-lightning-charge text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Módulo Inverter</h6>
                <small>Control de compresor variable</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-thermometer text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Sensores NTC</h6>
                <small>Temperatura y descongelamiento</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-display text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Display</h6>
                <small>Panel de control y mostrado</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Precios por Tipo de Reparación -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-currency-dollar me-2"></i>Precios por Tipo de Falla</h6>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead class="table-warning">
                <tr>
                  <th>Tipo de Falla</th>
                  <th>Componentes</th>
                  <th>Precio</th>
                  <th>Tiempo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sensores NTC dañados</td>
                  <td>Sensores de temperatura</td>
                  <td>$80 - $120</td>
                  <td>2-3 días</td>
                </tr>
                <tr>
                  <td>Problemas de display</td>
                  <td>Panel control, conectores</td>
                  <td>$90 - $140</td>
                  <td>3-4 días</td>
                </tr>
                <tr>
                  <td>Falla módulo inverter</td>
                  <td>IPM, drivers, capacitores</td>
                  <td>$120 - $180</td>
                  <td>5-7 días</td>
                </tr>
                <tr>
                  <td>Microcontrolador</td>
                  <td>MCU, memoria, cristales</td>
                  <td>$100 - $200</td>
                  <td>4-6 días</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Proceso Especializado -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-gear-fill me-2"></i>Nuestro Proceso Especializado</h6>
          <div class="row">
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>1</strong>
              </div>
              <h6 class="fw-bold">Recepción</h6>
              <p class="small">Identificación de modelo y síntomas</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>2</strong>
              </div>
              <h6 class="fw-bold">Diagnóstico</h6>
              <p class="small">Análisis con equipos especializados</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>3</strong>
              </div>
              <h6 class="fw-bold">Cotización</h6>
              <p class="small">Presupuesto detallado sin compromiso</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>4</strong>
              </div>
              <h6 class="fw-bold">Reparación</h6>
              <p class="small">Trabajo con componentes originales</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>5</strong>
              </div>
              <h6 class="fw-bold">Pruebas</h6>
              <p class="small">Simulación de condiciones reales</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>6</strong>
              </div>
              <h6 class="fw-bold">Entrega</h6>
              <p class="small">Con certificado de funcionamiento</p>
            </div>
          </div>
        </div>

        <!-- Advertencias Importantes -->
        <div class="alert alert-warning" role="alert">
          <h6 class="alert-heading"><i class="bi bi-exclamation-triangle me-2"></i>Información Importante</h6>
          <div class="row">
            <div class="col-md-6">
              <p><strong>Antes de traer tu nevera:</strong></p>
              <ul class="mb-0">
                <li>Anota el modelo exacto de la nevera</li>
                <li>Describe detalladamente los síntomas</li>
                <li>Trae foto de los códigos de error si aparecen</li>
                <li>Informa si hubo cortes de luz recientes</li>
              </ul>
            </div>
            <div class="col-md-6">
              <p><strong>Nuestra garantía incluye:</strong></p>
              <ul class="mb-0">
                <li>6 meses en reparaciones completas</li>
                <li>3 meses en cambio de componentes</li>
                <li>Soporte técnico post-reparación</li>
                <li>No aplica por daños externos</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, necesito reparar la tarjeta de mi nevera inverter. Modelo:" 
             target="_blank" class="btn btn-warning">
            <i class="bi bi-whatsapp me-2"></i>Consultar por WhatsApp
          </a>
          <a href="#contacto" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="bi bi-calendar-check me-2"></i>Agendar Revisión
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 5 - Protectores de Voltaje -->
<div class="modal fade" id="modalServicio5" tabindex="-1" aria-labelledby="modalServicio5Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #dc3545 0%, #b02a37 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio5Label">
          <i class="bi bi-shield-check me-2"></i>Protectores de Voltaje - Venta e Instalación
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/protector-voltaje.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-danger" alt="Protectores de Voltaje" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-danger fw-bold mb-3"><i class="bi bi-shield-fill-exclamation me-2"></i>Protección Esencial</h6>
            <p class="fs-6 text-dark mb-3">
              Los <strong>protectores de voltaje son esenciales</strong> en República Dominicana por las fluctuaciones constantes de la red eléctrica. Instalamos protectores certificados que <span class="text-danger fw-bold">pueden ahorrar miles de pesos</span> en reparaciones futuras.
            </p>
            <div class="row text-center">
              <div class="col-3">
                <h4 class="text-danger mb-1">70%</h4>
                <small>Menos averías</small>
              </div>
              <div class="col-3">
                <h4 class="text-danger mb-1">2x</h4>
                <small>Vida útil</small>
              </div>
              <div class="col-3">
                <h4 class="text-danger mb-1">100%</h4>
                <small>Certificados</small>
              </div>
              <div class="col-3">
                <h4 class="text-danger mb-1">24h</h4>
                <small>Instalación</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-danger h-100">
              <div class="card-header bg-danger text-white">
                <h6 class="mb-0"><i class="bi bi-lightning-charge me-2"></i>Rangos de Protección</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Residencial:</strong> 90V - 270V</p>
                <p class="mb-2"><strong>Comercial:</strong> 95V - 260V</p>
                <p class="mb-2"><strong>Industrial:</strong> 100V - 250V</p>
                <p class="mb-0"><strong>Respuesta:</strong> < 0.1 segundos</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tipos de Protectores -->
        <div class="row mb-4">
          <div class="col-md-4 mb-3">
            <div class="card border-danger h-100">
              <div class="card-header bg-danger text-white text-center">
                <h6 class="mb-0">Protector Básico</h6>
              </div>
              <div class="card-body text-center">
                <i class="bi bi-shield text-danger mb-3" style="font-size: 3rem;"></i>
                <h5 class="text-danger">$120 - $180</h5>
                <p class="small">Instalación incluida</p>
                <ul class="list-unstyled small text-start">
                  <li>✓ Protección 90V - 270V</li>
                  <li>✓ Display digital</li>
                  <li>✓ Hasta 20A (4,400W)</li>
                  <li>✓ Garantía 2 años</li>
                  <li>✓ Ideal para neveras y A/C pequeños</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border-danger h-100 shadow">
              <div class="card-header bg-danger text-white text-center">
                <h6 class="mb-0">Protector Avanzado 
                  <span class="badge bg-warning text-dark ms-1">Popular</span>
                </h6>
              </div>
              <div class="card-body text-center">
                <i class="bi bi-shield-fill-check text-danger mb-3" style="font-size: 3rem;"></i>
                <h5 class="text-danger">$200 - $280</h5>
                <p class="small">Instalación y configuración</p>
                <ul class="list-unstyled small text-start">
                  <li>✓ Protección 95V - 260V ajustable</li>
                  <li>✓ Display LCD multifunción</li>
                  <li>✓ Hasta 30A (6,600W)</li>
                  <li>✓ Retardo programable</li>
                  <li>✓ Protección contra rayos</li>
                  <li>✓ Garantía 3 años</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border-danger h-100">
              <div class="card-header bg-danger text-white text-center">
                <h6 class="mb-0">Protector Profesional</h6>
              </div>
              <div class="card-body text-center">
                <i class="bi bi-shield-fill-plus text-danger mb-3" style="font-size: 3rem;"></i>
                <h5 class="text-danger">$350 - $500</h5>
                <p class="small">Instalación y programación</p>
                <ul class="list-unstyled small text-start">
                  <li>✓ Protección 100V - 250V precisión</li>
                  <li>✓ Comunicación WiFi/Bluetooth</li>
                  <li>✓ Hasta 60A (13,200W)</li>
                  <li>✓ Monitoreo remoto</li>
                  <li>✓ Protección integral</li>
                  <li>✓ Garantía 5 años</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Por qué es Necesario en RD -->
        <div class="mb-4">
          <h6 class="text-danger fw-bold mb-3"><i class="bi bi-exclamation-triangle-fill me-2"></i>¿Por qué es Crítico en República Dominicana?</h6>
          <div class="row">
            <div class="col-md-6">
              <div class="alert alert-light border-danger">
                <h6 class="text-danger"><i class="bi bi-graph-down-arrow me-2"></i>Problemas de la Red Eléctrica:</h6>
                <ul class="mb-0 small">
                  <li><strong>Bajo voltaje (80-100V):</strong> Daña compresores y motores</li>
                  <li><strong>Alto voltaje (250-300V):</strong> Quema tarjetas electrónicas</li>
                  <li><strong>Fluctuaciones:</strong> Constantes variaciones de voltaje</li>
                  <li><strong>Apagones frecuentes:</strong> Golpes de corriente al regresar</li>
                  <li><strong>Ruido eléctrico:</strong> Interfiere con equipos electrónicos</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="alert alert-success border-success">
                <h6 class="text-success"><i class="bi bi-shield-check me-2"></i>Beneficios del Protector:</h6>
                <ul class="mb-0 small">
                  <li><strong>Desconexión automática:</strong> Ante voltaje peligroso</li>
                  <li><strong>Reconexión inteligente:</strong> Cuando el voltaje se normaliza</li>
                  <li><strong>Protección total:</strong> Neveras, A/C, electrónicos</li>
                  <li><strong>Ahorro garantizado:</strong> Evita reparaciones costosas</li>
                  <li><strong>Tranquilidad:</strong> 24/7 sin preocupaciones</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Instalación Profesional -->
        <div class="mb-4">
          <h6 class="text-danger fw-bold mb-3"><i class="bi bi-tools me-2"></i>Proceso de Instalación</h6>
          <div class="row">
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>1</strong>
              </div>
              <h6 class="fw-bold">Evaluación</h6>
              <p class="small">Análisis eléctrico del lugar</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>2</strong>
              </div>
              <h6 class="fw-bold">Selección</h6>
              <p class="small">Protector ideal según carga</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>3</strong>
              </div>
              <h6 class="fw-bold">Instalación</h6>
              <p class="small">Montaje y conexiones seguras</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>4</strong>
              </div>
              <h6 class="fw-bold">Configuración</h6>
              <p class="small">Ajuste de parámetros</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>5</strong>
              </div>
              <h6 class="fw-bold">Pruebas</h6>
              <p class="small">Verificación completa</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>6</strong>
              </div>
              <h6 class="fw-bold">Capacitación</h6>
              <p class="small">Uso y mantenimiento</p>
            </div>
          </div>
        </div>

        <!-- Calculadora de Ahorro -->
        <div class="alert alert-info" role="alert">
          <h6 class="alert-heading"><i class="bi bi-calculator me-2"></i>Calculadora de Ahorro</h6>
          <p><strong>Ejemplo real:</strong> Una nevera inverter sin protector que se dañe por voltaje puede costar <span class="text-danger fw-bold">$150-300</span> en reparación. Un protector de $180 se paga solo con <strong>una sola reparación evitada</strong>.</p>
          <div class="row text-center mt-3">
            <div class="col-md-3">
              <h5 class="text-success mb-0">$180</h5>
              <small>Inversión inicial</small>
            </div>
            <div class="col-md-3">
              <h5 class="text-danger mb-0">$300</h5>
              <small>Costo reparación evitada</small>
            </div>
            <div class="col-md-3">
              <h5 class="text-warning mb-0">$500+</h5>
              <small>Ahorro en 2 años</small>
            </div>
            <div class="col-md-3">
              <h5 class="text-info mb-0">67%</h5>
              <small>ROI primer año</small>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, quiero información sobre protectores de voltaje para mis equipos" 
             target="_blank" class="btn btn-danger">
            <i class="bi bi-whatsapp me-2"></i>Cotizar WhatsApp
          </a>
          <a href="#contacto" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="bi bi-calendar-plus me-2"></i>Agendar Instalación
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 6 - Monitoreo Inteligente -->
<div class="modal fade" id="modalServicio6" tabindex="-1" aria-labelledby="modalServicio6Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #17a2b8 0%, #117a8b 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio6Label">
          <i class="bi bi-wifi me-2"></i>Sistemas de Monitoreo Inteligente IoT
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/monitoreo-inteligente.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-info" alt="Monitoreo Inteligente" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-info fw-bold mb-3"><i class="bi bi-cloud-check me-2"></i>Tecnología IoT Avanzada</h6>
            <p class="fs-6 text-dark mb-3">
              Implementamos <strong>sistemas de monitoreo inteligente</strong> que te permiten controlar y supervisar tus equipos de climatización desde cualquier lugar del mundo. Utilizamos sensores IoT de última generación y plataformas en la nube para <span class="text-info fw-bold">optimizar eficiencia y prevenir fallas</span>.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="card border-info h-100">
              <div class="card-header bg-info text-white">
                <h6 class="mb-0"><i class="bi bi-graph-up me-2"></i>Beneficios Medibles</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Ahorro energético:</strong> 20-35%</p>
                <p class="mb-2"><strong>Reducción fallas:</strong> 60%</p>
                <p class="mb-2"><strong>Vida útil:</strong> +40%</p>
                <p class="mb-0"><strong>ROI:</strong> 12-18 meses</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Componentes del Sistema -->
        <div class="row mb-4">
          <div class="col-md-4 mb-3">
            <div class="card border-info h-100">
              <div class="card-body text-center">
                <i class="bi bi-thermometer-half text-info mb-3" style="font-size: 3rem;"></i>
                <h6 class="fw-bold">Sensores Ambientales</h6>
                <ul class="list-unstyled small text-start">
                  <li>• Temperatura interior/exterior</li>
                  <li>• Humedad relativa</li>
                  <li>• Calidad del aire (CO₂)</li>
                  <li>• Presión atmosférica</li>
                  <li>• Detección de movimiento</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border-info h-100">
              <div class="card-body text-center">
                <i class="bi bi-lightning-charge text-info mb-3" style="font-size: 3rem;"></i>
                <h6 class="fw-bold">Monitoreo Eléctrico</h6>
                <ul class="list-unstyled small text-start">
                  <li>• Consumo en tiempo real</li>
                  <li>• Voltaje y corriente</li>
                  <li>• Factor de potencia</li>
                  <li>• Detección de fallas eléctricas</li>
                  <li>• Análisis de eficiencia</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border-info h-100">
              <div class="card-body text-center">
                <i class="bi bi-gear-wide-connected text-info mb-3" style="font-size: 3rem;"></i>
                <h6 class="fw-bold">Control de Equipos</h6>
                <ul class="list-unstyled small text-start">
                  <li>• Encendido/apagado remoto</li>
                  <li>• Programación horaria</li>
                  <li>• Ajuste de temperatura</li>
                  <li>• Modos de operación</li>
                  <li>• Mantenimiento predictivo</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Planes de Monitoreo -->
        <div class="mb-4">
          <h6 class="text-info fw-bold mb-3"><i class="bi bi-layers me-2"></i>Planes de Monitoreo Inteligente</h6>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card border-info h-100">
                <div class="card-header bg-info text-white text-center">
                  <h6 class="mb-0">Plan Básico</h6>
                </div>
                <div class="card-body text-center">
                  <h5 class="text-info">$200</h5>
                  <p class="small">+ $15/mes monitoreo</p>
                  <ul class="list-unstyled small text-start">
                    <li>✓ 3 sensores básicos</li>
                    <li>✓ App móvil</li>
                    <li>✓ Alertas por email/SMS</li>
                    <li>✓ Reportes semanales</li>
                    <li>✓ Control básico ON/OFF</li>
                    <li>✓ Soporte por chat</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card border-info h-100 shadow">
                <div class="card-header bg-info text-white text-center">
                  <h6 class="mb-0">Plan Profesional 
                    <span class="badge bg-warning text-dark ms-1">Recomendado</span>
                  </h6>
                </div>
                <div class="card-body text-center">
                  <h5 class="text-info">$350</h5>
                  <p class="small">+ $25/mes monitoreo</p>
                  <ul class="list-unstyled small text-start">
                    <li>✓ Todo del Plan Básico</li>
                    <li>✓ 8 sensores avanzados</li>
                    <li>✓ Dashboard web completo</li>
                    <li>✓ Control avanzado temperatura</li>
                    <li>✓ Programación horaria</li>
                    <li>✓ Análisis de eficiencia</li>
                    <li>✓ Soporte técnico priorizado</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card border-info h-100">
                <div class="card-header bg-info text-white text-center">
                  <h6 class="mb-0">Plan Empresarial</h6>
                </div>
                <div class="card-body text-center">
                  <h5 class="text-info">$500</h5>
                  <p class="small">+ $40/mes monitoreo</p>
                  <ul class="list-unstyled small text-start">
                    <li>✓ Todo del Plan Profesional</li>
                    <li>✓ Sensores ilimitados</li>
                    <li>✓ API para integración</li>
                    <li>✓ Mantenimiento predictivo</li>
                    <li>✓ Reportes personalizados</li>
                    <li>✓ Soporte 24/7</li>
                    <li>✓ Consultoría especializada</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Características de la App -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-info fw-bold mb-3"><i class="bi bi-phone me-2"></i>Aplicación Móvil</h6>
            <div class="row">
              <div class="col-6 text-center mb-3">
                <div class="bg-info bg-opacity-10 p-3 rounded-3">
                  <i class="bi bi-speedometer2 text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Dashboard</h6>
                  <small>Vista general en tiempo real</small>
                </div>
              </div>
              <div class="col-6 text-center mb-3">
                <div class="bg-info bg-opacity-10 p-3 rounded-3">
                  <i class="bi bi-bell text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Alertas</h6>
                  <small>Notificaciones inteligentes</small>
                </div>
              </div>
              <div class="col-6 text-center mb-3">
                <div class="bg-info bg-opacity-10 p-3 rounded-3">
                  <i class="bi bi-graph-up text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Estadísticas</h6>
                  <small>Histórico y tendencias</small>
                </div>
              </div>
              <div class="col-6 text-center mb-3">
                <div class="bg-info bg-opacity-10 p-3 rounded-3">
                  <i class="bi bi-gear text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Control</h6>
                  <small>Ajustes remotos</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h6 class="text-info fw-bold mb-3"><i class="bi bi-robot me-2"></i>Inteligencia Artificial</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-cpu text-info me-2"></i>
                <strong>Aprendizaje automático:</strong> Se adapta a tus patrones de uso
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-graph-up-arrow text-info me-2"></i>
                <strong>Optimización automática:</strong> Ajusta parámetros para máxima eficiencia
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-exclamation-triangle text-info me-2"></i>
                <strong>Detección de anomalías:</strong> Identifica problemas antes de que ocurran
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-calendar-check text-info me-2"></i>
                <strong>Mantenimiento predictivo:</strong> Programa mantenimientos óptimos
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-lightning-charge text-info me-2"></i>
                <strong>Gestión energética:</strong> Reduce consumo automáticamente
              </li>
            </ul>
          </div>
        </div>

        <!-- ROI y Casos de Éxito -->
        <div class="mb-4">
          <h6 class="text-info fw-bold mb-3"><i class="bi bi-trophy me-2"></i>Casos de Éxito</h6>
          <div class="row">
            <div class="col-md-4 text-center">
              <div class="card border-info">
                <div class="card-body">
                  <i class="bi bi-building text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Hotel 5 Estrellas</h6>
                  <p class="text-info h5">35% ahorro</p>
                  <small>120 habitaciones monitoreadas</small>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card border-info">
                <div class="card-body">
                  <i class="bi bi-shop text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Centro Comercial</h6>
                  <p class="text-info h5">28% ahorro</p>
                  <small>50 locales conectados</small>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card border-info">
                <div class="card-body">
                  <i class="bi bi-house text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Residencia</h6>
                  <p class="text-info h5">22% ahorro</p>
                  <small>Casa de 3 niveles</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Proceso de Implementación -->
        <div class="alert alert-info" role="alert">
          <h6 class="alert-heading"><i class="bi bi-clipboard-check me-2"></i>Proceso de Implementación</h6>
          <div class="row">
            <div class="col-md-6">
              <p><strong>Fase 1 - Análisis (Día 1):</strong></p>
              <ul class="small mb-3">
                <li>Evaluación técnica del sitio</li>
                <li>Análisis de consumos actuales</li>
                <li>Diseño del sistema personalizado</li>
                <li>Propuesta técnica y económica</li>
              </ul>
            </div>
            <div class="col-md-6">
              <p><strong>Fase 2 - Instalación (Días 2-3):</strong></p>
              <ul class="small mb-0">
                <li>Instalación de sensores y gateway</li>
                <li>Configuración de comunicaciones</li>
                <li>Integración con equipos existentes</li>
                <li>Capacitación y puesta en marcha</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, quiero información sobre sistemas de monitoreo inteligente para mis equipos" 
             target="_blank" class="btn btn-info">
            <i class="bi bi-whatsapp me-2"></i>Demo WhatsApp
          </a>
          <a href="#contacto" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="bi bi-calendar-star me-2"></i>Solicitar Evaluación
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 7 - Urgencias -->
<div class="modal fade" id="modalServicio7" tabindex="-1" aria-labelledby="modalServicio7Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-dark rounded-top-4" style="background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio7Label">
          <i class="bi bi-lightning me-2"></i>Servicio de Urgencias 24/7
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/urgencia-electronica.png" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-warning" alt="Urgencias 24/7" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-clock-fill me-2"></i>Atención de Emergencia</h6>
            <p class="fs-6 text-dark mb-3">
              Entendemos que las <strong>fallas de equipos no esperan</strong> y pueden ocurrir en los momentos más críticos. Nuestro servicio de urgencias 24/7 está <span class="text-warning fw-bold">listo para responder</span> cuando más lo necesitas, con técnicos especializados y repuestos en stock.
            </p>
            <div class="row text-center">
              <div class="col-3">
                <h4 class="text-warning mb-1">24/7</h4>
                <small>Disponibilidad</small>
              </div>
              <div class="col-3">
                <h4 class="text-warning mb-1">2hrs</h4>
                <small>Tiempo respuesta</small>
              </div>
              <div class="col-3">
                <h4 class="text-warning mb-1">95%</h4>
                <small>Resolución inmediata</small>
              </div>
              <div class="col-3">
                <h4 class="text-warning mb-1">100%</h4>
                <small>Garantía</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-warning h-100">
              <div class="card-header bg-warning text-dark">
                <h6 class="mb-0"><i class="bi bi-phone-vibrate me-2"></i>Contacto de Emergencia</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>WhatsApp:</strong> +1 (829) 747-0675</p>
                <p class="mb-2"><strong>Llamadas:</strong> +1 (829) 747-0675</p>
                <p class="mb-2"><strong>Email:</strong> urgencias@rse.com</p>
                <p class="mb-0"><strong>Horario:</strong> 24/7/365</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tipos de Emergencias -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-exclamation-triangle-fill me-2"></i>Emergencias que Atendemos</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-fire text-danger me-2"></i>
                <strong>Equipos sobrecalentados:</strong> Riesgo de incendio o explosión
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-lightning-charge-fill text-warning me-2"></i>
                <strong>Fallas eléctricas:</strong> Cortocircuitos o problemas de voltaje
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-thermometer-high text-danger me-2"></i>
                <strong>Pérdida de refrigeración:</strong> En cámaras frigoríficas o médicas
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-building text-info me-2"></i>
                <strong>Fallas en edificios:</strong> Sistemas centralizados sin funcionamiento
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-hospital text-success me-2"></i>
                <strong>Equipos críticos:</strong> Hospitales, centros de datos, laboratorios
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-shop text-primary me-2"></i>
                <strong>Comercios:</strong> Supermercados, restaurantes, hoteles
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-speedometer2 me-2"></i>Tiempos de Respuesta</h6>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead class="table-warning">
                  <tr>
                    <th>Tipo de Urgencia</th>
                    <th>Tiempo Respuesta</th>
                    <th>Costo Adicional</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="badge bg-danger">Crítica</span></td>
                    <td>30-60 minutos</td>
                    <td>+100%</td>
                  </tr>
                  <tr>
                    <td><span class="badge bg-warning text-dark">Alta</span></td>
                    <td>1-2 horas</td>
                    <td>+75%</td>
                  </tr>
                  <tr>
                    <td><span class="badge bg-info">Media</span></td>
                    <td>2-4 horas</td>
                    <td>+50%</td>
                  </tr>
                  <tr>
                    <td><span class="badge bg-success">Normal</span></td>
                    <td>4-8 horas</td>
                    <td>+25%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <!-- Servicios Incluidos -->
            <h6 class="text-warning fw-bold mb-3 mt-4"><i class="bi bi-check-circle-fill me-2"></i>Incluido en Urgencias</h6>
            <div class="row">
              <div class="col-6 mb-2">
                <div class="bg-warning bg-opacity-10 p-2 rounded text-center">
                  <small><strong>Diagnóstico Express</strong></small>
                </div>
              </div>
              <div class="col-6 mb-2">
                <div class="bg-warning bg-opacity-10 p-2 rounded text-center">
                  <small><strong>Reparación in-situ</strong></small>
                </div>
              </div>
              <div class="col-6 mb-2">
                <div class="bg-warning bg-opacity-10 p-2 rounded text-center">
                  <small><strong>Repuestos básicos</strong></small>
                </div>
              </div>
              <div class="col-6 mb-2">
                <div class="bg-warning bg-opacity-10 p-2 rounded text-center">
                  <small><strong>Solución temporal</strong></small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Herramientas de Emergencia -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-tools me-2"></i>Equipos de Emergencia Móvil</h6>
          <div class="row">
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-laptop text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Diagnóstico</h6>
                <small>Osciloscopio, multímetro, analizador</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-wrench-adjustable text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Herramientas</h6>
                <small>Kit completo de reparación</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-box-seam text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Repuestos</h6>
                <small>Stock de componentes críticos</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-lightning-charge text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Energía</h6>
                <small>Generador y herramientas eléctricas</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Protocolo de Atención -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-diagram-3 me-2"></i>Protocolo de Emergencia</h6>
          <div class="row">
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>1</strong>
              </div>
              <h6 class="fw-bold">Llamada</h6>
              <p class="small">Contacto inmediato 24/7</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>2</strong>
              </div>
              <h6 class="fw-bold">Evaluación</h6>
              <p class="small">Análisis rápido de urgencia</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>3</strong>
              </div>
              <h6 class="fw-bold">Movilización</h6>
              <p class="small">Técnico especialista en camino</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>4</strong>
              </div>
              <h6 class="fw-bold">Diagnóstico</h6>
              <p class="small">Evaluación in-situ rápida</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>5</strong>
              </div>
              <h6 class="fw-bold">Reparación</h6>
              <p class="small">Solución inmediata</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>6</strong>
              </div>
              <h6 class="fw-bold">Seguimiento</h6>
              <p class="small">Monitoreo post-servicio</p>
            </div>
          </div>
        </div>

        <!-- Casos de Emergencia Típicos -->
        <div class="alert alert-danger" role="alert">
          <h6 class="alert-heading"><i class="bi bi-exclamation-octagon me-2"></i>¿Cuándo Llamar a Urgencias?</h6>
          <div class="row">
            <div class="col-md-6">
              <p><strong>Situaciones críticas:</strong></p>
              <ul class="mb-0 small">
                <li>Olor a quemado o humo en equipos</li>
                <li>Equipos que no encienden después de apagón</li>
                <li>Ruidos extraños o vibraciones anormales</li>
                <li>Temperaturas extremas (muy caliente/frío)</li>
                <li>Chispas o descargas eléctricas</li>
              </ul>
            </div>
            <div class="col-md-6">
              <p><strong>Equipos críticos afectados:</strong></p>
              <ul class="mb-0 small">
                <li>Refrigeración médica o de alimentos</li>
                <li>Sistemas centrales de edificios</li>
                <li>Equipos de producción industrial</li>
                <li>Climatización en centros de datos</li>
                <li>Equipos en hospitales o clínicas</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- CTA Principal -->
        <div class="mt-4 p-4 bg-warning bg-opacity-10 rounded-4 border border-warning">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h5 class="mb-2 text-warning"><i class="bi bi-telephone-fill me-2"></i>Línea de Emergencias 24/7</h5>
              <p class="mb-0">¿Tienes una emergencia electrónica? Nuestros especialistas están listos para ayudarte las 24 horas del día, los 365 días del año.</p>
            </div>
            <div class="col-md-4 text-center">
              <a href="tel:+18297470675" class="btn btn-warning btn-lg fw-bold mb-2 w-100">
                <i class="bi bi-telephone me-2"></i>LLAMAR AHORA
              </a>
              <a href="https://wa.me/18297470675?text=🚨URGENCIA: Necesito atención inmediata para:" 
                 target="_blank" class="btn btn-outline-warning w-100">
                <i class="bi bi-whatsapp me-2"></i>WhatsApp Urgente
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=🚨URGENCIA: Tengo una emergencia con mis equipos" 
             target="_blank" class="btn btn-warning">
            <i class="bi bi-whatsapp me-2"></i>WhatsApp Urgente
          </a>
          <a href="tel:+18297470675" class="btn btn-danger">
            <i class="bi bi-telephone me-2"></i>Llamar Ahora
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 8 - Capacitación -->
<div class="modal fade" id="modalServicio8" tabindex="-1" aria-labelledby="modalServicio8Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #6c757d 0%, #495057 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio8Label">
          <i class="bi bi-mortarboard me-2"></i>Asesoría Técnica y Capacitación Profesional
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <div class="d-inline-block rounded-circle shadow-lg mb-3" style="background: linear-gradient(135deg, #6c757d 0%, #adb5bd 100%); width:150px; height:150px; display:flex; align-items:center; justify-content:center;">
            <i class="bi bi-mortarboard text-white" style="font-size: 4rem;"></i>
          </div>
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-award me-2"></i>Formación Especializada</h6>
            <p class="fs-6 text-dark mb-3">
              Ofrecemos <strong>capacitación técnica especializada</strong> en electrónica de potencia, tecnología inverter y reparación de equipos. Nuestros cursos están diseñados para <span class="text-secondary fw-bold">técnicos que buscan certificación profesional</span> y empresas que necesitan capacitar a su personal.
            </p>
            <div class="row text-center">
              <div class="col-3">
                <h4 class="text-secondary mb-1">500+</h4>
                <small>Técnicos formados</small>
              </div>
              <div class="col-3">
                <h4 class="text-secondary mb-1">4.9/5</h4>
                <small>Satisfacción</small>
              </div>
              <div class="col-3">
                <h4 class="text-secondary mb-1">95%</h4>
                <small>Tasa de empleo</small>
              </div>
              <div class="col-3">
                <h4 class="text-secondary mb-1">12</h4>
                <small>Años experiencia</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-secondary h-100">
              <div class="card-header bg-secondary text-white">
                <h6 class="mb-0"><i class="bi bi-calendar-check me-2"></i>Próximas Fechas</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Curso Básico:</strong> 15 Oct 2024</p>
                <p class="mb-2"><strong>Curso Intermedio:</strong> 5 Nov 2024</p>
                <p class="mb-2"><strong>Curso Avanzado:</strong> 20 Nov 2024</p>
                <p class="mb-0"><strong>Empresarial:</strong> Bajo demanda</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Programas de Capacitación -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-book me-2"></i>Programas Disponibles</h6>
            
            <div class="accordion" id="cursosAccordion">
              <div class="accordion-item border-secondary">
                <h6 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cursoBasico">
                    <i class="bi bi-cpu me-2"></i>Tecnología Inverter Básica
                  </button>
                </h6>
                <div id="cursoBasico" class="accordion-collapse collapse" data-bs-parent="#cursosAccordion">
                  <div class="accordion-body small">
                    <strong>Duración:</strong> 25 horas (1 semana)<br>
                    <strong>Modalidad:</strong> Presencial/Virtual<br>
                    <strong>Incluye:</strong>
                    <ul class="mt-2 mb-0">
                      <li>Fundamentos de tecnología inverter</li>
                      <li>Componentes principales y funcionamiento</li>
                      <li>Herramientas de diagnóstico básico</li>
                      <li>Práticas supervisadas</li>
                      <li>Certificado de participación</li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item border-secondary">
                <h6 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cursoIntermedio">
                    <i class="bi bi-tools me-2"></i>Reparación Avanzada
                  </button>
                </h6>
                <div id="cursoIntermedio" class="accordion-collapse collapse" data-bs-parent="#cursosAccordion">
                  <div class="accordion-body small">
                    <strong>Duración:</strong> 40 horas (2 semanas)<br>
                    <strong>Modalidad:</strong> Presencial<br>
                    <strong>Incluye:</strong>
                    <ul class="mt-2 mb-0">
                      <li>Diagnóstico avanzado con osciloscopio</li>
                      <li>Reparación de módulos IPM</li>
                      <li>Microsoldadura SMD</li>
                      <li>Casos reales de reparación</li>
                      <li>Certificado técnico profesional</li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item border-secondary">
                <h6 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cursoEspecialista">
                    <i class="bi bi-award me-2"></i>Especialista Certificado
                  </button>
                </h6>
                <div id="cursoEspecialista" class="accordion-collapse collapse" data-bs-parent="#cursosAccordion">
                  <div class="accordion-body small">
                    <strong>Duración:</strong> 60 horas (3 semanas)<br>
                    <strong>Modalidad:</strong> Presencial intensivo<br>
                    <strong>Incluye:</strong>
                    <ul class="mt-2 mb-0">
                      <li>Diseño de sistemas inverter</li>
                      <li>Programación de microcontroladores</li>
                      <li>Análisis de fallas complejas</li>
                      <li>Desarrollo de soluciones personalizadas</li>
                      <li>Certificación profesional reconocida</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-tags me-2"></i>Precios y Planes</h6>
            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="card border-secondary">
                  <div class="card-header bg-secondary text-white text-center">
                    <h6 class="mb-0">Curso Básico</h6>
                  </div>
                  <div class="card-body text-center">
                    <h4 class="text-secondary">$299</h4>
                    <p class="small">25 horas / 1 semana</p>
                    <ul class="list-unstyled small text-start">
                      <li>✓ Material digital incluido</li>
                      <li>✓ Certificado de participación</li>
                      <li>✓ Soporte 30 días</li>
                      <li>✓ Acceso a comunidad</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="card border-secondary shadow">
                  <div class="card-header bg-secondary text-white text-center">
                    <h6 class="mb-0">Curso Intermedio 
                      <span class="badge bg-warning text-dark ms-1">Popular</span>
                    </h6>
                  </div>
                  <div class="card-body text-center">
                    <h4 class="text-secondary">$499</h4>
                    <p class="small">40 horas / 2 semanas</p>
                    <ul class="list-unstyled small text-start">
                      <li>✓ Todo del curso básico</li>
                      <li>✓ Kit de herramientas incluido</li>
                      <li>✓ Prácticas con equipos reales</li>
                      <li>✓ Certificado técnico profesional</li>
                      <li>✓ Soporte 90 días</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="card border-secondary">
                  <div class="card-header bg-secondary text-white text-center">
                    <h6 class="mb-0">Curso Especialista</h6>
                  </div>
                  <div class="card-body text-center">
                    <h4 class="text-secondary">$799</h4>
                    <p class="small">60 horas / 3 semanas</p>
                    <ul class="list-unstyled small text-start">
                      <li>✓ Programa completo avanzado</li>
                      <li>✓ Certificación profesional</li>
                      <li>✓ Mentorías personalizadas</li>
                      <li>✓ Acceso al programa de empleos</li>
                      <li>✓ Soporte vitalicio</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Metodología -->
        <div class="mb-4">
          <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-diagram-3 me-2"></i>Nuestra Metodología</h6>
          <div class="row">
            <div class="col-md-3 text-center mb-3">
              <div class="bg-secondary bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-book text-secondary mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Teoría</h6>
                <small>Fundamentos técnicos sólidos y actualizados</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-secondary bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-tools text-secondary mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Práctica</h6>
                <small>Ejercicios reales con equipos profesionales</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-secondary bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-clipboard-check text-secondary mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Evaluación</h6>
                <small>Pruebas de competencia técnica</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-secondary bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-award text-secondary mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Certificación</h6>
                <small>Diploma reconocido en la industria</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonios y Estadísticas -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-chat-quote me-2"></i>Lo que Dicen Nuestros Estudiantes</h6>
            <div class="card border-secondary mb-3">
              <div class="card-body">
                <p class="small mb-2">"Excelente formación. Ahora trabajo como técnico especialista en una empresa importante. Los conocimientos son muy actuales."</p>
                <footer class="blockquote-footer small">
                  <cite title="Source Title">Carlos M. - Técnico Certificado 2023</cite>
                </footer>
              </div>
            </div>
            <div class="card border-secondary">
              <div class="card-body">
                <p class="small mb-2">"La parte práctica es increíble. Reparamos equipos reales desde el primer día. Me siento muy preparado."</p>
                <footer class="blockquote-footer small">
                  <cite title="Source Title">Ana R. - Especialista en Inverter 2023</cite>
                </footer>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-graph-up me-2"></i>Estadísticas de Éxito</h6>
            <div class="row text-center">
              <div class="col-6 mb-3">
                <div class="bg-secondary bg-opacity-10 p-3 rounded border border-secondary">
                  <h4 class="text-secondary mb-1">95%</h4>
                  <small>Tasa de empleo</small>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="bg-secondary bg-opacity-10 p-3 rounded border border-secondary">
                  <h4 class="text-secondary mb-1">85%</h4>
                  <small>Incremento salarial</small>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="bg-secondary bg-opacity-10 p-3 rounded border border-secondary">
                  <h4 class="text-secondary mb-1">4.9/5</h4>
                  <small>Calificación promedio</small>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="bg-secondary bg-opacity-10 p-3 rounded border border-secondary">
                  <h4 class="text-secondary mb-1">500+</h4>
                  <small>Egresados exitosos</small>
                </div>
              </div>
            </div>
            
            <!-- Empresas que Contratan -->
            <h6 class="text-secondary fw-bold mb-3 mt-4"><i class="bi bi-building me-2"></i>Empresas que Contratan</h6>
            <div class="row text-center">
              <div class="col-4 mb-2">
                <div class="bg-secondary bg-opacity-10 p-2 rounded">
                  <small><strong>Climatización Total</strong></small>
                </div>
              </div>
              <div class="col-4 mb-2">
                <div class="bg-secondary bg-opacity-10 p-2 rounded">
                  <small><strong>TecnoFrío</strong></small>
                </div>
              </div>
              <div class="col-4 mb-2">
                <div class="bg-secondary bg-opacity-10 p-2 rounded">
                  <small><strong>Servitec</strong></small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Facilidades y Beneficios -->
        <div class="alert alert-secondary" role="alert">
          <h6 class="alert-heading"><i class="bi bi-gift me-2"></i>Beneficios Incluidos</h6>
          <div class="row">
            <div class="col-md-6">
              <ul class="mb-0 small">
                <li><strong>Material didáctico:</strong> Manuales digitales y físicos</li>
                <li><strong>Herramientas:</strong> Kit básico para cursos presenciales</li>
                <li><strong>Laboratorio:</strong> Acceso a equipos profesionales</li>
                <li><strong>Networking:</strong> Comunidad de técnicos graduados</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="mb-0 small">
                <li><strong>Soporte:</strong> Asesoría técnica post-graduación</li>
                <li><strong>Actualizaciones:</strong> Contenido nuevo por 1 año gratis</li>
                <li><strong>Empleos:</strong> Programa de inserción laboral</li>
                <li><strong>Descuentos:</strong> En cursos avanzados y equipos</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- CTA de Inscripción -->
        <div class="mt-4 p-4 bg-secondary bg-opacity-10 rounded-4 border border-secondary">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h5 class="mb-2 text-secondary"><i class="bi bi-calendar2-check me-2"></i>¡Inscripciones Abiertas!</h5>
              <p class="mb-0">Cupos limitados para garantizar atención personalizada. Descuento del 15% por inscripción temprana.</p>
            </div>
            <div class="col-md-4 text-center">
              <button class="btn btn-secondary btn-lg fw-bold mb-2 w-100">
                <i class="bi bi-calendar-plus me-2"></i>INSCRIBIRSE
              </button>
              <a href="#" class="btn btn-outline-secondary w-100">
                <i class="bi bi-download me-2"></i>Descargar Brochure
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, quiero información sobre los cursos de capacitación técnica" 
             target="_blank" class="btn btn-secondary">
            <i class="bi bi-whatsapp me-2"></i>Información WhatsApp
          </a>
          <button class="btn btn-outline-secondary">
            <i class="bi bi-envelope me-2"></i>Solicitar Información
          </button>
          <button class="btn btn-primary">
            <i class="bi bi-calendar-check me-2"></i>Inscribirse Ahora
          </button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="modalServicio4" tabindex="-1" aria-labelledby="modalServicio4Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #ffc107 0%, #e0a800 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio4Label">
          <i class="bi bi-snow me-2"></i>Reparación de Tarjetas de Neveras Inverter
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/Inverter_Samsung.JPG" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-warning" alt="Tarjetas Neveras Inverter" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-gear-wide-connected me-2"></i>Especialistas en Neveras Inverter</h6>
            <p class="fs-6 text-dark mb-3">
              Somos <strong>especialistas certificados en reparación</strong> de tarjetas electrónicas para neveras inverter, especialmente <strong>Samsung, LG y Whirlpool</strong>. Utilizamos herramientas especializadas para diagnóstico y reparación de sistemas de control avanzados.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="card border-warning h-100">
              <div class="card-header bg-warning text-dark">
                <h6 class="mb-0"><i class="bi bi-info-circle me-2"></i>Datos del Servicio</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Tiempo:</strong> 3-7 días hábiles</p>
                <p class="mb-2"><strong>Garantía:</strong> 6 meses</p>
                <p class="mb-2"><strong>Precio:</strong> $80 - $200</p>
                <p class="mb-0"><strong>Éxito:</strong> 95% de casos</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Marcas y Modelos -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-list-stars me-2"></i>Marcas Especializadas</h6>
            <div class="row">
              <div class="col-6 mb-3">
                <div class="card border-warning h-100">
                  <div class="card-body text-center p-3">
                    <i class="bi bi-star-fill text-warning mb-2" style="font-size: 1.5rem;"></i>
                    <h6 class="mb-1">Samsung</h6>
                    <small class="text-muted">Twin Cooling, Digital Inverter</small>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="card border-warning h-100">
                  <div class="card-body text-center p-3">
                    <i class="bi bi-star-fill text-warning mb-2" style="font-size: 1.5rem;"></i>
                    <h6 class="mb-1">LG</h6>
                    <small class="text-muted">Linear Compressor, Smart ThinQ</small>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="card border-warning h-100">
                  <div class="card-body text-center p-3">
                    <i class="bi bi-star-fill text-warning mb-2" style="font-size: 1.5rem;"></i>
                    <h6 class="mb-1">Whirlpool</h6>
                    <small class="text-muted">6th Sense, Adaptive Intelligence</small>
                  </div>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="card border-warning h-100">
                  <div class="card-body text-center p-3">
                    <i class="bi bi-star-fill text-warning mb-2" style="font-size: 1.5rem;"></i>
                    <h6 class="mb-1">Otras</h6>
                    <small class="text-muted">Mabe, Frigidaire, Electrolux</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-exclamation-triangle me-2"></i>Fallas Comunes</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>No enfría:</strong> Problemas en control de compresor
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>Códigos de error:</strong> E1, E2, 1E, 5E, OF OF
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>No congela:</strong> Falla en sensores NTC
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>Ruido extraño:</strong> Control de ventiladores dañado
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>Consumo alto:</strong> Módulo inverter defectuoso
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-x-circle text-danger me-2"></i>
                <strong>No responde:</strong> Microcontrolador dañado
              </li>
            </ul>
          </div>
        </div>

        <!-- Componentes que Reparamos -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-cpu me-2"></i>Componentes que Reparamos</h6>
          <div class="row">
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-motherboard text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Tarjeta Principal</h6>
                <small>Control general y comunicación</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-lightning-charge text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Módulo Inverter</h6>
                <small>Control de compresor variable</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-thermometer text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Sensores NTC</h6>
                <small>Temperatura y descongelamiento</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-display text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Display</h6>
                <small>Panel de control y mostrado</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Precios por Tipo de Reparación -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-currency-dollar me-2"></i>Precios por Tipo de Falla</h6>
          <div class="table-responsive">
            <table class="table table-striped table-hover">
              <thead class="table-warning">
                <tr>
                  <th>Tipo de Falla</th>
                  <th>Componentes</th>
                  <th>Precio</th>
                  <th>Tiempo</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Sensores NTC dañados</td>
                  <td>Sensores de temperatura</td>
                  <td>$80 - $120</td>
                  <td>2-3 días</td>
                </tr>
                <tr>
                  <td>Problemas de display</td>
                  <td>Panel control, conectores</td>
                  <td>$90 - $140</td>
                  <td>3-4 días</td>
                </tr>
                <tr>
                  <td>Falla módulo inverter</td>
                  <td>IPM, drivers, capacitores</td>
                  <td>$120 - $180</td>
                  <td>5-7 días</td>
                </tr>
                <tr>
                  <td>Microcontrolador</td>
                  <td>MCU, memoria, cristales</td>
                  <td>$100 - $200</td>
                  <td>4-6 días</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Proceso Especializado -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-gear-fill me-2"></i>Nuestro Proceso Especializado</h6>
          <div class="row">
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>1</strong>
              </div>
              <h6 class="fw-bold">Recepción</h6>
              <p class="small">Identificación de modelo y síntomas</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>2</strong>
              </div>
              <h6 class="fw-bold">Diagnóstico</h6>
              <p class="small">Análisis con equipos especializados</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>3</strong>
              </div>
              <h6 class="fw-bold">Cotización</h6>
              <p class="small">Presupuesto detallado sin compromiso</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>4</strong>
              </div>
              <h6 class="fw-bold">Reparación</h6>
              <p class="small">Trabajo con componentes originales</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>5</strong>
              </div>
              <h6 class="fw-bold">Pruebas</h6>
              <p class="small">Simulación de condiciones reales</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>6</strong>
              </div>
              <h6 class="fw-bold">Entrega</h6>
              <p class="small">Con certificado de funcionamiento</p>
            </div>
          </div>
        </div>

        <!-- Advertencias Importantes -->
        <div class="alert alert-warning" role="alert">
          <h6 class="alert-heading"><i class="bi bi-exclamation-triangle me-2"></i>Información Importante</h6>
          <div class="row">
            <div class="col-md-6">
              <p><strong>Antes de traer tu nevera:</strong></p>
              <ul class="mb-0">
                <li>Anota el modelo exacto de la nevera</li>
                <li>Describe detalladamente los síntomas</li>
                <li>Trae foto de los códigos de error si aparecen</li>
                <li>Informa si hubo cortes de luz recientes</li>
              </ul>
            </div>
            <div class="col-md-6">
              <p><strong>Nuestra garantía incluye:</strong></p>
              <ul class="mb-0">
                <li>6 meses en reparaciones completas</li>
                <li>3 meses en cambio de componentes</li>
                <li>Soporte técnico post-reparación</li>
                <li>No aplica por daños externos</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, necesito reparar la tarjeta de mi nevera inverter. Modelo:" 
             target="_blank" class="btn btn-warning">
            <i class="bi bi-whatsapp me-2"></i>Consultar por WhatsApp
          </a>
          <a href="#contacto" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="bi bi-calendar-check me-2"></i>Agendar Revisión
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 5 - Protectores de Voltaje -->
<div class="modal fade" id="modalServicio5" tabindex="-1" aria-labelledby="modalServicio5Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #dc3545 0%, #b02a37 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio5Label">
          <i class="bi bi-shield-check me-2"></i>Protectores de Voltaje - Venta e Instalación
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/protector-voltaje.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-danger" alt="Protectores de Voltaje" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-danger fw-bold mb-3"><i class="bi bi-shield-fill-exclamation me-2"></i>Protección Esencial</h6>
            <p class="fs-6 text-dark mb-3">
              Los <strong>protectores de voltaje son esenciales</strong> en República Dominicana por las fluctuaciones constantes de la red eléctrica. Instalamos protectores certificados que <span class="text-danger fw-bold">pueden ahorrar miles de pesos</span> en reparaciones futuras.
            </p>
            <div class="row text-center">
              <div class="col-3">
                <h4 class="text-danger mb-1">70%</h4>
                <small>Menos averías</small>
              </div>
              <div class="col-3">
                <h4 class="text-danger mb-1">2x</h4>
                <small>Vida útil</small>
              </div>
              <div class="col-3">
                <h4 class="text-danger mb-1">100%</h4>
                <small>Certificados</small>
              </div>
              <div class="col-3">
                <h4 class="text-danger mb-1">24h</h4>
                <small>Instalación</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-danger h-100">
              <div class="card-header bg-danger text-white">
                <h6 class="mb-0"><i class="bi bi-lightning-charge me-2"></i>Rangos de Protección</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Residencial:</strong> 90V - 270V</p>
                <p class="mb-2"><strong>Comercial:</strong> 95V - 260V</p>
                <p class="mb-2"><strong>Industrial:</strong> 100V - 250V</p>
                <p class="mb-0"><strong>Respuesta:</strong> < 0.1 segundos</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tipos de Protectores -->
        <div class="row mb-4">
          <div class="col-md-4 mb-3">
            <div class="card border-danger h-100">
              <div class="card-header bg-danger text-white text-center">
                <h6 class="mb-0">Protector Básico</h6>
              </div>
              <div class="card-body text-center">
                <i class="bi bi-shield text-danger mb-3" style="font-size: 3rem;"></i>
                <h5 class="text-danger">$120 - $180</h5>
                <p class="small">Instalación incluida</p>
                <ul class="list-unstyled small text-start">
                  <li>✓ Protección 90V - 270V</li>
                  <li>✓ Display digital</li>
                  <li>✓ Hasta 20A (4,400W)</li>
                  <li>✓ Garantía 2 años</li>
                  <li>✓ Ideal para neveras y A/C pequeños</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border-danger h-100 shadow">
              <div class="card-header bg-danger text-white text-center">
                <h6 class="mb-0">Protector Avanzado 
                  <span class="badge bg-warning text-dark ms-1">Popular</span>
                </h6>
              </div>
              <div class="card-body text-center">
                <i class="bi bi-shield-fill-check text-danger mb-3" style="font-size: 3rem;"></i>
                <h5 class="text-danger">$200 - $280</h5>
                <p class="small">Instalación y configuración</p>
                <ul class="list-unstyled small text-start">
                  <li>✓ Protección 95V - 260V ajustable</li>
                  <li>✓ Display LCD multifunción</li>
                  <li>✓ Hasta 30A (6,600W)</li>
                  <li>✓ Retardo programable</li>
                  <li>✓ Protección contra rayos</li>
                  <li>✓ Garantía 3 años</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border-danger h-100">
              <div class="card-header bg-danger text-white text-center">
                <h6 class="mb-0">Protector Profesional</h6>
              </div>
              <div class="card-body text-center">
                <i class="bi bi-shield-fill-plus text-danger mb-3" style="font-size: 3rem;"></i>
                <h5 class="text-danger">$350 - $500</h5>
                <p class="small">Instalación y programación</p>
                <ul class="list-unstyled small text-start">
                  <li>✓ Protección 100V - 250V precisión</li>
                  <li>✓ Comunicación WiFi/Bluetooth</li>
                  <li>✓ Hasta 60A (13,200W)</li>
                  <li>✓ Monitoreo remoto</li>
                  <li>✓ Protección integral</li>
                  <li>✓ Garantía 5 años</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Por qué es Necesario en RD -->
        <div class="mb-4">
          <h6 class="text-danger fw-bold mb-3"><i class="bi bi-exclamation-triangle-fill me-2"></i>¿Por qué es Crítico en República Dominicana?</h6>
          <div class="row">
            <div class="col-md-6">
              <div class="alert alert-light border-danger">
                <h6 class="text-danger"><i class="bi bi-graph-down-arrow me-2"></i>Problemas de la Red Eléctrica:</h6>
                <ul class="mb-0 small">
                  <li><strong>Bajo voltaje (80-100V):</strong> Daña compresores y motores</li>
                  <li><strong>Alto voltaje (250-300V):</strong> Quema tarjetas electrónicas</li>
                  <li><strong>Fluctuaciones:</strong> Constantes variaciones de voltaje</li>
                  <li><strong>Apagones frecuentes:</strong> Golpes de corriente al regresar</li>
                  <li><strong>Ruido eléctrico:</strong> Interfiere con equipos electrónicos</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="alert alert-success border-success">
                <h6 class="text-success"><i class="bi bi-shield-check me-2"></i>Beneficios del Protector:</h6>
                <ul class="mb-0 small">
                  <li><strong>Desconexión automática:</strong> Ante voltaje peligroso</li>
                  <li><strong>Reconexión inteligente:</strong> Cuando el voltaje se normaliza</li>
                  <li><strong>Protección total:</strong> Neveras, A/C, electrónicos</li>
                  <li><strong>Ahorro garantizado:</strong> Evita reparaciones costosas</li>
                  <li><strong>Tranquilidad:</strong> 24/7 sin preocupaciones</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Instalación Profesional -->
        <div class="mb-4">
          <h6 class="text-danger fw-bold mb-3"><i class="bi bi-tools me-2"></i>Proceso de Instalación</h6>
          <div class="row">
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>1</strong>
              </div>
              <h6 class="fw-bold">Evaluación</h6>
              <p class="small">Análisis eléctrico del lugar</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>2</strong>
              </div>
              <h6 class="fw-bold">Selección</h6>
              <p class="small">Protector ideal según carga</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>3</strong>
              </div>
              <h6 class="fw-bold">Instalación</h6>
              <p class="small">Montaje y conexiones seguras</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>4</strong>
              </div>
              <h6 class="fw-bold">Configuración</h6>
              <p class="small">Ajuste de parámetros</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>5</strong>
              </div>
              <h6 class="fw-bold">Pruebas</h6>
              <p class="small">Verificación completa</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-danger text-white d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>6</strong>
              </div>
              <h6 class="fw-bold">Capacitación</h6>
              <p class="small">Uso y mantenimiento</p>
            </div>
          </div>
        </div>

        <!-- Calculadora de Ahorro -->
        <div class="alert alert-info" role="alert">
          <h6 class="alert-heading"><i class="bi bi-calculator me-2"></i>Calculadora de Ahorro</h6>
          <p><strong>Ejemplo real:</strong> Una nevera inverter sin protector que se dañe por voltaje puede costar <span class="text-danger fw-bold">$150-300</span> en reparación. Un protector de $180 se paga solo con <strong>una sola reparación evitada</strong>.</p>
          <div class="row text-center mt-3">
            <div class="col-md-3">
              <h5 class="text-success mb-0">$180</h5>
              <small>Inversión inicial</small>
            </div>
            <div class="col-md-3">
              <h5 class="text-danger mb-0">$300</h5>
              <small>Costo reparación evitada</small>
            </div>
            <div class="col-md-3">
              <h5 class="text-warning mb-0">$500+</h5>
              <small>Ahorro en 2 años</small>
            </div>
            <div class="col-md-3">
              <h5 class="text-info mb-0">67%</h5>
              <small>ROI primer año</small>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, quiero información sobre protectores de voltaje para mis equipos" 
             target="_blank" class="btn btn-danger">
            <i class="bi bi-whatsapp me-2"></i>Cotizar WhatsApp
          </a>
          <a href="#contacto" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="bi bi-calendar-plus me-2"></i>Agendar Instalación
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 6 - Monitoreo Inteligente -->
<div class="modal fade" id="modalServicio6" tabindex="-1" aria-labelledby="modalServicio6Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #17a2b8 0%, #117a8b 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio6Label">
          <i class="bi bi-wifi me-2"></i>Sistemas de Monitoreo Inteligente IoT
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/monitoreo-inteligente.jpeg" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-info" alt="Monitoreo Inteligente" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-info fw-bold mb-3"><i class="bi bi-cloud-check me-2"></i>Tecnología IoT Avanzada</h6>
            <p class="fs-6 text-dark mb-3">
              Implementamos <strong>sistemas de monitoreo inteligente</strong> que te permiten controlar y supervisar tus equipos de climatización desde cualquier lugar del mundo. Utilizamos sensores IoT de última generación y plataformas en la nube para <span class="text-info fw-bold">optimizar eficiencia y prevenir fallas</span>.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="card border-info h-100">
              <div class="card-header bg-info text-white">
                <h6 class="mb-0"><i class="bi bi-graph-up me-2"></i>Beneficios Medibles</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Ahorro energético:</strong> 20-35%</p>
                <p class="mb-2"><strong>Reducción fallas:</strong> 60%</p>
                <p class="mb-2"><strong>Vida útil:</strong> +40%</p>
                <p class="mb-0"><strong>ROI:</strong> 12-18 meses</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Componentes del Sistema -->
        <div class="row mb-4">
          <div class="col-md-4 mb-3">
            <div class="card border-info h-100">
              <div class="card-body text-center">
                <i class="bi bi-thermometer-half text-info mb-3" style="font-size: 3rem;"></i>
                <h6 class="fw-bold">Sensores Ambientales</h6>
                <ul class="list-unstyled small text-start">
                  <li>• Temperatura interior/exterior</li>
                  <li>• Humedad relativa</li>
                  <li>• Calidad del aire (CO₂)</li>
                  <li>• Presión atmosférica</li>
                  <li>• Detección de movimiento</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border-info h-100">
              <div class="card-body text-center">
                <i class="bi bi-lightning-charge text-info mb-3" style="font-size: 3rem;"></i>
                <h6 class="fw-bold">Monitoreo Eléctrico</h6>
                <ul class="list-unstyled small text-start">
                  <li>• Consumo en tiempo real</li>
                  <li>• Voltaje y corriente</li>
                  <li>• Factor de potencia</li>
                  <li>• Detección de fallas eléctricas</li>
                  <li>• Análisis de eficiencia</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card border-info h-100">
              <div class="card-body text-center">
                <i class="bi bi-gear-wide-connected text-info mb-3" style="font-size: 3rem;"></i>
                <h6 class="fw-bold">Control de Equipos</h6>
                <ul class="list-unstyled small text-start">
                  <li>• Encendido/apagado remoto</li>
                  <li>• Programación horaria</li>
                  <li>• Ajuste de temperatura</li>
                  <li>• Modos de operación</li>
                  <li>• Mantenimiento predictivo</li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Planes de Monitoreo -->
        <div class="mb-4">
          <h6 class="text-info fw-bold mb-3"><i class="bi bi-layers me-2"></i>Planes de Monitoreo Inteligente</h6>
          <div class="row">
            <div class="col-md-4 mb-3">
              <div class="card border-info h-100">
                <div class="card-header bg-info text-white text-center">
                  <h6 class="mb-0">Plan Básico</h6>
                </div>
                <div class="card-body text-center">
                  <h5 class="text-info">$200</h5>
                  <p class="small">+ $15/mes monitoreo</p>
                  <ul class="list-unstyled small text-start">
                    <li>✓ 3 sensores básicos</li>
                    <li>✓ App móvil</li>
                    <li>✓ Alertas por email/SMS</li>
                    <li>✓ Reportes semanales</li>
                    <li>✓ Control básico ON/OFF</li>
                    <li>✓ Soporte por chat</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card border-info h-100 shadow">
                <div class="card-header bg-info text-white text-center">
                  <h6 class="mb-0">Plan Profesional 
                    <span class="badge bg-warning text-dark ms-1">Recomendado</span>
                  </h6>
                </div>
                <div class="card-body text-center">
                  <h5 class="text-info">$350</h5>
                  <p class="small">+ $25/mes monitoreo</p>
                  <ul class="list-unstyled small text-start">
                    <li>✓ Todo del Plan Básico</li>
                    <li>✓ 8 sensores avanzados</li>
                    <li>✓ Dashboard web completo</li>
                    <li>✓ Control avanzado temperatura</li>
                    <li>✓ Programación horaria</li>
                    <li>✓ Análisis de eficiencia</li>
                    <li>✓ Soporte técnico priorizado</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <div class="card border-info h-100">
                <div class="card-header bg-info text-white text-center">
                  <h6 class="mb-0">Plan Empresarial</h6>
                </div>
                <div class="card-body text-center">
                  <h5 class="text-info">$500</h5>
                  <p class="small">+ $40/mes monitoreo</p>
                  <ul class="list-unstyled small text-start">
                    <li>✓ Todo del Plan Profesional</li>
                    <li>✓ Sensores ilimitados</li>
                    <li>✓ API para integración</li>
                    <li>✓ Mantenimiento predictivo</li>
                    <li>✓ Reportes personalizados</li>
                    <li>✓ Soporte 24/7</li>
                    <li>✓ Consultoría especializada</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Características de la App -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-info fw-bold mb-3"><i class="bi bi-phone me-2"></i>Aplicación Móvil</h6>
            <div class="row">
              <div class="col-6 text-center mb-3">
                <div class="bg-info bg-opacity-10 p-3 rounded-3">
                  <i class="bi bi-speedometer2 text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Dashboard</h6>
                  <small>Vista general en tiempo real</small>
                </div>
              </div>
              <div class="col-6 text-center mb-3">
                <div class="bg-info bg-opacity-10 p-3 rounded-3">
                  <i class="bi bi-bell text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Alertas</h6>
                  <small>Notificaciones inteligentes</small>
                </div>
              </div>
              <div class="col-6 text-center mb-3">
                <div class="bg-info bg-opacity-10 p-3 rounded-3">
                  <i class="bi bi-graph-up text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Estadísticas</h6>
                  <small>Histórico y tendencias</small>
                </div>
              </div>
              <div class="col-6 text-center mb-3">
                <div class="bg-info bg-opacity-10 p-3 rounded-3">
                  <i class="bi bi-gear text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Control</h6>
                  <small>Ajustes remotos</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h6 class="text-info fw-bold mb-3"><i class="bi bi-robot me-2"></i>Inteligencia Artificial</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-cpu text-info me-2"></i>
                <strong>Aprendizaje automático:</strong> Se adapta a tus patrones de uso
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-graph-up-arrow text-info me-2"></i>
                <strong>Optimización automática:</strong> Ajusta parámetros para máxima eficiencia
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-exclamation-triangle text-info me-2"></i>
                <strong>Detección de anomalías:</strong> Identifica problemas antes de que ocurran
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-calendar-check text-info me-2"></i>
                <strong>Mantenimiento predictivo:</strong> Programa mantenimientos óptimos
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-lightning-charge text-info me-2"></i>
                <strong>Gestión energética:</strong> Reduce consumo automáticamente
              </li>
            </ul>
          </div>
        </div>

        <!-- ROI y Casos de Éxito -->
        <div class="mb-4">
          <h6 class="text-info fw-bold mb-3"><i class="bi bi-trophy me-2"></i>Casos de Éxito</h6>
          <div class="row">
            <div class="col-md-4 text-center">
              <div class="card border-info">
                <div class="card-body">
                  <i class="bi bi-building text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Hotel 5 Estrellas</h6>
                  <p class="text-info h5">35% ahorro</p>
                  <small>120 habitaciones monitoreadas</small>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card border-info">
                <div class="card-body">
                  <i class="bi bi-shop text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Centro Comercial</h6>
                  <p class="text-info h5">28% ahorro</p>
                  <small>50 locales conectados</small>
                </div>
              </div>
            </div>
            <div class="col-md-4 text-center">
              <div class="card border-info">
                <div class="card-body">
                  <i class="bi bi-house text-info mb-2" style="font-size: 2rem;"></i>
                  <h6 class="fw-bold">Residencia</h6>
                  <p class="text-info h5">22% ahorro</p>
                  <small>Casa de 3 niveles</small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Proceso de Implementación -->
        <div class="alert alert-info" role="alert">
          <h6 class="alert-heading"><i class="bi bi-clipboard-check me-2"></i>Proceso de Implementación</h6>
          <div class="row">
            <div class="col-md-6">
              <p><strong>Fase 1 - Análisis (Día 1):</strong></p>
              <ul class="small mb-3">
                <li>Evaluación técnica del sitio</li>
                <li>Análisis de consumos actuales</li>
                <li>Diseño del sistema personalizado</li>
                <li>Propuesta técnica y económica</li>
              </ul>
            </div>
            <div class="col-md-6">
              <p><strong>Fase 2 - Instalación (Días 2-3):</strong></p>
              <ul class="small mb-0">
                <li>Instalación de sensores y gateway</li>
                <li>Configuración de comunicaciones</li>
                <li>Integración con equipos existentes</li>
                <li>Capacitación y puesta en marcha</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, quiero información sobre sistemas de monitoreo inteligente para mis equipos" 
             target="_blank" class="btn btn-info">
            <i class="bi bi-whatsapp me-2"></i>Demo WhatsApp
          </a>
          <a href="#contacto" class="btn btn-primary" data-bs-dismiss="modal">
            <i class="bi bi-calendar-star me-2"></i>Solicitar Evaluación
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 7 - Urgencias -->
<div class="modal fade" id="modalServicio7" tabindex="-1" aria-labelledby="modalServicio7Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-dark rounded-top-4" style="background: linear-gradient(135deg, #ffc107 0%, #ffca2c 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio7Label">
          <i class="bi bi-lightning me-2"></i>Servicio de Urgencias 24/7
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <img src="img/urgencia-electronica.png" class="img-modal img-shadow img-fluid rounded-4 border border-3 border-warning" alt="Urgencias 24/7" style="height: 300px; object-fit: cover; width: 100%;">
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-clock-fill me-2"></i>Atención de Emergencia</h6>
            <p class="fs-6 text-dark mb-3">
              Entendemos que las <strong>fallas de equipos no esperan</strong> y pueden ocurrir en los momentos más críticos. Nuestro servicio de urgencias 24/7 está <span class="text-warning fw-bold">listo para responder</span> cuando más lo necesitas, con técnicos especializados y repuestos en stock.
            </p>
            <div class="row text-center">
              <div class="col-3">
                <h4 class="text-warning mb-1">24/7</h4>
                <small>Disponibilidad</small>
              </div>
              <div class="col-3">
                <h4 class="text-warning mb-1">2hrs</h4>
                <small>Tiempo respuesta</small>
              </div>
              <div class="col-3">
                <h4 class="text-warning mb-1">95%</h4>
                <small>Resolución inmediata</small>
              </div>
              <div class="col-3">
                <h4 class="text-warning mb-1">100%</h4>
                <small>Garantía</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-warning h-100">
              <div class="card-header bg-warning text-dark">
                <h6 class="mb-0"><i class="bi bi-phone-vibrate me-2"></i>Contacto de Emergencia</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>WhatsApp:</strong> +1 (829) 747-0675</p>
                <p class="mb-2"><strong>Llamadas:</strong> +1 (829) 747-0675</p>
                <p class="mb-2"><strong>Email:</strong> urgencias@rse.com</p>
                <p class="mb-0"><strong>Horario:</strong> 24/7/365</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Tipos de Emergencias -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-exclamation-triangle-fill me-2"></i>Emergencias que Atendemos</h6>
            <ul class="list-group list-group-flush">
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-fire text-danger me-2"></i>
                <strong>Equipos sobrecalentados:</strong> Riesgo de incendio o explosión
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-lightning-charge-fill text-warning me-2"></i>
                <strong>Fallas eléctricas:</strong> Cortocircuitos o problemas de voltaje
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-thermometer-high text-danger me-2"></i>
                <strong>Pérdida de refrigeración:</strong> En cámaras frigoríficas o médicas
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-building text-info me-2"></i>
                <strong>Fallas en edificios:</strong> Sistemas centralizados sin funcionamiento
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-hospital text-success me-2"></i>
                <strong>Equipos críticos:</strong> Hospitales, centros de datos, laboratorios
              </li>
              <li class="list-group-item border-0 px-0">
                <i class="bi bi-shop text-primary me-2"></i>
                <strong>Comercios:</strong> Supermercados, restaurantes, hoteles
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <h6 class="text-warning fw-bold mb-3"><i class="bi bi-speedometer2 me-2"></i>Tiempos de Respuesta</h6>
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead class="table-warning">
                  <tr>
                    <th>Tipo de Urgencia</th>
                    <th>Tiempo Respuesta</th>
                    <th>Costo Adicional</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><span class="badge bg-danger">Crítica</span></td>
                    <td>30-60 minutos</td>
                    <td>+100%</td>
                  </tr>
                  <tr>
                    <td><span class="badge bg-warning text-dark">Alta</span></td>
                    <td>1-2 horas</td>
                    <td>+75%</td>
                  </tr>
                  <tr>
                    <td><span class="badge bg-info">Media</span></td>
                    <td>2-4 horas</td>
                    <td>+50%</td>
                  </tr>
                  <tr>
                    <td><span class="badge bg-success">Normal</span></td>
                    <td>4-8 horas</td>
                    <td>+25%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            
            <!-- Servicios Incluidos -->
            <h6 class="text-warning fw-bold mb-3 mt-4"><i class="bi bi-check-circle-fill me-2"></i>Incluido en Urgencias</h6>
            <div class="row">
              <div class="col-6 mb-2">
                <div class="bg-warning bg-opacity-10 p-2 rounded text-center">
                  <small><strong>Diagnóstico Express</strong></small>
                </div>
              </div>
              <div class="col-6 mb-2">
                <div class="bg-warning bg-opacity-10 p-2 rounded text-center">
                  <small><strong>Reparación in-situ</strong></small>
                </div>
              </div>
              <div class="col-6 mb-2">
                <div class="bg-warning bg-opacity-10 p-2 rounded text-center">
                  <small><strong>Repuestos básicos</strong></small>
                </div>
              </div>
              <div class="col-6 mb-2">
                <div class="bg-warning bg-opacity-10 p-2 rounded text-center">
                  <small><strong>Solución temporal</strong></small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Herramientas de Emergencia -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-tools me-2"></i>Equipos de Emergencia Móvil</h6>
          <div class="row">
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-laptop text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Diagnóstico</h6>
                <small>Osciloscopio, multímetro, analizador</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-wrench-adjustable text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Herramientas</h6>
                <small>Kit completo de reparación</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-box-seam text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Repuestos</h6>
                <small>Stock de componentes críticos</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-warning bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-lightning-charge text-warning mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Energía</h6>
                <small>Generador y herramientas eléctricas</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Protocolo de Atención -->
        <div class="mb-4">
          <h6 class="text-warning fw-bold mb-3"><i class="bi bi-diagram-3 me-2"></i>Protocolo de Emergencia</h6>
          <div class="row">
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>1</strong>
              </div>
              <h6 class="fw-bold">Llamada</h6>
              <p class="small">Contacto inmediato 24/7</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>2</strong>
              </div>
              <h6 class="fw-bold">Evaluación</h6>
              <p class="small">Análisis rápido de urgencia</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>3</strong>
              </div>
              <h6 class="fw-bold">Movilización</h6>
              <p class="small">Técnico especialista en camino</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>4</strong>
              </div>
              <h6 class="fw-bold">Diagnóstico</h6>
              <p class="small">Evaluación in-situ rápida</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>5</strong>
              </div>
              <h6 class="fw-bold">Reparación</h6>
              <p class="small">Solución inmediata</p>
            </div>
            <div class="col-md-2 text-center mb-3">
              <div class="rounded-circle bg-warning text-dark d-inline-flex align-items-center justify-content-center mb-2" style="width: 50px; height: 50px;">
                <strong>6</strong>
              </div>
              <h6 class="fw-bold">Seguimiento</h6>
              <p class="small">Monitoreo post-servicio</p>
            </div>
          </div>
        </div>

        <!-- Casos de Emergencia Típicos -->
        <div class="alert alert-danger" role="alert">
          <h6 class="alert-heading"><i class="bi bi-exclamation-octagon me-2"></i>¿Cuándo Llamar a Urgencias?</h6>
          <div class="row">
            <div class="col-md-6">
              <p><strong>Situaciones críticas:</strong></p>
              <ul class="mb-0 small">
                <li>Olor a quemado o humo en equipos</li>
                <li>Equipos que no encienden después de apagón</li>
                <li>Ruidos extraños o vibraciones anormales</li>
                <li>Temperaturas extremas (muy caliente/frío)</li>
                <li>Chispas o descargas eléctricas</li>
              </ul>
            </div>
            <div class="col-md-6">
              <p><strong>Equipos críticos afectados:</strong></p>
              <ul class="mb-0 small">
                <li>Refrigeración médica o de alimentos</li>
                <li>Sistemas centrales de edificios</li>
                <li>Equipos de producción industrial</li>
                <li>Climatización en centros de datos</li>
                <li>Equipos en hospitales o clínicas</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- CTA Principal -->
        <div class="mt-4 p-4 bg-warning bg-opacity-10 rounded-4 border border-warning">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h5 class="mb-2 text-warning"><i class="bi bi-telephone-fill me-2"></i>Línea de Emergencias 24/7</h5>
              <p class="mb-0">¿Tienes una emergencia electrónica? Nuestros especialistas están listos para ayudarte las 24 horas del día, los 365 días del año.</p>
            </div>
            <div class="col-md-4 text-center">
              <a href="tel:+18297470675" class="btn btn-warning btn-lg fw-bold mb-2 w-100">
                <i class="bi bi-telephone me-2"></i>LLAMAR AHORA
              </a>
              <a href="https://wa.me/18297470675?text=🚨URGENCIA: Necesito atención inmediata para:" 
                 target="_blank" class="btn btn-outline-warning w-100">
                <i class="bi bi-whatsapp me-2"></i>WhatsApp Urgente
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=🚨URGENCIA: Tengo una emergencia con mis equipos" 
             target="_blank" class="btn btn-warning">
            <i class="bi bi-whatsapp me-2"></i>WhatsApp Urgente
          </a>
          <a href="tel:+18297470675" class="btn btn-danger">
            <i class="bi bi-telephone me-2"></i>Llamar Ahora
          </a>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal Servicio 8 - Capacitación -->
<div class="modal fade" id="modalServicio8" tabindex="-1" aria-labelledby="modalServicio8Label" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content rounded-4 shadow-lg border-0 animate__animated animate__fadeIn">
      <div class="modal-header bg-gradient text-white rounded-top-4" style="background: linear-gradient(135deg, #6c757d 0%, #495057 100%);">
        <h5 class="modal-title fw-bold" id="modalServicio8Label">
          <i class="bi bi-mortarboard me-2"></i>Asesoría Técnica y Capacitación Profesional
        </h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body bg-light p-4">
        <!-- Imagen Principal -->
        <div class="text-center mb-4">
          <div class="d-inline-block rounded-circle shadow-lg mb-3" style="background: linear-gradient(135deg, #6c757d 0%, #adb5bd 100%); width:150px; height:150px; display:flex; align-items:center; justify-content:center;">
            <i class="bi bi-mortarboard text-white" style="font-size: 4rem;"></i>
          </div>
        </div>
        
        <!-- Descripción Principal -->
        <div class="row mb-4">
          <div class="col-lg-8">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-award me-2"></i>Formación Especializada</h6>
            <p class="fs-6 text-dark mb-3">
              Ofrecemos <strong>capacitación técnica especializada</strong> en electrónica de potencia, tecnología inverter y reparación de equipos. Nuestros cursos están diseñados para <span class="text-secondary fw-bold">técnicos que buscan certificación profesional</span> y empresas que necesitan capacitar a su personal.
            </p>
            <div class="row text-center">
              <div class="col-3">
                <h4 class="text-secondary mb-1">500+</h4>
                <small>Técnicos formados</small>
              </div>
              <div class="col-3">
                <h4 class="text-secondary mb-1">4.9/5</h4>
                <small>Satisfacción</small>
              </div>
              <div class="col-3">
                <h4 class="text-secondary mb-1">95%</h4>
                <small>Tasa de empleo</small>
              </div>
              <div class="col-3">
                <h4 class="text-secondary mb-1">12</h4>
                <small>Años experiencia</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-secondary h-100">
              <div class="card-header bg-secondary text-white">
                <h6 class="mb-0"><i class="bi bi-calendar-check me-2"></i>Próximas Fechas</h6>
              </div>
              <div class="card-body">
                <p class="mb-2"><strong>Curso Básico:</strong> 15 Oct 2024</p>
                <p class="mb-2"><strong>Curso Intermedio:</strong> 5 Nov 2024</p>
                <p class="mb-2"><strong>Curso Avanzado:</strong> 20 Nov 2024</p>
                <p class="mb-0"><strong>Empresarial:</strong> Bajo demanda</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Programas de Capacitación -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-book me-2"></i>Programas Disponibles</h6>
            
            <div class="accordion" id="cursosAccordion">
              <div class="accordion-item border-secondary">
                <h6 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cursoBasico">
                    <i class="bi bi-cpu me-2"></i>Tecnología Inverter Básica
                  </button>
                </h6>
                <div id="cursoBasico" class="accordion-collapse collapse" data-bs-parent="#cursosAccordion">
                  <div class="accordion-body small">
                    <strong>Duración:</strong> 25 horas (1 semana)<br>
                    <strong>Modalidad:</strong> Presencial/Virtual<br>
                    <strong>Incluye:</strong>
                    <ul class="mt-2 mb-0">
                      <li>Fundamentos de tecnología inverter</li>
                      <li>Componentes principales y funcionamiento</li>
                      <li>Herramientas de diagnóstico básico</li>
                      <li>Práticas supervisadas</li>
                      <li>Certificado de participación</li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item border-secondary">
                <h6 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cursoIntermedio">
                    <i class="bi bi-tools me-2"></i>Reparación Avanzada
                  </button>
                </h6>
                <div id="cursoIntermedio" class="accordion-collapse collapse" data-bs-parent="#cursosAccordion">
                  <div class="accordion-body small">
                    <strong>Duración:</strong> 40 horas (2 semanas)<br>
                    <strong>Modalidad:</strong> Presencial<br>
                    <strong>Incluye:</strong>
                    <ul class="mt-2 mb-0">
                      <li>Diagnóstico avanzado con osciloscopio</li>
                      <li>Reparación de módulos IPM</li>
                      <li>Microsoldadura SMD</li>
                      <li>Casos reales de reparación</li>
                      <li>Certificado técnico profesional</li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="accordion-item border-secondary">
                <h6 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cursoEspecialista">
                    <i class="bi bi-award me-2"></i>Especialista Certificado
                  </button>
                </h6>
                <div id="cursoEspecialista" class="accordion-collapse collapse" data-bs-parent="#cursosAccordion">
                  <div class="accordion-body small">
                    <strong>Duración:</strong> 60 horas (3 semanas)<br>
                    <strong>Modalidad:</strong> Presencial intensivo<br>
                    <strong>Incluye:</strong>
                    <ul class="mt-2 mb-0">
                      <li>Diseño de sistemas inverter</li>
                      <li>Programación de microcontroladores</li>
                      <li>Análisis de fallas complejas</li>
                      <li>Desarrollo de soluciones personalizadas</li>
                      <li>Certificación profesional reconocida</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-6">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-tags me-2"></i>Precios y Planes</h6>
            <div class="row">
              <div class="col-md-12 mb-3">
                <div class="card border-secondary">
                  <div class="card-header bg-secondary text-white text-center">
                    <h6 class="mb-0">Curso Básico</h6>
                  </div>
                  <div class="card-body text-center">
                    <h4 class="text-secondary">$299</h4>
                    <p class="small">25 horas / 1 semana</p>
                    <ul class="list-unstyled small text-start">
                      <li>✓ Material digital incluido</li>
                      <li>✓ Certificado de participación</li>
                      <li>✓ Soporte 30 días</li>
                      <li>✓ Acceso a comunidad</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="card border-secondary shadow">
                  <div class="card-header bg-secondary text-white text-center">
                    <h6 class="mb-0">Curso Intermedio 
                      <span class="badge bg-warning text-dark ms-1">Popular</span>
                    </h6>
                  </div>
                  <div class="card-body text-center">
                    <h4 class="text-secondary">$499</h4>
                    <p class="small">40 horas / 2 semanas</p>
                    <ul class="list-unstyled small text-start">
                      <li>✓ Todo del curso básico</li>
                      <li>✓ Kit de herramientas incluido</li>
                      <li>✓ Prácticas con equipos reales</li>
                      <li>✓ Certificado técnico profesional</li>
                      <li>✓ Soporte 90 días</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <div class="card border-secondary">
                  <div class="card-header bg-secondary text-white text-center">
                    <h6 class="mb-0">Curso Especialista</h6>
                  </div>
                  <div class="card-body text-center">
                    <h4 class="text-secondary">$799</h4>
                    <p class="small">60 horas / 3 semanas</p>
                    <ul class="list-unstyled small text-start">
                      <li>✓ Programa completo avanzado</li>
                      <li>✓ Certificación profesional</li>
                      <li>✓ Mentorías personalizadas</li>
                      <li>✓ Acceso al programa de empleos</li>
                      <li>✓ Soporte vitalicio</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Metodología -->
        <div class="mb-4">
          <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-diagram-3 me-2"></i>Nuestra Metodología</h6>
          <div class="row">
            <div class="col-md-3 text-center mb-3">
              <div class="bg-secondary bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-book text-secondary mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Teoría</h6>
                <small>Fundamentos técnicos sólidos y actualizados</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-secondary bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-tools text-secondary mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Práctica</h6>
                <small>Ejercicios reales con equipos profesionales</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-secondary bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-clipboard-check text-secondary mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Evaluación</h6>
                <small>Pruebas de competencia técnica</small>
              </div>
            </div>
            <div class="col-md-3 text-center mb-3">
              <div class="bg-secondary bg-opacity-10 p-3 rounded-3">
                <i class="bi bi-award text-secondary mb-2" style="font-size: 2rem;"></i>
                <h6 class="fw-bold">Certificación</h6>
                <small>Diploma reconocido en la industria</small>
              </div>
            </div>
          </div>
        </div>

        <!-- Testimonios y Estadísticas -->
        <div class="row mb-4">
          <div class="col-md-6">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-chat-quote me-2"></i>Lo que Dicen Nuestros Estudiantes</h6>
            <div class="card border-secondary mb-3">
              <div class="card-body">
                <p class="small mb-2">"Excelente formación. Ahora trabajo como técnico especialista en una empresa importante. Los conocimientos son muy actuales."</p>
                <footer class="blockquote-footer small">
                  <cite title="Source Title">Carlos M. - Técnico Certificado 2023</cite>
                </footer>
              </div>
            </div>
            <div class="card border-secondary">
              <div class="card-body">
                <p class="small mb-2">"La parte práctica es increíble. Reparamos equipos reales desde el primer día. Me siento muy preparado."</p>
                <footer class="blockquote-footer small">
                  <cite title="Source Title">Ana R. - Especialista en Inverter 2023</cite>
                </footer>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <h6 class="text-secondary fw-bold mb-3"><i class="bi bi-graph-up me-2"></i>Estadísticas de Éxito</h6>
            <div class="row text-center">
              <div class="col-6 mb-3">
                <div class="bg-secondary bg-opacity-10 p-3 rounded border border-secondary">
                  <h4 class="text-secondary mb-1">95%</h4>
                  <small>Tasa de empleo</small>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="bg-secondary bg-opacity-10 p-3 rounded border border-secondary">
                  <h4 class="text-secondary mb-1">85%</h4>
                  <small>Incremento salarial</small>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="bg-secondary bg-opacity-10 p-3 rounded border border-secondary">
                  <h4 class="text-secondary mb-1">4.9/5</h4>
                  <small>Calificación promedio</small>
                </div>
              </div>
              <div class="col-6 mb-3">
                <div class="bg-secondary bg-opacity-10 p-3 rounded border border-secondary">
                  <h4 class="text-secondary mb-1">500+</h4>
                  <small>Egresados exitosos</small>
                </div>
              </div>
            </div>
            
            <!-- Empresas que Contratan -->
            <h6 class="text-secondary fw-bold mb-3 mt-4"><i class="bi bi-building me-2"></i>Empresas que Contratan</h6>
            <div class="row text-center">
              <div class="col-4 mb-2">
                <div class="bg-secondary bg-opacity-10 p-2 rounded">
                  <small><strong>Climatización Total</strong></small>
                </div>
              </div>
              <div class="col-4 mb-2">
                <div class="bg-secondary bg-opacity-10 p-2 rounded">
                  <small><strong>TecnoFrío</strong></small>
                </div>
              </div>
              <div class="col-4 mb-2">
                <div class="bg-secondary bg-opacity-10 p-2 rounded">
                  <small><strong>Servitec</strong></small>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Facilidades y Beneficios -->
        <div class="alert alert-secondary" role="alert">
          <h6 class="alert-heading"><i class="bi bi-gift me-2"></i>Beneficios Incluidos</h6>
          <div class="row">
            <div class="col-md-6">
              <ul class="mb-0 small">
                <li><strong>Material didáctico:</strong> Manuales digitales y físicos</li>
                <li><strong>Herramientas:</strong> Kit básico para cursos presenciales</li>
                <li><strong>Laboratorio:</strong> Acceso a equipos profesionales</li>
                <li><strong>Networking:</strong> Comunidad de técnicos graduados</li>
              </ul>
            </div>
            <div class="col-md-6">
              <ul class="mb-0 small">
                <li><strong>Soporte:</strong> Asesoría técnica post-graduación</li>
                <li><strong>Actualizaciones:</strong> Contenido nuevo por 1 año gratis</li>
                <li><strong>Empleos:</strong> Programa de inserción laboral</li>
                <li><strong>Descuentos:</strong> En cursos avanzados y equipos</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- CTA de Inscripción -->
        <div class="mt-4 p-4 bg-secondary bg-opacity-10 rounded-4 border border-secondary">
          <div class="row align-items-center">
            <div class="col-md-8">
              <h5 class="mb-2 text-secondary"><i class="bi bi-calendar2-check me-2"></i>¡Inscripciones Abiertas!</h5>
              <p class="mb-0">Cupos limitados para garantizar atención personalizada. Descuento del 15% por inscripción temprana.</p>
            </div>
            <div class="col-md-4 text-center">
              <button class="btn btn-secondary btn-lg fw-bold mb-2 w-100">
                <i class="bi bi-calendar-plus me-2"></i>INSCRIBIRSE
              </button>
              <a href="#" class="btn btn-outline-secondary w-100">
                <i class="bi bi-download me-2"></i>Descargar Brochure
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer bg-light rounded-bottom-4">
        <div class="d-flex gap-2">
          <a href="https://wa.me/18297470675?text=Hola, quiero información sobre los cursos de capacitación técnica" 
             target="_blank" class="btn btn-secondary">
            <i class="bi bi-whatsapp me-2"></i>Información WhatsApp
          </a>
          <button class="btn btn-outline-secondary">
            <i class="bi bi-envelope me-2"></i>Solicitar Información
          </button>
          <button class="btn btn-primary">
            <i class="bi bi-calendar-check me-2"></i>Inscribirse Ahora
          </button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>