<?php
// inicio.php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - UniBetas PRO</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Estilos específicos para la página de inicio */
    </style>
</head>
<body>
    <div class="main-content">
        <h1>Bienvenido a UniBetas PRO</h1>
        <p>Contenido de la página de inicio...</p>
    </div>
</body>
</html>
