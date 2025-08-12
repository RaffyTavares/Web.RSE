<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

ini_set('log_errors', 1);
ini_set('error_log', $_SERVER['DOCUMENT_ROOT'] . '/error_log');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar las clases de PHPMailer
require __DIR__ . '/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-master/PHPMailer-master/src/Exception.php';
require __DIR__ . '/PHPMailer-master/PHPMailer-master/src/SMTP.php';


// Configuración de la base de datos
$host = '82.197.82.94';
$db   = 'u594713118_RSE_WEB';
$user = 'u594713118_Rafael_Tavares';
$pass = '@Sebastian1992';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['mensaje'])) {
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $mensaje = htmlspecialchars($_POST['mensaje']);

        // Validar que los campos no estén vacíos
        if (empty($nombre) || empty($email) || empty($mensaje)) {
            echo "Todos los campos son obligatorios.";
            exit;
        }

        // Guardar en la base de datos (sin imagen)
        try {
            $pdo = new PDO($dsn, $user, $pass, $options);
            $stmt = $pdo->prepare("INSERT INTO contacto (nombre, email, mensaje, fecha_envio) VALUES (?, ?, ?, NOW())");
            $stmt->execute([$nombre, $email, $mensaje]);
        } catch (PDOException $e) {
            echo "Error al guardar el mensaje: " . $e->getMessage();
            exit;
        }

        // Configurar PHPMailer
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.hostinger.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'info@rselectronicas.com';
            $mail->Password = '@Sebastian1992';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('info@rselectronicas.com', 'R.S.E');
            $mail->addAddress('info@rselectronicas.com');

            // Adjuntar imagen como archivo si existe y es válida
            if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == UPLOAD_ERR_OK) {
                error_log('Archivo recibido: ' . print_r($_FILES['archivo'], true));
                $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];
                if (in_array($_FILES['archivo']['type'], $allowedTypes)) {
                    error_log('Tipo permitido, adjuntando: ' . $_FILES['archivo']['name']);
                    $mail->addAttachment($_FILES['archivo']['tmp_name'], $_FILES['archivo']['name']);
                } else {
                    error_log('Tipo de archivo no permitido: ' . $_FILES['archivo']['type']);
                }
            }

            // AHORA arma el cuerpo del correo
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';
            $mail->Subject = 'Nuevo mensaje de R.S.E';
            $mail->Body = "
                <!DOCTYPE html>
                <html lang='es'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <title>Nuevo Mensaje de R.S.E</title>
                        <style>
                            body { font-family: Arial, sans-serif; background-color: #f4f4f4; color: #333; margin: 0; padding: 0; }
                            .container { max-width: 600px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
                            h1 { color: #007bff; font-size: 24px; margin-bottom: 20px; }
                            p { font-size: 16px; line-height: 1.6; margin: 10px 0; }
                            .label { font-weight: bold; color: #007bff; }
                            .message { background-color: #f9f9f9; padding: 15px; border-left: 4px solid #007bff; margin-top: 20px; }
                        </style>
                    </head>
                    <body>
                        <div class='container'>
                            <h1>Nuevo Mensaje de R.S.E</h1>
                            <p><span class='label'>Nombre:</span> $nombre</p>
                            <p><span class='label'>Email:</span> $email</p>
                            <div class='message'>
                                <p><span class='label'>Mensaje:</span></p>
                                <p>$mensaje</p>
                            </div>
                            <p style='margin-top:20px;'><strong>Imagen adjunta:</strong> Si el usuario adjuntó una imagen, la encontrarás como archivo adjunto en este correo.</p>
                        </div>
                    </body>
                </html>
            ";

            $mail->send();
            echo '
            <div style="text-align:center; margin: 2rem 0;">
                <div style="
                    display: inline-block;
                    background: #222;
                    color: #fff;
                    padding: 0.75rem 2rem;
                    border-radius: 2rem;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    font-size: 1.1rem;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
                    margin-bottom: 1.5rem;
                ">
                    Mensaje enviado correctamente.
                </div>
                <br>
                 <a href="https://rselectronicas.com/" style="
                    display: inline-block;
                    background: #007bff;
                    color: #fff;
                    padding: 0.75rem 2rem;
                    border-radius: 2rem;
                    text-decoration: none;
                    font-family: Arial, sans-serif;
                    font-size: 1.1rem;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.15);
                    transition: background 0.2s, color 0.2s;
                    margin-top: 1.5rem;
                " onmouseover="this.style.background=\'#0056b3\';" onmouseout="this.style.background=\'#007bff\';">
                    ← Volver al inicio
                </a>
            </div>
            ';

        } catch (Exception $e) {
            echo "Error al enviar el mensaje: {$mail->ErrorInfo}";
        }
    } else {
        echo "Todos los campos son obligatorios.";
    }
} else {
    echo "Acceso no permitido.";
}
?>