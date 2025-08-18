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
    
    // Inicializar botón de volver arriba
    initBackToTopButton();
    
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
 * Inicializa el carrusel de videos con navegación
 */
function initVideoCarousel() {
    const videoItems = Array.from(document.querySelectorAll('#videoCarousel .video-item'));
    let start = 0;

    function getVisible() {
        if (window.innerWidth < 768) return 1; // 1 video en móvil
        if (window.innerWidth < 992) return 1; // 1 video en iPad vertical y tablets pequeñas
        if (window.innerWidth < 1200) return 2; // 2 videos en iPad horizontal y tablets grandes
        return 3; // 3 en desktop
    }

    function updateVideos() {
        const visible = getVisible();
        videoItems.forEach((item) => {
            item.classList.remove('active');
            item.style.display = 'none';
        });
        
        // Añadir indicadores visuales de la cantidad de videos
        const totalPages = Math.ceil(videoItems.length / visible);
        const currentPage = Math.floor(start / visible) + 1;
        
        // Actualizar texto de navegación
        document.getElementById('carouselPosition').textContent = `${currentPage}/${totalPages}`;
        
        // Deshabilitar botones cuando sea necesario
        document.getElementById('prevVideo').disabled = start === 0;
        document.getElementById('nextVideo').disabled = start >= videoItems.length - visible;
        
        // Mostrar los videos actuales
        for (let i = start; i < start + visible && i < videoItems.length; i++) {
            videoItems[i].classList.add('active');
            videoItems[i].style.display = 'block';
            videoItems[i].classList.remove('aos-animate');
            setTimeout(() => {
                videoItems[i].classList.add('aos-animate');
            }, 50);
        }
    }

    // Event listeners para botones de navegación
    document.getElementById('prevVideo').addEventListener('click', function () {
        if (start > 0) {
            start--;
            updateVideos();
        }
    });

    document.getElementById('nextVideo').addEventListener('click', function () {
        const visible = getVisible();
        if (start < videoItems.length - visible) {
            start++;
            updateVideos();
        }
    });

    // Actualizar cuando cambia el tamaño de la ventana
    window.addEventListener('resize', function () {
        updateVideos();
    });

    // Inicializar visualización
    updateVideos();
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
                    item.style.display = '';
                    item.classList.remove('d-none');
                });
            } else {
                videoItems.forEach(item => {
                    if (item.getAttribute('data-category') === category) {
                        item.style.display = '';
                        item.classList.remove('d-none');
                    } else {
                        item.style.display = 'none';
                        item.classList.add('d-none');
                    }
                });
            }
            
            // Reiniciar contador y actualizar carrusel
            window.start = 0;
            initVideoCarousel();
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
    
    // Cargar bookmarks guardados
    let bookmarks = JSON.parse(localStorage.getItem('resourceBookmarks')) || [];
    
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
            const resourceId = this.getAttribute('data-resource-id');
            
            if (bookmarks.includes(resourceId)) {
                // Eliminar de favoritos
                bookmarks = bookmarks.filter(id => id !== resourceId);
            } else {
                // Añadir a favoritos
                bookmarks.push(resourceId);
            }
            
            // Guardar en localStorage
            localStorage.setItem('resourceBookmarks', JSON.stringify(bookmarks));
            
            // Actualizar UI
            updateBookmarkUI();
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

// Llamar a la función para agregar el estilo de resaltado
addSearchHighlightStyle();

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
