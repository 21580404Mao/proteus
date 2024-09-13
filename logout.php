<?php
// Iniciar la sesión
session_start();

// Destruir todas las sesiones
session_unset();
session_destroy();

// Redirigir al inicio de sesión
header('Location: index.php');
exit();
