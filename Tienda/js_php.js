// Base de datos de productos (simulada)
// const products = [
//     {
//         id: 1,
//         name: "Tarjeta Principal Samsung Inverter",
//         description: "Tarjeta principal compatible con aires acondicionados Samsung inverter serie AR/MV.",
//         price: 89.99,
//         image: "https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
//         brand: "samsung",
//         type: "control",
//         compatible: "Samsung AR12, AR18, AR24",
//         stock: 1 // <-- AÑADIR ESTA LÍNEA
//     },
//     {
//         id: 2,
//         name: "Tarjeta de Potencia LG Inverter",
//         description: "Tarjeta de potencia para modelos LG inverter de 12,000 a 24,000 BTU.",
//         price: 75.50,
//         image: "https://images.unsplash.com/photo-1558618666-fcd25c85cd64?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
//         brand: "lg",
//         type: "power",
//         compatible: "LG Dual Cool, Art Cool",
//         stock: 8 // <-- AÑADIR ESTA LÍNEA
//     },
//     {
//         id: 3,
//         name: "Tarjeta Display Midea Inverter",
//         description: "Tarjeta de display y control para aires acondicionados Midea inverter.",
//         price: 45.00,
//         image: "https://images.unsplash.com/photo-1593105544552-8614e8746f0a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
//         brand: "midea",
//         type: "display",
//         compatible: "Midea MSMA series",
//         stock: 15 // <-- AÑADIR ESTA LÍNEA
//     },
//     {
//         id: 4,
//         name: "Tarjeta Control Carrier Inverter",
//         description: "Tarjeta de control principal para equipos Carrier inverter de 18,000 BTU.",
//         price: 110.00,
//         image: "https://images.unsplash.com/photo-1560717789-0ac7c58ac90a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
//         brand: "carrier",
//         type: "control",
//         compatible: "Carrier 38MGR, 40MGR",
//         stock: 7 // <-- AÑADIR ESTA LÍNEA
//     },
//     {
//         id: 5,
//         name: "Tarjeta Potencia Samsung Inverter",
//         description: "Tarjeta de potencia para modelos Samsung inverter de alta eficiencia.",
//         price: 95.00,
//         image: "https://images.unsplash.com/photo-1510551317070-0be1a79eec7f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
//         brand: "samsung",
//         type: "power",
//         compatible: "Samsung Wind-Free series",
//         stock: 12 // <-- AÑADIR ESTA LÍNEA
//     },
//     {
//         id: 6,
//         name: "Tarjeta Control LG Inverter",
//         description: "Tarjeta de control principal para equipos LG inverter dual inverter.",
//         price: 120.00,
//         image: "https://images.unsplash.com/photo-1591799264318-7e6ef8ddb7ea?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80",
//         brand: "lg",
//         type: "control",
//         compatible: "LG Dual Inverter",
//         stock: 5 // <-- AÑADIR ESTA LÍNEA
// }];

// Variables globales
let cart = JSON.parse(localStorage.getItem('cart')) || [];
let cartModal, overlay, cartCount, cartItems, cartTotal, productsGrid, brandFilter, typeFilter, priceFilter;

// Inicializar la tienda
function initStore() {
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

    renderProducts(); // Carga inicial de todos los productos
    updateCartCount();

    // Event listeners
    document.getElementById('cartIcon').addEventListener('click', openCart);
    document.getElementById('closeCart').addEventListener('click', closeCart);
    document.getElementById('checkoutBtn').addEventListener('click', checkout);
    overlay.addEventListener('click', closeCart);

    // Filtros
    brandFilter.addEventListener('change', filterProducts);
    typeFilter.addEventListener('change', filterProducts);
    priceFilter.addEventListener('change', filterProducts);
}

// Renderizar productos
async function renderProducts(queryParams = '') { // La función ahora es asíncrona
    productsGrid.innerHTML = '<p>Cargando productos...</p>';
    
    try {
        // Petición a tu API PHP
        const response = await fetch(`api/get_products.php?${queryParams}`);
        const productsArray = await response.json();
        // Guardar productos en variable global para acceso en updateQuantity
        window.products = productsArray;

        productsGrid.innerHTML = '';
        
        if (productsArray.length === 0) {
            productsGrid.innerHTML = '<p class="no-products">No se encontraron productos.</p>';
            return;
        }

        productsArray.forEach(product => {
            const productElement = document.createElement('div');
            productElement.classList.add('product-card');
            productElement.innerHTML = `
                <img src="${product.image}" alt="${product.name}" class="product-image">
                <div class="product-info">
                    <h3 class="product-title">${product.name}</h3>
                    <p class="product-description">${product.description}</p>
                    <p class="product-compatible"><strong>Compatibilidad:</strong> ${product.compatible}</p>
                    <div class="product-price">$${parseFloat(product.price).toFixed(2)}</div>
                    <button class=" btn-add-cart" data-id="${product.id}">Añadir al Carrito</button>
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
                // Necesitas encontrar el producto en el array que acabas de recibir
                const product = productsArray.find(p => p.id === productId);
                addToCart(product); // Pasamos el objeto completo
            });
        });

    } catch (error) {
        productsGrid.innerHTML = '<p class="no-products">Error al cargar los productos. Inténtalo de nuevo más tarde.</p>';
        console.error('Error fetching products:', error);
    }
}

// Filtrar productos
function filterProducts() {
    const brandValue = brandFilter.value;
    const typeValue = typeFilter.value;
    const priceValue = priceFilter.value;
    
    // Construir los parámetros para la URL
    const params = new URLSearchParams();
    params.append('brand', brandValue);
    params.append('type', typeValue);
    params.append('price', priceValue);
    
    // Llamar a renderProducts con los filtros
    renderProducts(params.toString());
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
    renderCartItems();
    cartModal.style.display = 'block';
    overlay.style.display = 'block';
    document.body.style.overflow = 'hidden';
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
async function checkout() {
    if (cart.length === 0) {
        alert('Tu carrito está vacío');
        return;
    }

    try {
        const response = await fetch('api/checkout.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ cart: cart }), // Envía el carrito al backend
        });

        const result = await response.json();

        if (result.success) {
            alert('¡Gracias por tu compra! Pedido procesado correctamente.');
            // Limpia el carrito y la interfaz
            cart = [];
            localStorage.removeItem('cart');
            updateCartCount();
            closeCart();
            renderProducts(); // Vuelve a cargar los productos para actualizar el stock visualmente
        } else {
            // El backend devolvió un error (ej. falta de stock)
            alert(`Error al procesar el pedido: ${result.error}`);
        }
    } catch (error) {
        alert('Hubo un problema de conexión. Por favor, inténtalo de nuevo.');
        console.error('Checkout error:', error);
    }
}

// Inicializar la tienda cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', initStore);