<?php
// api/checkout.php

$host = 'localhost';
$db   = 'nombre_de_tu_db';
$user = 'tu_usuario_db';
$pass = 'tu_contraseña_db';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error de conexión a la base de datos.']);
    exit;
}

// --- Procesar el pedido ---
// Esperamos recibir un JSON con los detalles del carrito

$data = json_decode(file_get_contents('php://input'), true);
$cart = $data['cart'];

if (empty($cart)) {
    http_response_code(400);
    echo json_encode(['error' => 'El carrito está vacío.']);
    exit;
}

try {
    $pdo->beginTransaction();

    foreach ($cart as $item) {
        // Actualizar el stock para cada producto
        $sql = "UPDATE products SET stock = stock - ? WHERE id = ? AND stock >= ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$item['quantity'], $item['id'], $item['quantity']]);

        if ($stmt->rowCount() === 0) {
            // Si rowCount es 0, significa que no había suficiente stock
            throw new Exception('Stock insuficiente para el producto: ' . $item['name']);
        }
    }

    $pdo->commit();
    
    // Aquí también podrías guardar el pedido en una tabla 'orders'
    // y enviar un correo de confirmación.

    echo json_encode(['success' => true, 'message' => 'Pedido procesado con éxito.']);

} catch (Exception $e) {
    $pdo->rollBack();
    http_response_code(400); // Bad Request
    echo json_encode(['success' => false, 'error' => $e->getMessage()]);
}
?>