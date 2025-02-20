<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Cargar las clases de PHPMailer
require 'C:/xampp/htdocs/Web.RSE/PHPMailer-master/PHPMailer-master/src/Exception.php';
require 'C:/xampp/htdocs/Web.RSE/PHPMailer-master/PHPMailer-master/src/PHPMailer.php';
require 'C:/xampp/htdocs/Web.RSE/PHPMailer-master/PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica si los campos están definidos en $_POST
    if (isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['mensaje'])) {
        // Recuperar los datos del formulario
        $nombre = htmlspecialchars($_POST['nombre']);
        $email = htmlspecialchars($_POST['email']);
        $mensaje = htmlspecialchars($_POST['mensaje']);

        // Validar que los campos no estén vacíos
        if (empty($nombre) || empty($email) || empty($mensaje)) {
            echo "Todos los campos son obligatorios.";
            exit;
        }

        // Configurar PHPMailer
        $mail = new PHPMailer(true);

        try {
            // Configuración del servidor SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
            $mail->SMTPAuth = true; // Habilitar autenticación SMTP
            $mail->Username = ' rafaeltavares0266@gmail.com'; // Tu correo Gmail
            $mail->Password = 'dvzw bvqa mzrd rzgg'; // Tu contraseña de Gmail
            $mail->SMTPSecure = 'tls'; // Habilitar encriptación TLS
            $mail->Port = 587; // Puerto SMTP de Gmail

            // Destinatarios
            $mail->setFrom(' rafaeltavares0266@gmail.com', 'R.S.E'); // Remitente
            $mail->addAddress(' rafaeltavares0266@gmail.com'); // Destinatario

            // Contenido del correo
            $mail->isHTML(true ); // Formato de texto plano
            $mail->Subject = 'Nuevo mensaje de contacto'; // Asunto del correo
            $mail->Body = "
                    <!DOCTYPE html>
            <html lang='es'>
                <head>
                    <meta charset='UTF-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                    <title>Nuevo Mensaje de Contacto</title>
                    <style>
                        body {
                        font-family: Arial, sans-serif;
                        background-color: #f4f4f4;
                        color: #333;
                        margin: 0;
                        padding: 0;
                        }

                        .container {
                        max-width: 600px;
                        margin: 20px auto;
                        padding: 20px;
                        background-color: #fff;
                        border-radius: 8px;
                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                        }

                        h1 {
                        color: #007bff;
                        font-size: 24px;
                        margin-bottom: 20px;
                        }

                        p {
                        font-size: 16px;
                        line-height: 1.6;
                        margin: 10px 0;
                        }

                        .label {
                        font-weight: bold;
                        color: #007bff;
                        }

                        .message {
                        background-color: #f9f9f9;
                        padding: 15px;
                        border-left: 4px solid #007bff;
                        margin-top: 20px;
                        }
                    </style>
                </head>

                <body>
                    <div class='container'>
                            <h1>Nuevo Mensaje de Contacto</h1>
                            <p><span class='label'>Nombre:</span> $nombre</p>
                            <p><span class='label'>Email:</span> $email</p>
                        <div class='message'>
                            <p><span class='label'>Mensaje:</span></p>
                            <p>$mensaje</p>
                        </div>
                    </div>
                </body>
            </html>
                    ";

            // Enviar el correo
            $mail->send();
            echo 'Mensaje enviado correctamente.';
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