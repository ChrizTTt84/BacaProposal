<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Content-Type');

// Verificar que sea una petición POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método no permitido']);
    exit;
}

// Obtener datos del formulario
$input = json_decode(file_get_contents('php://input'), true);

// Validar datos requeridos
$nombre = isset($input['nombre']) ? trim($input['nombre']) : '';
$email = isset($input['email']) ? trim($input['email']) : '';
$telefono = isset($input['telefono']) ? trim($input['telefono']) : '';
$mensaje = isset($input['mensaje']) ? trim($input['mensaje']) : '';

// Validaciones básicas
if (empty($nombre) || empty($email) || empty($mensaje)) {
    echo json_encode(['success' => false, 'message' => 'Por favor complete todos los campos requeridos']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'Por favor ingrese un email válido']);
    exit;
}

// Configuración del correo
$to = 'baca_sales24@grupoindustrialbca.com';
$subject = 'Nuevo mensaje desde el sitio web - Grupo Industrial Baca';

// Crear el cuerpo del mensaje
$body = "
<html>
<head>
    <title>Nuevo mensaje de contacto</title>
</head>
<body>
    <h2>Nuevo mensaje de contacto</h2>
    <p><strong>Nombre:</strong> " . htmlspecialchars($nombre) . "</p>
    <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
    <p><strong>Teléfono:</strong> " . htmlspecialchars($telefono) . "</p>
    <p><strong>Mensaje:</strong></p>
    <p>" . nl2br(htmlspecialchars($mensaje)) . "</p>
    <hr>
    <p><small>Este mensaje fue enviado desde el formulario de contacto del sitio web de Grupo Industrial Baca.</small></p>
</body>
</html>
";

// Configurar headers del email
$headers = array(
    'MIME-Version: 1.0',
    'Content-type: text/html; charset=UTF-8',
    'From: ' . $email,
    'Reply-To: ' . $email,
    'X-Mailer: PHP/' . phpversion()
);

// Intentar enviar el correo
if (mail($to, $subject, $body, implode("\r\n", $headers))) {
    echo json_encode([
        'success' => true, 
        'message' => 'Mensaje enviado correctamente. Nos pondremos en contacto contigo pronto.'
    ]);
} else {
    echo json_encode([
        'success' => false, 
        'message' => 'Error al enviar el mensaje. Por favor intenta nuevamente.'
    ]);
}
?>