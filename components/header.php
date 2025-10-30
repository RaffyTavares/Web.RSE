<?php ?>
<!-- Encabezado Section Modernizado -->
<header id="inicio" class="position-relative overflow-hidden" style="min-height: 100vh; display: flex; align-items: center;">
    <!-- Background con parallax y overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="
        background: linear-gradient(135deg, rgba(74, 138, 235, 0.73) 0%, rgba(54, 66, 78, 0.89) 100%), 
        url('img/Hombre-técnico.jpg') center center/cover no-repeat fixed;
        z-index: -2;
    "></div>
    
    <!-- Patrón geométrico -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="
        background-image: 
            radial-gradient(circle at 25% 25%, rgba(255,255,255,0.1) 1px, transparent 1px),
            radial-gradient(circle at 75% 75%, rgba(255,255,255,0.1) 1px, transparent 1px);
        background-size: 50px 50px;
        z-index: -1;
    "></div>
    
    <div class="container text-center text-white position-relative">
        <!-- Logo animado -->
        <div class="mb-4" data-aos="zoom-in" data-aos-duration="1000">
            <div class="d-inline-block position-relative">
                <div class="bg-light rounded-circle shadow-lg d-flex align-items-center justify-content-center mx-auto mb-3" 
                     style="width: 120px; height: 120px; animation: float 3s ease-in-out infinite;">
                    <i class="bi bi-gear-fill text-primary" style="font-size: 4rem; animation: rotate 4s linear infinite;"></i>
                </div>
                <div class="position-absolute top-50 start-50 translate-middle">
                    <i class="bi bi-lightning-charge text-info" style="font-size: 2rem; animation: pulse 2s infinite;"></i>
                </div>
            </div>
        </div>
        
        <!-- Título principal con efecto typewriter -->
        <div class="mb-4" data-aos="fade-up" data-aos-delay="300">
            <h1 class="display-3 fw-bold text-uppercase mb-3" style="
                letter-spacing: 3px; 
                text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
                background: linear-gradient(45deg, #fff, #e3eafc);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            ">
                Rafael Soluciones Electrónica
            </h1>
            <div class="d-flex justify-content-center mb-3">
                <div class="shadow-sm" style="width: 100px; height: 4px; background: linear-gradient(45deg, #17a2b8, #138496); border-radius: 2px;"></div>
            </div>
            <!-- Subtítulo con efecto typewriter -->
            <h2 class="h3 fw-light text-light mb-4" style="letter-spacing: 2px; opacity: 0.9; min-height: 60px;">
                <span id="typewriter-text"></span>
                <span id="cursor" class="typewriter-cursor">|</span>
            </h2>
        </div>
        
        <!-- Descripción -->
        <div class="mb-5" data-aos="fade-up" data-aos-delay="600">
            <p class="lead fs-4 text-light mx-auto" style="
                max-width: 800px; 
                line-height: 1.6; 
                letter-spacing: 0.5px;
                text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
            ">
                Transformamos la tecnología en tranquilidad. Expertos en reparación de tarjetas electrónicas para 
                <span class="fw-semibold" style="color: #17a2b8;">aires acondicionados y neveras inverter</span>, 
                garantizando resultados superiores y atención personalizada.
            </p>
        </div>
        
        <!-- Botones CTA modernos -->
        <div class="d-flex flex-column flex-md-row gap-3 justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="900">
            <a href="#contacto" class="btn btn-gradient-primary btn-lg px-5 py-3 rounded-pill shadow-lg">
                <i class="bi bi-chat-dots me-2"></i>Contáctanos Ahora
            </a>
            <a href="#servicios" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill">
                <i class="bi bi-tools me-2"></i>Nuestros Servicios
            </a>
        </div>
        
        <!-- Enlace especial 
        <div class="mt-4" data-aos="fade-up" data-aos-delay="1200">
            <a href="web-efemerides/index-efemerides.html" class="btn btn-sm px-4 py-2 rounded-pill shadow-sm" style="background: linear-gradient(45deg, #17a2b8, #138496); border-color: #17a2b8; color: white;">
                <i class="bi bi-calendar-event me-2"></i>Efemérides de Hoy
            </a>
        </div>
        -->
        <!-- Indicadores de scroll -->
        <div class="mt-5 pt-4" data-aos="fade-up" data-aos-delay="1500">
            <a href="#nosotros" class="text-white text-decoration-none">
                <div class="d-flex flex-column align-items-center">
                    <small class="mb-2 opacity-75">Descubre más</small>
                    <i class="bi bi-chevron-down" style="font-size: 1.5rem; animation: bounce 2s infinite;"></i>
                </div>
            </a>
        </div>
    </div>
    
    <!-- Partículas flotantes mejoradas -->
    <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: -1;">
        <!-- Partículas grandes -->
        <div class="particle" style="
            position: absolute; top: 15%; left: 8%; width: 12px; height: 12px; 
            background: rgba(255,255,255,0.9); border-radius: 50%;
            box-shadow: 0 0 20px rgba(255,255,255,0.5);
            animation: float-particle 6s ease-in-out infinite;
        "></div>
        <div class="particle" style="
            position: absolute; top: 55%; left: 85%; width: 16px; height: 16px; 
            background: rgba(23,162,184,0.9); border-radius: 50%;
            box-shadow: 0 0 25px rgba(23,162,184,0.6);
            animation: float-particle 8s ease-in-out infinite reverse;
        "></div>
        <div class="particle" style="
            position: absolute; top: 25%; left: 75%; width: 10px; height: 10px; 
            background: rgba(13,202,240,0.9); border-radius: 50%;
            box-shadow: 0 0 20px rgba(13,202,240,0.5);
            animation: float-particle 7s ease-in-out infinite;
        "></div>
        
        <!-- Partículas medianas -->
        <div class="particle" style="
            position: absolute; top: 40%; left: 20%; width: 8px; height: 8px; 
            background: rgba(108,117,234,0.8); border-radius: 50%;
            box-shadow: 0 0 15px rgba(108,117,234,0.4);
            animation: float-particle 9s ease-in-out infinite;
        "></div>
        <div class="particle" style="
            position: absolute; top: 70%; left: 15%; width: 6px; height: 6px; 
            background: rgba(220,53,69,0.8); border-radius: 50%;
            box-shadow: 0 0 12px rgba(220,53,69,0.4);
            animation: float-particle 10s ease-in-out infinite reverse;
        "></div>
        <div class="particle" style="
            position: absolute; top: 10%; left: 60%; width: 7px; height: 7px; 
            background: rgba(25,135,84,0.8); border-radius: 50%;
            box-shadow: 0 0 15px rgba(25,135,84,0.4);
            animation: float-particle 11s ease-in-out infinite;
        "></div>
        
        <!-- Partículas pequeñas -->
        <div class="particle" style="
            position: absolute; top: 80%; left: 50%; width: 4px; height: 4px; 
            background: rgba(255,255,255,0.7); border-radius: 50%;
            box-shadow: 0 0 10px rgba(255,255,255,0.3);
            animation: float-particle 12s ease-in-out infinite;
        "></div>
        <div class="particle" style="
            position: absolute; top: 35%; left: 40%; width: 5px; height: 5px; 
            background: rgba(23,162,184,0.7); border-radius: 50%;
            box-shadow: 0 0 12px rgba(23,162,184,0.3);
            animation: float-particle 13s ease-in-out infinite reverse;
        "></div>
    </div>
</header>

<style>
/* Animaciones personalizadas */
@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-10px); }
}

@keyframes pulse {
    0%, 100% { opacity: 1; transform: scale(1); }
    50% { opacity: 0.7; transform: scale(1.1); }
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
}

@keyframes float-particle {
    0%, 100% { transform: translateY(0px) translateX(0px); }
    33% { transform: translateY(-20px) translateX(10px); }
    66% { transform: translateY(10px) translateX(-10px); }
}

/* Efecto typewriter */
.typewriter-cursor {
    animation: blink 1s infinite;
    color: #17a2b8;
    font-weight: normal;
}

@keyframes blink {
    0%, 50% { opacity: 1; }
    51%, 100% { opacity: 0; }
}

/* Botón gradiente */
.btn-gradient-primary {
    background: linear-gradient(135deg, #0d6efd 0%, #0dcaf0 100%);
    border: none;
    color: white;
    transition: all 0.3s ease;
    font-weight: 600;
    letter-spacing: 1px;
}

.btn-gradient-primary:hover {
    background: linear-gradient(135deg, #0dcaf0 0%, #0d6efd 100%);
    transform: translateY(-3px);
    box-shadow: 0 15px 30px rgba(13,110,253,0.4);
    color: white;
}

/* Efectos hover para botones outline */
.btn-outline-light:hover {
    background: rgba(255,255,255,0.15);
    backdrop-filter: blur(10px);
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 768px) {
    .display-3 {
        font-size: 2.5rem;
    }
    .lead {
        font-size: 1.2rem;
    }
}

/* Parallax en desktop */
@media (min-width: 992px) {
    #inicio {
        background-attachment: fixed;
    }
}
</style>

<script>
// Efecto de escritura y borrado (Typewriter)
document.addEventListener('DOMContentLoaded', function() {
    const typewriterElement = document.getElementById('typewriter-text');
    const cursor = document.getElementById('cursor');
    
    // Textos que se van a escribir y borrar
    const texts = [
        'Innovación y Excelencia en Soluciones Inverter',
        'Reparación de Tarjetas Electrónicas',
        'Aires Acondicionados y Neveras',
        'Servicio Técnico Especializado',
        'Tecnología de Vanguardia'
    ];
    
    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typingSpeed = 100;
    
    function typeEffect() {
        const currentText = texts[textIndex];
        
        if (isDeleting) {
            // Borrando texto
            typewriterElement.textContent = currentText.substring(0, charIndex - 1);
            charIndex--;
            typingSpeed = 50; // Velocidad más rápida para borrar
        } else {
            // Escribiendo texto
            typewriterElement.textContent = currentText.substring(0, charIndex + 1);
            charIndex++;
            typingSpeed = 100; // Velocidad normal para escribir
        }
        
        // Verificar si terminó de escribir
        if (!isDeleting && charIndex === currentText.length) {
            typingSpeed = 2000; // Pausa antes de empezar a borrar
            isDeleting = true;
        }
        // Verificar si terminó de borrar
        else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            textIndex = (textIndex + 1) % texts.length; // Siguiente texto
            typingSpeed = 500; // Pausa antes de escribir el siguiente
        }
        
        setTimeout(typeEffect, typingSpeed);
    }
    
    // Iniciar el efecto después de un pequeño retraso
    setTimeout(() => {
        typeEffect();
    }, 1500);
});
</script>
