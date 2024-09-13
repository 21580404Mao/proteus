<?php
// Incluir el archivo de conexión
include('conexion.php');

// Iniciar la sesión
session_start();

$error_message = '';

// Comprobar si el formulario de login fue enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Consultar la base de datos para verificar el usuario
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email = :email AND password = :password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Verificar si el usuario existe
    if ($stmt->rowCount() > 0) {
        // Guardar el email del usuario en la sesión
        $_SESSION['email'] = $email;
        // Redirigir al menú principal (menu.php)
        header('Location: menu.php');
        exit();
    } else {
        $error_message = "Email o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proteus - Sistema de Información de Parqueadero</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script> <!-- Referencia a scripts.js -->
</head>
<body>
    <header>
        <img src="img/logo.jpg" alt="logo">
        <h1>Sistema de información parqueadero público proteus</h1>
    </header>
    
    <section class="banner">
        <h2>Parqueadero Proteus</h2>
        <p>Un servicio de estacionamiento confiable</p>
    </section>
    
    <section class="main-content">
        <div class="image-left">
            <img src="img/Conductor.png" alt="Conductor">
        </div>
        <div class="login-form">
            <h3>Iniciar Sesión</h3>
            <?php if ($error_message): ?>
                <p style="color:red;"><?php echo $error_message; ?></p>
            <?php endif; ?>
            <form method="POST" action="">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </section>
    
    <footer>
        <p>Vigilado superintendencia de industria y comercio - personería N° 320 de junio de 1980 - Resolución N° 1630 del 30 de diciembre de 1989 para parqueadero proteus copyright © Todos los derechos reservados 2024</p>
        <div class="social-icons">
            <a href="https://www.facebook.com/tu_usuario" target="_blank">
                <img src="img/facebook.png" alt="Facebook">
            </a>
            <a href="https://wa.me/1234567890" target="_blank">
                <img src="img/whatsapp.png" alt="WhatsApp">
            </a>
            <a href="https://twitter.com/tu_usuario" target="_blank">
                <img src="img/x.png" alt="X (Twitter)">
            </a>
        </div>
    </footer>
    
    <script>
        // Código de JavaScript puede ir aquí o en un archivo separado (scripts.js)
        // Ejemplo: Validación adicional de formularios o interactividad
    </script>
</body>
</html>
