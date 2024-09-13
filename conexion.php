<?php
// Datos de conexión
$host = "localhost";
$dbname = "proteus_parqueadero";
$username = "root";  // Usuario por defecto en XAMPP/WAMP
$password = "";      // Dejar en blanco si no tiene contraseña

try {
    // Conexión PDO
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Configurar errores PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexión exitosa"; // Puedes habilitar esto para probar la conexión
} catch (PDOException $e) {
    // Mostrar error en la conexión
    echo "Error en la conexión: " . $e->getMessage();
    exit();
}
?>
