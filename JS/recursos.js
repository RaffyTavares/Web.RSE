/**
 * Recursos.js - Funciones para la página recursos.html
 * Rafael Soluciones Electrónica
 */

document.addEventListener('DOMContentLoaded', function () {
    // Inicializar carrusel de videos
    initVideoCarousel();
    
    // Inicializar filtros de videos
    initVideoFilters();
    
    // Inicializar búsqueda de recursos
    initSearchFunctionality();
    
    // Inicializar sistema de marcadores (bookmarks)
    initBookmarks();
    
    // Inicializar botones de favoritos (corazones)
    initFavoriteHearts();
    
    // Inicializar botón de volver arriba
    initBackToTopButton();
    
    // Inicializar navegación de secciones
    initSectionNavigation();
    
    // Inicializar efectos del navbar
    initNavbarEffects();
    
    // Inicializar hamburguesa elegante
    initElegantHamburger();
    
    // Inicializar tooltips y popovers de Bootstrap
    initBootstrapComponents();
    
    // Inicializar animaciones AOS
    AOS.init({
        duration: 900,
        once: false
    });
    
    // Sincronizar el select con los botones de filtro
    const videoFilterSelect = document.querySelector('.video-filter-select');
    if(videoFilterSelect) {
        videoFilterSelect.addEventListener('change', function() {
            const selectedFilter = this.value;
            
            // Filtrar los videos
            filterVideos(selectedFilter);
            
            // Actualizar el estado activo de los botones (para cuando se cambie de tamaño)
            document.querySelectorAll('.btn-group[aria-label="Filtro de videos"] button').forEach(btn => {
                if(btn.getAttribute('data-filter') === selectedFilter) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });
        });
    }
});

/**
 * Inicializa el botón Back to Top ULTRA SIMPLE
 */
function initBackToTopButton() {
    const backToTopBtn = document.getElementById('backToTop');
    
    if (!backToTopBtn) {
        console.error('Back to top button not found!');
        return;
    }
    
    console.log('Back to top button found and working!');
    
    // Función de scroll suave
    function scrollToTop() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
    
    // Event listener para el clic
    backToTopBtn.addEventListener('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        console.log('Back to top clicked!');
        scrollToTop();
    });
    
    // Mostrar/ocultar según scroll (opcional, por ahora siempre visible)
    /*
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const parentDiv = backToTopBtn.parentElement;
        
        if (scrollTop > 200) {
            parentDiv.style.opacity = '1';
            parentDiv.style.transform = 'scale(1)';
        } else {
            parentDiv.style.opacity = '0.7';
            parentDiv.style.transform = 'scale(0.9)';
        }
    });
    */
    
    console.log('Back to top initialized successfully');
}

/**
 * Inicializa el carrusel de videos lado a lado con navegación
 */
function initVideoCarousel() {
    const videoItems = Array.from(document.querySelectorAll('#videoCarousel .video-item'));
    let currentPage = 0;

    // Función para obtener cuántos videos mostrar según el tamaño de pantalla
    function getVisibleCount() {
        if (window.innerWidth < 768) return 1; // Móvil: 1 video
        if (window.innerWidth < 1200) return 2; // Tablet: 2 videos
        return 3; // Desktop: 3 videos
    }

    // Obtener elementos filtrados (no ocultos)
    function getFilteredItems() {
        return videoItems.filter(item => 
            !item.classList.contains('d-none') && 
            item.getAttribute('data-filtered') !== 'true'
        );
    }

    // Función para actualizar la visualización del carrusel
    function updateCarousel() {
        const visibleCount = getVisibleCount();
        const filteredItems = getFilteredItems();
        const totalPages = Math.ceil(filteredItems.length / visibleCount);
        
        // Asegurar que currentPage esté en rango válido
        if (currentPage >= totalPages) {
            currentPage = Math.max(0, totalPages - 1);
        }
        
        // Actualizar contador de posición
        const positionElement = document.getElementById('carouselPosition');
        if (positionElement) {
            positionElement.textContent = `${currentPage + 1}/${totalPages}`;
        }
        
        // Actualizar estado de los botones
        const prevBtn = document.getElementById('prevVideo');
        const nextBtn = document.getElementById('nextVideo');
        
        if (prevBtn) prevBtn.disabled = currentPage === 0 || filteredItems.length === 0;
        if (nextBtn) nextBtn.disabled = currentPage >= totalPages - 1 || filteredItems.length === 0;
        
        // Mostrar/ocultar videos según la página actual
        const startIndex = currentPage * visibleCount;
        const endIndex = startIndex + visibleCount;
        
        // Ocultar todos los elementos primero
        videoItems.forEach(item => {
            item.style.display = 'none';
            item.classList.remove('visible', 'mobile-active', 'tablet-active', 'desktop-active');
        });
        
        // Mostrar solo los elementos de la página actual
        filteredItems.forEach((item, index) => {
            if (index >= startIndex && index < endIndex) {
                item.style.display = 'block';
                item.classList.add('visible');
                
                // Agregar clases específicas para responsive
                if (window.innerWidth < 768) {
                    item.classList.add('mobile-active');
                } else if (window.innerWidth < 1200) {
                    item.classList.add('tablet-active');
                } else {
                    item.classList.add('desktop-active');
                }
                
                // Agregar animación
                item.classList.remove('aos-animate');
                setTimeout(() => {
                    item.classList.add('aos-animate');
                }, 100 + (index - startIndex) * 100);
            }
        });
    }

    // Event listener para botón anterior
    const prevBtn = document.getElementById('prevVideo');
    if (prevBtn) {
        prevBtn.addEventListener('click', function() {
            if (currentPage > 0) {
                currentPage--;
                updateCarousel();
            }
        });
    }

    // Event listener para botón siguiente
    const nextBtn = document.getElementById('nextVideo');
    if (nextBtn) {
        nextBtn.addEventListener('click', function() {
            const visibleCount = getVisibleCount();
            const filteredItems = getFilteredItems();
            const totalPages = Math.ceil(filteredItems.length / visibleCount);
            
            if (currentPage < totalPages - 1) {
                currentPage++;
                updateCarousel();
            }
        });
    }

    // Actualizar cuando cambia el tamaño de la ventana
    let resizeTimeout;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            // Recalcular página actual para la nueva configuración
            const visibleCount = getVisibleCount();
            const filteredItems = getFilteredItems();
            const totalPages = Math.ceil(filteredItems.length / visibleCount);
            
            // Ajustar currentPage si es necesario
            if (currentPage >= totalPages) {
                currentPage = Math.max(0, totalPages - 1);
            }
            
            updateCarousel();
        }, 250);
    });

    // Inicializar el carrusel
    updateCarousel();
    
    // Exponer funciones globalmente para filtros
    window.updateVideoCarousel = updateCarousel;
    window.resetVideoCarousel = function() {
        currentPage = 0;
        updateCarousel();
    };
}

/**
 * Inicializa el filtrado de videos por categoría
 */
function initVideoFilters() {
    const filterButtons = document.querySelectorAll('.btn-group[aria-label="Filtro de videos"] .btn');
    const videoItems = Array.from(document.querySelectorAll('#videoCarousel .video-item'));
    
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remover clase activa de todos los botones
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Añadir clase activa al botón clickeado
            this.classList.add('active');
            
            const category = this.getAttribute('data-filter');
            
            // Filtrar videos
            if (category === 'all') {
                videoItems.forEach(item => {
                    item.classList.remove('d-none');
                    item.removeAttribute('data-filtered');
                });
            } else {
                videoItems.forEach(item => {
                    if (item.getAttribute('data-category') === category) {
                        item.classList.remove('d-none');
                        item.removeAttribute('data-filtered');
                    } else {
                        item.classList.add('d-none');
                        item.setAttribute('data-filtered', 'true');
                    }
                });
            }
            
            // Reiniciar el carrusel al inicio después del filtrado
            if (typeof window.resetVideoCarousel === 'function') {
                setTimeout(() => {
                    window.resetVideoCarousel();
                }, 100);
            } else if (typeof window.updateVideoCarousel === 'function') {
                setTimeout(() => {
                    window.updateVideoCarousel();
                }, 100);
            }
        });
    });
}

/**
 * Inicializa la funcionalidad de búsqueda de recursos
 */
function initSearchFunctionality() {
    const searchInput = document.getElementById('searchResources');
    const searchButton = document.getElementById('searchButton');
    const allResources = Array.from(document.querySelectorAll('.list-group-item, .video-item'));
    const noResultsMessage = document.createElement('div');

    // Crear un mensaje de "sin resultados"
    noResultsMessage.id = 'noResultsMessage';
    noResultsMessage.textContent = 'No se encontraron resultados.';
    noResultsMessage.style.display = 'none';
    noResultsMessage.style.textAlign = 'center';
    noResultsMessage.style.marginTop = '20px';
    noResultsMessage.style.color = '#dc3545';
    document.querySelector('#recursos .container').appendChild(noResultsMessage);

    // Función para realizar la búsqueda
    function performSearch() {
        const searchTerm = searchInput.value.trim().toLowerCase();
        let hasResults = false;

        if (searchTerm.length > 2) {
            allResources.forEach(item => {
                const text = item.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    item.style.display = '';
                    hasResults = true;
                } else {
                    item.style.display = 'none';
                }
            });

            // Mostrar u ocultar el mensaje de "sin resultados"
            noResultsMessage.style.display = hasResults ? 'none' : 'block';
        } else {
            // Restaurar todos los elementos si no hay término de búsqueda
            allResources.forEach(item => {
                item.style.display = '';
            });
            noResultsMessage.style.display = 'none';
        }
    }

    // Función de debounce para optimizar la búsqueda
    function debounce(func, delay) {
        let timeout;
        return function (...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), delay);
        };
    }

    // Event listeners para búsqueda
    const debouncedSearch = debounce(performSearch, 300);
    searchInput.addEventListener('input', debouncedSearch);
    searchButton.addEventListener('click', performSearch);
}

/**
 * Inicializa el sistema de marcadores (bookmarks)
 */
function initBookmarks() {
    const bookmarkButtons = document.querySelectorAll('.bookmark-btn');
    
    // Cargar bookmarks guardados desde el sistema principal
    let bookmarks = JSON.parse(localStorage.getItem('resourcesFavorites')) || [];
    
    // Actualizar estado visual de los bookmarks
    function updateBookmarkUI() {
        bookmarkButtons.forEach(btn => {
            const resourceId = btn.getAttribute('data-resource-id');
            if (bookmarks.includes(resourceId)) {
                btn.classList.remove('btn-outline-secondary');
                btn.classList.add('btn-warning');
                btn.innerHTML = '<i class="bi bi-bookmark-fill"></i>';
            } else {
                btn.classList.remove('btn-warning');
                btn.classList.add('btn-outline-secondary');
                btn.innerHTML = '<i class="bi bi-bookmark"></i>';
            }
        });
    }
    
    // Inicializar UI de bookmarks
    updateBookmarkUI();
    
    // Event listeners para botones de bookmark
    bookmarkButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const resourceId = this.getAttribute('data-resource-id');
            
            if (bookmarks.includes(resourceId)) {
                // Eliminar de favoritos
                bookmarks = bookmarks.filter(id => id !== resourceId);
            } else {
                // Añadir a favoritos
                bookmarks.push(resourceId);
            }
            
            // Guardar en localStorage con la misma clave que el sistema principal
            localStorage.setItem('resourcesFavorites', JSON.stringify(bookmarks));
            
            // Actualizar UI
            updateBookmarkUI();
            
            // Actualizar contador si la función existe
            if (typeof updateFavoritesCounter === 'function') {
                updateFavoritesCounter();
            }
        });
    });
}

/**
 * Inicializa el botón para volver arriba
 */
function initBackToTopButton() {
    const backToTopBtn = document.getElementById('backToTop');
    
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            backToTopBtn.style.display = 'block';
        } else {
            backToTopBtn.style.display = 'none';
        }
    });
    
    backToTopBtn.addEventListener('click', () => {
        window.scrollTo({top: 0, behavior: 'smooth'});
    });
}

/**
 * Inicializa componentes de Bootstrap como popovers
 */
function initBootstrapComponents() {
    // Popover Bootstrap
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl)
    });
}

/**
 * Añade el estilo CSS para el efecto de resaltado de búsqueda
 */
function addSearchHighlightStyle() {
    // Verificar si el estilo ya existe
    if (!document.getElementById('search-highlight-style')) {
        const style = document.createElement('style');
        style.id = 'search-highlight-style';
        style.innerHTML = `
            .search-highlight {
                animation: highlight-pulse 2s ease-in-out;
            }
            
            @keyframes highlight-pulse {
                0% { box-shadow: 0 0 0 0 rgba(13, 202, 240, 0.4); }
                70% { box-shadow: 0 0 0 10px rgba(13, 202, 240, 0); }
                100% { box-shadow: 0 0 0 0 rgba(13, 202, 240, 0); }
            }
        `;
        document.head.appendChild(style);
    }
}

/**
 * Inicializa la navegación suave entre secciones
 */
function initSectionNavigation() {
    console.log('🚀 Inicializando navegación de secciones...');
    
    // Navegación suave
    const navButtons = document.querySelectorAll('.smooth-scroll');
    const progressDots = document.querySelectorAll('.progress-dot');
    const sections = ['documentos-section', 'videos-section', 'herramientas-section', 'tienda-section'];
    
    console.log(`📍 Encontrados ${navButtons.length} botones de navegación`);
    console.log(`📍 Encontrados ${progressDots.length} puntos de progreso`);
    
    // Verificar que los elementos existen
    if (navButtons.length === 0) {
        console.warn('⚠️ No se encontraron botones de navegación (.smooth-scroll)');
        return;
    }
    
    // Configurar navegación suave
    navButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                // Smooth scroll con offset para el navbar fijo
                const offsetTop = targetElement.offsetTop - 100;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
                
                // Actualizar estado activo
                updateActiveSection(targetId);
            }
        });
    });
    
    // Click en progress dots
    progressDots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            const sectionId = sections[index];
            const targetElement = document.getElementById(sectionId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 100;
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
                
                updateActiveSection(sectionId);
            }
        });
    });
    
    // Función para actualizar sección activa
    function updateActiveSection(activeSectionId) {
        // Actualizar botones de navegación
        navButtons.forEach(button => {
            const targetId = button.getAttribute('href').substring(1);
            if (targetId === activeSectionId) {
                button.classList.add('active');
            } else {
                button.classList.remove('active');
            }
        });
        
        // Actualizar progress dots
        const activeSectionIndex = sections.indexOf(activeSectionId);
        progressDots.forEach((dot, index) => {
            if (index === activeSectionIndex) {
                dot.classList.add('active');
            } else {
                dot.classList.remove('active');
            }
        });
    }
    
    // Detectar sección visible en scroll
    function detectActiveSection() {
        const scrollPos = window.scrollY + 150;
        
        sections.forEach(sectionId => {
            const section = document.getElementById(sectionId);
            if (section) {
                const sectionTop = section.offsetTop;
                const sectionBottom = sectionTop + section.offsetHeight;
                
                if (scrollPos >= sectionTop && scrollPos <= sectionBottom) {
                    updateActiveSection(sectionId);
                }
            }
        });
    }
    
    // Throttle para optimizar el scroll
    let ticking = false;
    function updateOnScroll() {
        if (!ticking) {
            requestAnimationFrame(function() {
                detectActiveSection();
                ticking = false;
            });
            ticking = true;
        }
    }
    
    // Event listener para scroll
    window.addEventListener('scroll', updateOnScroll);
    
    // Inicializar con la primera sección activa
    updateActiveSection('documentos-section');
}

/**
 * Inicializa efectos avanzados para el navbar - SIEMPRE FIJO
 */
function initNavbarEffects() {
    const navbar = document.querySelector('.navbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const brandLink = document.querySelector('.navbar-brand');
    const helpButton = document.querySelector('.btn-info');
    
    // Efecto de scroll para el navbar - SOLO CAMBIO DE ESTILO, SIEMPRE VISIBLE
    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        // Agregar clase scrolled cuando se hace scroll - NAVBAR SIEMPRE FIJO
        if (scrollTop > 50) {
            navbar.classList.add('scrolled');
            // Asegurar que siempre esté visible
            navbar.style.transform = 'translateY(0)';
            navbar.style.position = 'fixed';
            navbar.style.top = '0';
        } else {
            navbar.classList.remove('scrolled');
            // Mantener siempre visible
            navbar.style.transform = 'translateY(0)';
            navbar.style.position = 'fixed';
            navbar.style.top = '0';
        }
    });
    
    // Efectos adicionales para los enlaces
    navLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            // Agregar efecto ripple
            createRipple(this, event);
        });
    });
    
    // Efecto especial para el botón de ayuda
    if (helpButton) {
        helpButton.addEventListener('mouseenter', function() {
            this.style.background = 'linear-gradient(45deg, #20c997, #17a2b8)';
        });
        
        helpButton.addEventListener('mouseleave', function() {
            this.style.background = 'linear-gradient(45deg, #17a2b8, #138496)';
        });
    }
    
    // Efecto parallax sutil para el logo
    if (brandLink) {
        let mouseX = 0, mouseY = 0;
        
        navbar.addEventListener('mousemove', function(e) {
            mouseX = e.clientX - navbar.offsetWidth / 2;
            mouseY = e.clientY - navbar.offsetHeight / 2;
            
            const logo = brandLink.querySelector('span:first-child');
            if (logo) {
                logo.style.transform = `translate(${mouseX * 0.02}px, ${mouseY * 0.02}px) scale(1)`;
            }
        });
        
        navbar.addEventListener('mouseleave', function() {
            const logo = brandLink.querySelector('span:first-child');
            if (logo) {
                logo.style.transform = 'translate(0, 0) scale(1)';
            }
        });
    }
}

/**
 * Crea efecto ripple en elementos
 */
function createRipple(element, event) {
    const ripple = document.createElement('div');
    const rect = element.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    const x = event.clientX - rect.left - size / 2;
    const y = event.clientY - rect.top - size / 2;
    
    ripple.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
        background: rgba(255, 255, 255, 0.3);
        border-radius: 50%;
        transform: scale(0);
        transition: transform 0.6s ease;
        pointer-events: none;
        z-index: 0;
    `;
    
    element.style.position = 'relative';
    element.style.overflow = 'hidden';
    element.appendChild(ripple);
    
    // Trigger animation
    setTimeout(() => {
        ripple.style.transform = 'scale(2)';
        ripple.style.opacity = '0';
    }, 10);
    
    // Remove ripple after animation
    setTimeout(() => {
        if (ripple.parentNode) {
            ripple.parentNode.removeChild(ripple);
        }
    }, 600);
}

/**
 * Asegura que el navbar permanezca siempre fijo
 */
function ensureNavbarFixed() {
    const navbar = document.querySelector('.navbar');
    
    if (navbar) {
        // Forzar estilos de posición fija
        navbar.style.position = 'fixed';
        navbar.style.top = '0';
        navbar.style.left = '0';
        navbar.style.right = '0';
        navbar.style.zIndex = '1050';
        navbar.style.transform = 'translateY(0)';
        
        // Agregar clase para identificación
        navbar.classList.add('navbar-fixed-always');
        
        console.log('✅ Navbar configurado como siempre fijo');
        
        // Event listener para resize - mantener fijo
        window.addEventListener('resize', function() {
            navbar.style.position = 'fixed';
            navbar.style.top = '0';
            navbar.style.transform = 'translateY(0)';
        });
        
        // Observador de mutaciones para prevenir cambios
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'style') {
                    const currentTransform = navbar.style.transform;
                    if (currentTransform && currentTransform.includes('translateY(-')) {
                        // Restaurar posición fija si algo intenta ocultarlo
                        navbar.style.transform = 'translateY(0)';
                        navbar.style.position = 'fixed';
                        navbar.style.top = '0';
                    }
                }
            });
        });
        
        observer.observe(navbar, {
            attributes: true,
            attributeFilter: ['style']
        });
    }
}

/**
 * Inicializa funcionalidad elegante para el menú hamburguesa - SOLO MÓVILES
 */
function initElegantHamburger() {
    const hamburgerButton = document.querySelector('.elegant-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const navLinks = document.querySelectorAll('.nav-link');
    
    // Verificar que estamos en dispositivo móvil
    function isMobileView() {
        return window.innerWidth < 992;
    }
    
    if (hamburgerButton && navbarCollapse && isMobileView()) {
        console.log('🍔 Inicializando menú hamburguesa elegante (solo móviles)...');
        
        // Solo inicializar en móviles
        if (!isMobileView()) {
            console.log('💻 Desktop detectado, omitiendo inicialización del hamburguesa');
            return;
        }
        
        // Mejorar la funcionalidad del toggle
        hamburgerButton.addEventListener('click', function(e) {
            e.preventDefault();
            
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            
            // Agregar feedback táctil en móviles
            if (window.navigator.vibrate) {
                window.navigator.vibrate(50);
            }
            
            // Agregar clase de animación
            this.classList.add('clicking');
            setTimeout(() => {
                this.classList.remove('clicking');
            }, 200);
            
            console.log(isExpanded ? '❌ Cerrando menú...' : '✅ Abriendo menú...');
        });
        
        // Cerrar menú al hacer click en un enlace
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                    hide: true
                });
                bsCollapse.hide();
                
                // Feedback visual
                this.style.transform = 'scale(0.95)';
                setTimeout(() => {
                    this.style.transform = '';
                }, 150);
                
                console.log('🔗 Enlace clickeado, cerrando menú...');
            });
        });
        
        // Cerrar menú al hacer click fuera
        document.addEventListener('click', function(e) {
            const isClickInsideNav = hamburgerButton.contains(e.target) || navbarCollapse.contains(e.target);
            const isMenuOpen = hamburgerButton.getAttribute('aria-expanded') === 'true';
            
            if (!isClickInsideNav && isMenuOpen) {
                const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                    hide: true
                });
                bsCollapse.hide();
                console.log('👆 Click fuera del menú, cerrando...');
            }
        });
        
        // Cerrar menú con tecla ESC
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                const isMenuOpen = hamburgerButton.getAttribute('aria-expanded') === 'true';
                if (isMenuOpen) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        hide: true
                    });
                    bsCollapse.hide();
                    console.log('⌨️ Tecla ESC presionada, cerrando menú...');
                }
            }
        });
        
        // Event listeners para animaciones de los elementos del menú
        navbarCollapse.addEventListener('show.bs.collapse', function() {
            console.log('📱 Menú desplegándose...');
            hamburgerButton.classList.add('menu-opening');
        });
        
        navbarCollapse.addEventListener('shown.bs.collapse', function() {
            console.log('✅ Menú completamente abierto');
            hamburgerButton.classList.remove('menu-opening');
            hamburgerButton.classList.add('menu-open');
        });
        
        navbarCollapse.addEventListener('hide.bs.collapse', function() {
            console.log('📱 Menú cerrándose...');
            hamburgerButton.classList.add('menu-closing');
            hamburgerButton.classList.remove('menu-open');
        });
        
        navbarCollapse.addEventListener('hidden.bs.collapse', function() {
            console.log('❌ Menú completamente cerrado');
            hamburgerButton.classList.remove('menu-closing');
        });
        
        // Animación de entrada secuencial para los elementos del menú
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
                    if (navbarCollapse.classList.contains('show')) {
                        // Animar elementos del menú secuencialmente
                        const menuItems = navbarCollapse.querySelectorAll('.nav-item');
                        menuItems.forEach((item, index) => {
                            setTimeout(() => {
                                item.style.transform = 'translateX(0)';
                                item.style.opacity = '1';
                            }, index * 100);
                        });
                    }
                }
            });
        });
        
        observer.observe(navbarCollapse, {
            attributes: true,
            attributeFilter: ['class']
        });
        
        // Manejar cambios de tamaño de pantalla
        window.addEventListener('resize', function() {
            if (!isMobileView()) {
                // Si cambiamos a desktop, cerrar el menú y limpiar estados
                if (navbarCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
                        hide: true
                    });
                    bsCollapse.hide();
                }
                console.log('💻 Cambiado a vista desktop, cerrando menú móvil');
            }
        });
    } else if (!isMobileView()) {
        console.log('💻 Vista desktop detectada, menú hamburguesa no necesario');
    }
}

// Llamar a la función de filtrado (asegúrate de que esta sea compatible con tu código actual)
function initFavoriteHearts() {
    const heartButtons = document.querySelectorAll('.favorite-btn');
    
    // Cargar favoritos guardados
    let favorites = JSON.parse(localStorage.getItem('resourcesFavorites')) || [];
    
    // Actualizar estado visual de los corazones
    function updateHeartUI() {
        heartButtons.forEach(btn => {
            const resourceId = btn.getAttribute('data-resource-id');
            if (favorites.includes(resourceId)) {
                btn.innerHTML = '<i class="bi bi-heart-fill"></i>';
                btn.classList.add('text-danger');
                btn.classList.remove('text-secondary');
            } else {
                btn.innerHTML = '<i class="bi bi-heart"></i>';
                btn.classList.add('text-secondary');
                btn.classList.remove('text-danger');
            }
        });
    }
    
    // Inicializar UI de corazones
    updateHeartUI();
    
    // Event listeners para botones de corazón
    heartButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            const resourceId = this.getAttribute('data-resource-id');
            
            if (favorites.includes(resourceId)) {
                // Eliminar de favoritos
                favorites = favorites.filter(id => id !== resourceId);
            } else {
                // Añadir a favoritos
                favorites.push(resourceId);
            }
            
            // Guardar en localStorage
            localStorage.setItem('resourcesFavorites', JSON.stringify(favorites));
            
            // Actualizar UI
            updateHeartUI();
            
            // También actualizar los bookmarks para mantener sincronía
            if (typeof updateBookmarkUI !== 'undefined') {
                updateBookmarkUI();
            }
            
            // Actualizar contador si la función existe
            if (typeof updateFavoritesCounter === 'function') {
                updateFavoritesCounter();
            }
        });
    });
}

// Función de filtrado (asegúrate de que esta sea compatible con tu código actual)
function filterVideos(filter) {
    const items = document.querySelectorAll('.video-item');
    let hasVisibleItems = false;
    
    items.forEach(item => {
        if(filter === 'all' || item.getAttribute('data-category') === filter) {
            item.style.display = '';
            item.classList.remove('d-none');
            hasVisibleItems = true;
        } else {
            item.style.display = 'none';
            item.classList.add('d-none');
        }
    });
    
    // Reset carousel position and update
    if (typeof window.start !== 'undefined') {
        window.start = 0;
    }
    
    // Reiniciar contador y actualizar carrusel si existe
    if (typeof initVideoCarousel === 'function') {
        setTimeout(() => {
            initVideoCarousel();
        }, 100);
    }
}
