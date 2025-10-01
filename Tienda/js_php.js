// Base de datos de productos (simulada)
const products = [
    {
        id: 1,
        name: "Tarjeta Principal Samsung Inverter",
        description: "Tarjeta principal compatible con aires acondicionados Samsung inverter serie AR/MV.",
        price: 89.99,
        image: "https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
        brand: "samsung",
        type: "control",
        compatible: "Samsung AR12, AR18, AR24",
        stock: 15
    },
    {
        id: 2,
        name: "Tarjeta de Potencia LG Inverter",
        description: "Tarjeta de potencia para modelos LG inverter de 12,000 a 24,000 BTU.",
        price: 75.50,
        image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
        brand: "lg",
        type: "power",
        compatible: "LG Dual Cool, Art Cool",
        stock: 8
    },
    {
        id: 3,
        name: "Tarjeta Display Midea Inverter",
        description: "Tarjeta de display y control para aires acondicionados Midea inverter.",
        price: 45.00,
        image: "https://images.unsplash.com/photo-1593105544552-8614e8746f0a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
        brand: "midea",
        type: "display",
        compatible: "Midea MSMA series",
        stock: 15
    },
    {
        id: 4,
        name: "Tarjeta Control Carrier Inverter",
        description: "Tarjeta de control principal para equipos Carrier inverter de 18,000 BTU.",
        price: 110.00,
        image: "https://images.unsplash.com/photo-1560717789-0ac7c58ac90a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
        brand: "carrier",
        type: "control",
        compatible: "Carrier 38MGR, 40MGR",
        stock: 7
    },
    {
        id: 5,
        name: "Tarjeta Potencia Samsung Inverter",
        description: "Tarjeta de potencia para modelos Samsung inverter de alta eficiencia.",
        price: 95.00,
        image: "https://images.unsplash.com/photo-1510551317070-0be1a79eec7f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
        brand: "samsung",
        type: "power",
        compatible: "Samsung Wind-Free series",
        stock: 12
    },
    {
        id: 6,
        name: "Tarjeta Control LG Inverter",
        description: "Tarjeta de control principal para equipos LG inverter dual inverter.",
        price: 120.00,
        image: "https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
        brand: "lg",
        type: "control",
        compatible: "LG Dual Inverter",
        stock: 5
    }
];

// Variables globales
let cart = JSON.parse(localStorage.getItem('cart')) || [];
let cartModal, overlay, cartCount, cartItems, cartTotal, productsGrid, brandFilter, typeFilter, priceFilter;

// Inicializar la tienda
function initStore() {
    console.log('Inicializando tienda...');
    
    // Obtener elementos del DOM aquí para asegurar que existen
    cartModal = document.getElementById('cartModal');
    overlay = document.getElementById('overlay');
    cartCount = document.getElementById('cartCount');
    cartItems = document.getElementById('cartItems');
    cartTotal = document.getElementById('cartTotal');
    productsGrid = document.getElementById('productsGrid');
    brandFilter = document.getElementById('brand-filter');
    typeFilter = document.getElementById('type-filter');
    priceFilter = document.getElementById('price-filter');

    // Verificar que todos los elementos existen
    console.log('cartModal:', cartModal);
    console.log('overlay:', overlay);
    console.log('cartCount:', cartCount);
    console.log('productsGrid:', productsGrid);
    
    if (!cartModal || !overlay || !cartCount || !cartItems || !cartTotal || !productsGrid) {
        console.error('Algunos elementos del DOM no fueron encontrados');
        console.error('cartModal:', !!cartModal, 'overlay:', !!overlay, 'cartCount:', !!cartCount, 'cartItems:', !!cartItems, 'cartTotal:', !!cartTotal, 'productsGrid:', !!productsGrid);
        return;
    }

    renderProducts(); // Carga inicial de todos los productos
    updateCartCount();

    // Event listeners principales
    const cartIcon = document.getElementById('cartIcon');
    const closeCartBtn = document.getElementById('closeCart');
    const checkoutBtn = document.getElementById('checkoutBtn');
    
    console.log('cartIcon:', cartIcon);
    console.log('closeCartBtn:', closeCartBtn);
    console.log('checkoutBtn:', checkoutBtn);
    
    if (cartIcon) {
        cartIcon.addEventListener('click', function() {
            console.log('Cart icon clicked!');
            openCart();
        });
        console.log('Cart icon event listener added');
    } else {
        console.error('Cart icon not found!');
    }
    
    if (closeCartBtn) {
        closeCartBtn.addEventListener('click', closeCart);
    }
    
    if (checkoutBtn) {
        checkoutBtn.addEventListener('click', checkout);
    }
    
    if (overlay) {
        overlay.addEventListener('click', closeCart);
    }

    // Filtros
    if (brandFilter) {
        brandFilter.addEventListener('change', filterProducts);
    }
    if (typeFilter) {
        typeFilter.addEventListener('change', filterProducts);
    }
    if (priceFilter) {
        priceFilter.addEventListener('change', filterProducts);
    }
    
    console.log('Tienda inicializada correctamente');
}

// Renderizar productos
function renderProducts() {
    productsGrid.innerHTML = '';
    
    if (products.length === 0) {
        productsGrid.innerHTML = '<p class="no-products">No se encontraron productos.</p>';
        return;
    }

    products.forEach(product => {
        const productElement = document.createElement('div');
        productElement.classList.add('product-card');
        productElement.innerHTML = `
            <img src="${product.image}" alt="${product.name}" class="product-image">
            <div class="product-info">
                <h3 class="product-title">${product.name}</h3>
                <p class="product-description">${product.description}</p>
                <p class="product-compatible"><strong>Compatibilidad:</strong> ${product.compatible}</p>
                <div class="product-price">$${parseFloat(product.price).toFixed(2)}</div>
                <button class="btn-add-cart" data-id="${product.id}">Añadir al Carrito</button>
            </div>
        `;
        productsGrid.appendChild(productElement);

        // Lógica para deshabilitar botón si no hay stock
        if (product.stock === 0) {
            const button = productElement.querySelector('.btn-add-cart');
            button.disabled = true;
            button.textContent = 'Agotado';
            button.style.backgroundColor = '#ccc';
        }
    });
    
    // Añadir event listeners a los botones
    document.querySelectorAll('.btn-add-cart').forEach(button => {
        button.addEventListener('click', (e) => {
            const productId = parseInt(e.target.getAttribute('data-id'));
            const product = products.find(p => p.id === productId);
            addToCart(product);
        });
    });
}

// Filtrar productos
function filterProducts() {
    const brandValue = brandFilter.value;
    const typeValue = typeFilter.value;
    const priceValue = priceFilter.value;
    
    let filteredProducts = [...products];
    
    // Filtrar por marca
    if (brandValue && brandValue !== '') {
        filteredProducts = filteredProducts.filter(product => product.brand === brandValue);
    }
    
    // Filtrar por tipo
    if (typeValue && typeValue !== '') {
        filteredProducts = filteredProducts.filter(product => product.type === typeValue);
    }
    
    // Filtrar por precio
    if (priceValue && priceValue !== '') {
        if (priceValue === 'low') {
            filteredProducts = filteredProducts.filter(product => product.price < 50);
        } else if (priceValue === 'medium') {
            filteredProducts = filteredProducts.filter(product => product.price >= 50 && product.price < 100);
        } else if (priceValue === 'high') {
            filteredProducts = filteredProducts.filter(product => product.price >= 100);
        }
    }
    
    renderFilteredProducts(filteredProducts);
}

// Renderizar productos filtrados
function renderFilteredProducts(filteredProducts) {
    productsGrid.innerHTML = '';
    
    if (filteredProducts.length === 0) {
        productsGrid.innerHTML = '<p class="no-products">No se encontraron productos con esos filtros.</p>';
        return;
    }

    filteredProducts.forEach(product => {
        const productElement = document.createElement('div');
        productElement.classList.add('product-card');
        productElement.innerHTML = `
            <img src="${product.image}" alt="${product.name}" class="product-image">
            <div class="product-info">
                <h3 class="product-title">${product.name}</h3>
                <p class="product-description">${product.description}</p>
                <p class="product-compatible"><strong>Compatibilidad:</strong> ${product.compatible}</p>
                <div class="product-price">$${parseFloat(product.price).toFixed(2)}</div>
                <button class="btn-add-cart" data-id="${product.id}">Añadir al Carrito</button>
            </div>
        `;
        productsGrid.appendChild(productElement);

        // Lógica para deshabilitar botón si no hay stock
        if (product.stock === 0) {
            const button = productElement.querySelector('.btn-add-cart');
            button.disabled = true;
            button.textContent = 'Agotado';
            button.style.backgroundColor = '#ccc';
        }
    });
    
    // Añadir event listeners a los botones
    document.querySelectorAll('.btn-add-cart').forEach(button => {
        button.addEventListener('click', (e) => {
            const productId = parseInt(e.target.getAttribute('data-id'));
            const product = products.find(p => p.id === productId);
            addToCart(product);
        });
    });
}

// Renderizar productos al cargar la página
document.addEventListener('DOMContentLoaded', initStore);

// Añadir producto al carrito (modificado para recibir el objeto producto)
function addToCart(product) {
    // Ya no necesitas buscar el producto en un array global
    const existingItem = cart.find(item => item.id === product.id);
    
    // La lógica de verificación de stock ahora es más importante que nunca
    const currentQuantityInCart = existingItem ? existingItem.quantity : 0;
    if (currentQuantityInCart >= product.stock) {
        alert('No hay más stock disponible para este producto.');
        return;
    }

    if (existingItem) {
        existingItem.quantity += 1;
    } else {
        cart.push({
            id: product.id,
            name: product.name,
            price: Number(product.price), // Asegura que el precio sea un número
            image: product.image,
            quantity: 1
        });
    }
    
    updateCartCount();
    showNotification(`${product.name} añadido al carrito`);
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Mostrar notificación
function showNotification(message) {
    const notification = document.createElement('div');
    notification.style.position = 'fixed';
    notification.style.bottom = '20px';
    notification.style.right = '20px';
    notification.style.backgroundColor = 'var(--success)';
    notification.style.color = 'white';
    notification.style.padding = '10px 20px';
    notification.style.borderRadius = '4px';
    notification.style.boxShadow = '0 2px 10px rgba(0,0,0,0.2)';
    notification.style.zIndex = '1000';
    notification.textContent = message;
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.style.opacity = '0';
        notification.style.transition = 'opacity 0.5s';
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 500);
    }, 3000);
}

// Actualizar contador del carrito
function updateCartCount() {
    const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
    cartCount.textContent = totalItems;
}

// Abrir carrito
function openCart() {
    console.log('openCart function called');
    console.log('cartModal element:', cartModal);
    console.log('overlay element:', overlay);
    
    if (!cartModal || !overlay) {
        console.error('Missing elements for cart modal');
        return;
    }
    
    renderCartItems();
    cartModal.style.display = 'block';
    overlay.style.display = 'block';
    document.body.style.overflow = 'hidden';
    
    console.log('Cart modal should be visible now');
    console.log('cartModal display:', cartModal.style.display);
    console.log('overlay display:', overlay.style.display);
}

// Cerrar carrito
function closeCart() {
    cartModal.style.display = 'none';
    overlay.style.display = 'none';
    document.body.style.overflow = 'auto';
}

// Renderizar items del carrito
function renderCartItems() {
    cartItems.innerHTML = '';
    
    if (cart.length === 0) {
        cartItems.innerHTML = '<p class="empty-cart">Tu carrito está vacío</p>';
        cartTotal.textContent = 'Total: $0.00';
        return;
    }
    
    let total = 0;
    
    cart.forEach(item => {
        // Forzar conversión a número por si acaso
        const priceNum = Number(item.price);
        const itemTotal = priceNum * item.quantity;
        total += itemTotal;
        
        const cartItemElement = document.createElement('div');
        cartItemElement.classList.add('cart-item');
        cartItemElement.innerHTML = `
            <img src="${item.image}" alt="${item.name}" class="cart-item-image">
            <div class="cart-item-details">
                <div class="cart-item-title">${item.name}</div>
                <div class="cart-item-price">$${priceNum.toFixed(2)} x ${item.quantity} = $${itemTotal.toFixed(2)}</div>
                <div class="cart-item-quantity">
                    <button class="quantity-btn decrease-btn" data-id="${item.id}">-</button>
                    <input type="number" class="quantity-input" value="${item.quantity}" min="1" data-id="${item.id}">
                    <button class="quantity-btn increase-btn" data-id="${item.id}">+</button>
                    <button class="remove-item" data-id="${item.id}">Eliminar</button>
                </div>
            </div>
        `;
        cartItems.appendChild(cartItemElement);
    });
    
    cartTotal.textContent = `Total: $${total.toFixed(2)}`;
    
    // Añadir event listeners a los botones de cantidad
    document.querySelectorAll('.decrease-btn').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = parseInt(e.target.getAttribute('data-id'));
            updateQuantity(id, -1);
        });
    });
    
    document.querySelectorAll('.increase-btn').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = parseInt(e.target.getAttribute('data-id'));
            updateQuantity(id, 1);
        });
    });
    
    document.querySelectorAll('.quantity-input').forEach(input => {
        input.addEventListener('change', (e) => {
            const id = parseInt(e.target.getAttribute('data-id'));
            const newQuantity = parseInt(e.target.value);
            
            if (newQuantity < 1) {
                e.target.value = 1;
                updateQuantity(id, 0, 1);
            } else {
                updateQuantity(id, 0, newQuantity);
            }
        });
    });
    
    document.querySelectorAll('.remove-item').forEach(button => {
        button.addEventListener('click', (e) => {
            const id = parseInt(e.target.getAttribute('data-id'));
            removeFromCart(id);
        });
    });
}

// Actualizar cantidad
function updateQuantity(productId, change, newQuantity = null) {
    const item = cart.find(item => item.id === productId);
    const product = products.find(p => p.id === productId); // Necesitamos el producto para ver su stock

    if (!item || !product) return; // Salida segura si algo no se encuentra

    let targetQuantity;
    if (newQuantity !== null) {
        targetQuantity = newQuantity;
    } else {
        targetQuantity = item.quantity + change;
    }

    // --- ¡NUEVA VERIFICACIÓN DE STOCK! ---
    if (targetQuantity > product.stock) {
        alert(`No puedes añadir más. Solo quedan ${product.stock} unidades de este producto.`);
        item.quantity = product.stock; // Corregimos la cantidad al máximo disponible
    } else if (targetQuantity < 1) {
        removeFromCart(productId);
        return; // Salimos, porque removeFromCart ya actualiza la vista
    } else {
        item.quantity = targetQuantity;
    }
    
    updateCartCount();
    renderCartItems();
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Eliminar producto del carrito
function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    updateCartCount();
    renderCartItems();
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Proceder al pago (ejemplo simplificado)
function checkout() {
    if (cart.length === 0) {
        alert('Tu carrito está vacío');
        return;
    }

    // Simular proceso de checkout
    const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    
    if (confirm(`¿Confirmar compra por un total de $${total.toFixed(2)}?`)) {
        alert('¡Gracias por tu compra! Pedido procesado correctamente.');
        
        // Limpia el carrito y la interfaz
        cart = [];
        localStorage.removeItem('cart');
        updateCartCount();
        closeCart();
        renderProducts(); // Vuelve a cargar los productos
    }
}

// Inicializar la tienda cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM loaded, initializing store...');
    initStore();
    initSearchFunctionality();
    addSearchStyles();
});

// Función de prueba inmediata
window.addEventListener('load', function() {
    console.log('Window loaded, testing elements...');
    
    // Prueba inmediata de elementos
    setTimeout(function() {
        console.log('Testing cart functionality...');
        const testCartIcon = document.getElementById('cartIcon');
        const testCartModal = document.getElementById('cartModal');
        const testOverlay = document.getElementById('overlay');
        
        console.log('Test cartIcon:', testCartIcon);
        console.log('Test cartModal:', testCartModal);
        console.log('Test overlay:', testOverlay);
        
        if (testCartIcon && testCartModal && testOverlay) {
            console.log('All elements found, cart should work');
            
            // Agregar click listener adicional como backup
            testCartIcon.onclick = function(e) {
                console.log('Backup click handler triggered');
                e.preventDefault();
                if (testCartModal && testOverlay) {
                    testCartModal.style.display = 'block';
                    testOverlay.style.display = 'block';
                    document.body.style.overflow = 'hidden';
                    console.log('Modal opened via backup handler');
                }
            };
        } else {
            console.error('Some elements missing in test');
        }
    }, 100);
});

// Implementar funcionalidad del buscador
function initSearchFunctionality() {
    const searchInput = document.getElementById('searchInput');
    const searchBtn = document.getElementById('searchBtn');
    
    if (!searchInput || !searchBtn) {
        console.log('❌ Elementos del buscador no encontrados');
        return;
    }
    
    console.log('🔍 Buscador inicializado correctamente');
    
    let searchTimeout;
    let originalProducts = [];
    
    // Guardar productos originales
    function saveOriginalProducts() {
        const productCards = document.querySelectorAll('.product-card');
        originalProducts = Array.from(productCards).map(card => {
            const nameElement = card.querySelector('h3, .product-name, .card-title');
            const brand = card.dataset.brand || '';
            const type = card.dataset.type || '';
            
            return {
                element: card,
                name: nameElement ? nameElement.textContent.toLowerCase() : '',
                brand: brand.toLowerCase(),
                type: type.toLowerCase()
            };
        });
        console.log('✅ Productos guardados:', originalProducts.length);
    }
    
    // Función de búsqueda
    function performSearch(query) {
        query = query.toLowerCase().trim();
        console.log('🔎 Buscando:', query);
        
        if (originalProducts.length === 0) {
            saveOriginalProducts();
        }
        
        if (!query) {
            showAllProducts();
            return;
        }
        
        const filteredProducts = originalProducts.filter(product => {
            return product.name.includes(query) || 
                   product.brand.includes(query) ||
                   product.type.includes(query);
        });
        
        displaySearchResults(filteredProducts, query);
    }
    
    // Mostrar resultados
    function displaySearchResults(products, query) {
        // Ocultar todos los productos
        originalProducts.forEach(product => {
            product.element.style.display = 'none';
        });
        
        // Mostrar productos que coinciden
        if (products.length > 0) {
            products.forEach(product => {
                product.element.style.display = 'block';
                highlightSearchTerm(product.element, query);
            });
            showSearchStats(products.length, query);
        } else {
            showNoResultsMessage(query);
        }
    }
    
    // Resaltar términos
    function highlightSearchTerm(productElement, query) {
        const nameElement = productElement.querySelector('h3, .product-name, .card-title');
        if (!nameElement) return;
        
        const originalText = nameElement.textContent;
        const regex = new RegExp(`(${query})`, 'gi');
        nameElement.innerHTML = originalText.replace(regex, '<mark style="background: #007bff; color: white; padding: 2px 4px; border-radius: 3px;">$1</mark>');
    }
    
    // Mostrar estadísticas
    function showSearchStats(count, query) {
        removeSearchMessage();
        const productsGrid = document.getElementById('productsGrid');
        
        const statsDiv = document.createElement('div');
        statsDiv.className = 'search-stats alert alert-info d-flex align-items-center mb-4';
        statsDiv.innerHTML = `
            <i class="bi bi-search me-2"></i>
            Se encontraron <strong>${count}</strong> resultado(s) para "<strong>${query}</strong>"
            <button class="btn btn-sm btn-outline-secondary ms-auto" onclick="clearSearch()">
                <i class="bi bi-x"></i> Limpiar
            </button>
        `;
        
        productsGrid.insertBefore(statsDiv, productsGrid.firstChild);
    }
    
    // Sin resultados
    function showNoResultsMessage(query) {
        removeSearchMessage();
        const productsGrid = document.getElementById('productsGrid');
        
        const noResultsDiv = document.createElement('div');
        noResultsDiv.className = 'no-results-message text-center py-5';
        noResultsDiv.innerHTML = `
            <i class="bi bi-search" style="font-size: 4rem; color: #6c757d;"></i>
            <h4 class="text-muted mt-3">No se encontraron resultados</h4>
            <p class="text-muted">No encontramos productos que coincidan con "<strong>${query}</strong>"</p>
            <button class="btn btn-primary" onclick="clearSearch()">
                <i class="bi bi-arrow-left"></i> Ver todos los productos
            </button>
        `;
        
        productsGrid.appendChild(noResultsDiv);
    }
    
    // Mostrar todos
    function showAllProducts() {
        originalProducts.forEach(product => {
            product.element.style.display = 'block';
            // Quitar highlights
            const nameElement = product.element.querySelector('h3, .product-name, .card-title');
            if (nameElement && nameElement.innerHTML.includes('<mark')) {
                nameElement.innerHTML = nameElement.textContent;
            }
        });
        removeSearchMessage();
    }
    
    // Remover mensajes
    function removeSearchMessage() {
        document.querySelectorAll('.search-stats, .no-results-message').forEach(el => el.remove());
    }
    
    // Función global para limpiar
    window.clearSearch = function() {
        searchInput.value = '';
        showAllProducts();
        searchInput.focus();
    };
    
    // Event Listeners
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(() => performSearch(this.value), 300);
    });
    
    searchBtn.addEventListener('click', (e) => {
        e.preventDefault();
        performSearch(searchInput.value);
    });
    
    searchInput.addEventListener('keydown', function(e) {
        if (e.key === 'Enter') {
            e.preventDefault();
            performSearch(this.value);
        }
        if (e.key === 'Escape') {
            clearSearch();
        }
    });
    
    // Inicializar después de que se carguen los productos
    setTimeout(saveOriginalProducts, 1500);
}

// Llamar la función cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    // ... otros códigos existentes ...
    
    // Agregar el buscador
    initSearchFunctionality();
});