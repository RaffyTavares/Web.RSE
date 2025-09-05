<?php
// api/get_products.php

// --- Conexión a la base de datos ---
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

// --- Lógica de filtrado ---
$sql = "SELECT * FROM products WHERE 1=1";
$params = [];

if (!empty($_GET['brand']) && $_GET['brand'] !== 'all') {
    $sql .= " AND brand = ?";
    $params[] = $_GET['brand'];
}

if (!empty($_GET['type']) && $_GET['type'] !== 'all') {
    $sql .= " AND type = ?";
    $params[] = $_GET['type'];
}

// (Aquí puedes añadir la lógica para el filtro de precios si lo deseas)

// --- Ejecutar consulta y devolver JSON ---
$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$products = $stmt->fetchAll();

header('Content-Type: application/json');
echo json_encode($products);
?>