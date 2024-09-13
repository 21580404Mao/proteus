<?php
session_start();

// Si el usuario no está autenticado, redirigirlo al login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit;
}

// Si se recibe la acción de "logout", destruimos la sesión y redirigimos al login
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proteus - Sistema de Información</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <!-- Encabezado con el menú -->
    <header>
        <div class="logo">
            <img src="img/logo.jpg" alt="Logo Proteus">
        </div>
        <nav class="navbar">
            <ul>
                <li><a href="inicio.php">Inicio</a></li>
                <li><a href="comprar.php">Comprar</a></li>
                <li><a href="atencion_cliente.php">Atención al cliente</a></li>
                <li><a href="reserva_online.php">Reserva online</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="menu.php?action=logout">Cerrar Sesión</a></li> <!-- Botón de Logout -->
            </ul>
        </nav>
    </header>

    <!-- Sección principal con la información y la imagen del conductor -->
    <section id="contenido-principal">
        <div class="info-box">
            <h1>¿Qué es Proteus?</h1>
            <p>Es un sistema de información web, que provee las herramientas y tecnología necesarias, para llevar a cabo actividades relacionadas con el servicio de parqueadero.</p>
            <button>APRENDER MÁS...</button>
        </div>
        <div class="image-box">
            <img src="img/Conductor.png" alt="Conductor">
        </div>
    </section>

    <!-- Sección de redes sociales -->
    <section id="redes-sociales">
        <h2>¡Vamos a chatear!</h2>
        <div class="social-icons">
            <a href="https://wa.me/1234567890"><img src="img/whatsapp.png" alt="WhatsApp"></a>
            <a href="https://twitter.com/tu_usuario"><img src="img/x.png" alt="X"></a>
            <a href="https://www.facebook.com/tu_usuario"><img src="img/facebook.png" alt="Facebook"></a>
        </div>
    </section>

    <!-- Pie de página -->
    <footer>
        <p>Vigilado por la superintendencia de industria y comercio, personería N° 320 de junio de 1980 - Resolución N° 1630 del 30 de diciembre de 1989<br>
        © Todos los derechos reservados - Proteus 2024</p>
    </footer>

</body>
</html>
