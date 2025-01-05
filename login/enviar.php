<?php
session_start();
include("../config/database.php"); // Asegúrate de tener este archivo de conexión a la base de datos

// Comprobamos si el formulario es para iniciar sesión o registrarse
if (isset($_POST['action'])) {
    // Acción de iniciar sesión
    if ($_POST['action'] == 'login') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validar datos del usuario
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // Verificar la contraseña
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: ../principal/principal.php");
                exit;
            } else {
                echo "Contraseña incorrecta";
            }
        } else {
            echo "Usuario no encontrado";
        }
    }

    // Acción de registro
    elseif ($_POST['action'] == 'register') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Verificar si el usuario ya existe
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "El usuario ya existe";
        } else {
            // Insertar nuevo usuario
            $password_hash = password_hash($password, PASSWORD_DEFAULT); // Cifrado de la contraseña
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password_hash);
            if ($stmt->execute()) {
                $_SESSION['user_id'] = $conn->insert_id;
                $_SESSION['username'] = $username;
                header("Location: ../principal/principal.php");
                exit;
            } else {
                echo "Error al registrar el usuario";
            }
        }
    }
}
?>
