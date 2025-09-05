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
                stock: 1 // <-- AÑADIR ESTA LÍNEA
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
                stock: 8 // <-- AÑADIR ESTA LÍNEA
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
                stock: 15 // <-- AÑADIR ESTA LÍNEA
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
                stock: 7 // <-- AÑADIR ESTA LÍNEA
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
                stock: 12 // <-- AÑADIR ESTA LÍNEA
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
                stock: 5 // <-- AÑADIR ESTA LÍNEA
            }
        ];
        
        // Variables globales
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        const cartModal = document.getElementById('cartModal');
        const overlay = document.getElementById('overlay');
        const cartCount = document.getElementById('cartCount');
        const cartItems = document.getElementById('cartItems');
        const cartTotal = document.getElementById('cartTotal');
        const productsGrid = document.getElementById('productsGrid');
        const brandFilter = document.getElementById('brand-filter');
        const typeFilter = document.getElementById('type-filter');
        const priceFilter = document.getElementById('price-filter');
        
        // Inicializar la tienda
        function initStore() {
            renderProducts(products);
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
        function renderProducts(productsArray) {
            productsGrid.innerHTML = '';
            
            if (productsArray.length === 0) {
                productsGrid.innerHTML = '<p class="no-products">No se encontraron productos que coincidan con los filtros.</p>';
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
                        <div class="product-price">$${product.price.toFixed(2)}</div>
                        <button class="btn btn-add-cart" data-id="${product.id}">Añadir al Carrito</button>
                    </div>
                `;
                productsGrid.appendChild(productElement);

                // --- LÓGICA PARA DESHABILITAR BOTÓN SI NO HAY STOCK ---
                if (product.stock === 0) {
                    const button = productElement.querySelector('.btn-add-cart');
                    button.disabled = true;
                    button.textContent = 'Agotado';
                    button.style.backgroundColor = '#ccc';
                }
                // --- FIN DE LA LÓGICA ---
            });
            
            // Añadir event listeners a los botones
            document.querySelectorAll('.btn-add-cart').forEach(button => {
                button.addEventListener('click', (e) => {
                    const productId = parseInt(e.target.getAttribute('data-id'));
                    addToCart(productId);
                });
            });
        }
        
        // Filtrar productos
        function filterProducts() {
            const brandValue = brandFilter.value;
            const typeValue = typeFilter.value;
            const priceValue = priceFilter.value;
            
            let filteredProducts = products.filter(product => {
                // Filtrar por marca
                if (brandValue !== 'all' && product.brand !== brandValue) {
                    return false;
                }
                
                // Filtrar por tipo
                if (typeValue !== 'all' && product.type !== typeValue) {
                    return false;
                }
                
                // Filtrar por precio
                if (priceValue !== 'all') {
                    if (priceValue === '0-50' && product.price > 50) {
                        return false;
                    } else if (priceValue === '50-100' && (product.price <= 50 || product.price > 100)) {
                        return false;
                    } else if (priceValue === '100-150' && (product.price <= 100 || product.price > 150)) {
                        return false;
                    } else if (priceValue === '150+' && product.price <= 150) {
                        return false;
                    }
                }
                
                return true;
            });
            
            renderProducts(filteredProducts);
        }
        
        // Añadir producto al carrito
        function addToCart(productId) {
            const product = products.find(p => p.id === productId);
            const existingItem = cart.find(item => item.id === productId);
            
            // --- LÓGICA DE VERIFICACIÓN DE STOCK ---
            const currentQuantityInCart = existingItem ? existingItem.quantity : 0;
            if (currentQuantityInCart >= product.stock) {
                alert('No hay más stock disponible para este producto.');
                return; // Detiene la función si no hay stock
            }
            // --- FIN DE LA LÓGICA ---

            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
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
                const itemTotal = item.price * item.quantity;
                total += itemTotal;
                
                const cartItemElement = document.createElement('div');
                cartItemElement.classList.add('cart-item');
                cartItemElement.innerHTML = `
                    <img src="${item.image}" alt="${item.name}" class="cart-item-image">
                    <div class="cart-item-details">
                        <div class="cart-item-title">${item.name}</div>
                        <div class="cart-item-price">$${item.price.toFixed(2)} x ${item.quantity} = $${itemTotal.toFixed(2)}</div>
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
        
        // Proceder al pago
        function checkout() {
            if (cart.length === 0) {
                alert('Tu carrito está vacío');
                return;
            }

            // Oculta el botón de "Proceder al Pago" y el total
            document.getElementById('checkoutBtn').style.display = 'none';
            document.getElementById('cartTotal').style.display = 'none';

            // Muestra el formulario de datos del cliente
            const customerForm = document.getElementById('customer-details-form');
            customerForm.style.display = 'block';

            // Listener para el botón "Continuar al Pago"
            document.getElementById('continueToPaymentBtn').addEventListener('click', () => {
                // Validar que los campos no estén vacíos (validación simple)
                const name = document.getElementById('customer-name').value;
                const email = document.getElementById('customer-email').value;
                const address = document.getElementById('customer-address').value;

                if (!name || !email || !address) {
                    alert('Por favor, completa todos los campos.');
                    return;
                }

                // Oculta el formulario de datos del cliente
                customerForm.style.display = 'none';
                // Vuelve a mostrar el total
                document.getElementById('cartTotal').style.display = 'block';

                // Muestra nuestro botón de simulación
                const simulateBtn = document.getElementById('simulatePaymentBtn');
                simulateBtn.style.display = 'block';

                simulateBtn.onclick = function() {
                    // Creamos un objeto 'details' falso, usando los datos del formulario
                    const fakeDetails = {
                        id: "SIMULATED_TRANS_ID_" + new Date().getTime(),
                        payer: {
                            name: {
                                given_name: name.split(' ')[0], // Solo el primer nombre
                                surname: name.split(' ').slice(1).join(' ') // El resto como apellido
                            },
                            email_address: email
                        },
                        purchase_units: [{
                            amount: {
                                value: cart.reduce((sum, item) => sum + item.price * item.quantity, 0).toFixed(2)
                            },
                            shipping: {
                                name: { full_name: name },
                                address: {
                                    address_line_1: address,
                                    admin_area_2: "Ciudad",
                                    admin_area_1: "Provincia",
                                    postal_code: "00000",
                                    country_code: "DO"
                                }
                            }
                        }]
                    };
                    processSuccessfulOrder(fakeDetails);
                };
            });
        }
        
        // --- NUEVA FUNCIÓN PARA PROCESAR EL PEDIDO ---
        function processSuccessfulOrder(details) {
            // Muestra un mensaje de confirmación
            alert('¡Gracias por tu compra! Transacción completada por ' + details.payer.name.given_name);
            
            // --- LÓGICA PARA REDUCIR EL STOCK ---
            cart.forEach(cartItem => {
                const productInDB = products.find(p => p.id === cartItem.id);
                if (productInDB) {
                    productInDB.stock -= cartItem.quantity;
                }
            });
            
            // Rellena el formulario oculto
            document.getElementById('form-cliente-nombre').value = details.payer.name.given_name + ' ' + details.payer.name.surname;
            document.getElementById('form-cliente-email').value = details.payer.email_address;
            document.getElementById('form-paypal-id').value = details.id;

            let productSummary = '';
            cart.forEach(item => {
                productSummary += `${item.name} (x${item.quantity}) - $${(item.price * item.quantity).toFixed(2)}\n`;
            });
            document.getElementById('form-pedido-resumen').value = productSummary;

            const shipping = details.purchase_units[0].shipping;
            const address = shipping.address;
            document.getElementById('form-direccion-envio').value = `${shipping.name.full_name}\n${address.address_line_1}\n${address.admin_area_2}, ${address.admin_area_1} ${address.postal_code}\n${address.country_code}`;

            // Envía el formulario (Opcional: coméntalo si no tienes un ID de Formspree)
            // document.getElementById('order-form').submit();
            
            // Limpia el carrito y la interfaz
            cart = [];
            localStorage.removeItem('cart');
            updateCartCount();
            closeCart();
            
            // Vuelve a mostrar tu botón de checkout y oculta el de PayPal
            document.getElementById('checkoutBtn').style.display = 'block';
            document.getElementById('paypal-button-container').style.display = 'none';

            // --- ¡AÑADIR ESTA LÍNEA! ---
            // Vuelve a renderizar los productos para mostrar el stock actualizado (botones "Agotado")
            filterProducts();
        }

        // Inicializar la tienda cuando el DOM esté listo
        document.addEventListener('DOMContentLoaded', initStore);