<?php
$servername = "localhost";
$username = "root";  // Cambia según tu configuración
$password = "";      // Cambia según tu configuración
$dbname = "bd";  // Cambia según tu configuración

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
