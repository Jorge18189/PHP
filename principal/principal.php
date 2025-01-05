<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniBetas PRO</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        :root {
            --primary-blue: #2196f3;
            --dark-purple: #66375d;
            --light-gray: #f5f5f5;
            --white: #ffffff;
        }

        body {
            display: flex;
            min-height: 100vh;
            background-color: var(--light-gray);
        }

        .sidebar {
            width: 250px;
            background-color: var(--white);
            padding: 20px 0;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .main-content {
            flex: 1;
            margin-top: 60px; /* Add margin for fixed header */
            padding: 20px;
            min-height: calc(100vh - 60px); /* Ensure full height */
        }

        .logo {
            padding: 10px 20px;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 150px;
        }

        .menu-item {
            padding: 12px 20px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s;
            color: #666;
            font-size: 14px;
        }

        .menu-item i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .menu-item:hover {
            background-color: #f0f0f0;
        }

        .menu-item.active {
            background-color: #e3f2fd;
            color: var(--primary-blue);
            border-left: 4px solid var(--primary-blue);
        }

        .progress-section {
            background: var(--white);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .progress-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .progress-title h2 {
            font-size: 18px;
            color: #333;
        }

        .ver-mas {
            color: var(--primary-blue);
            text-decoration: none;
            font-size: 14px;
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .course-card {
            background: var(--white);
            border-radius: 8px;
            padding: 20px;
            display: flex;
            align-items: center;
            cursor: pointer;
            transition: transform 0.2s;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .course-card:hover {
            transform: translateY(-2px);
        }

        .course-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-blue);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
        }

        .course-info h3 {
            font-size: 16px;
            margin-bottom: 5px;
            color: #333;
        }

        .progress-bar {
            height: 4px;
            background: #eee;
            border-radius: 2px;
            margin-top: 8px;
            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            background: var(--primary-blue);
            width: 0%;
            transition: width 0.3s ease;
        }

        .alert-box {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            border: 1px solid #dee2e6;
        }

        .alert-title {
            color: #333;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .alert-content {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
        }

        @media (max-width: 768px) {
            .sidebar {
                position: fixed;
                left: 0;
                top: 0;
                bottom: 0;
                z-index: 100;
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .menu-toggle {
                display: block;
            }

            .main-content {
                margin-left: 0;
            }

            .course-grid {
                grid-template-columns: 1fr;
            }
        }
        .top-nav {
            position: fixed;
            top: 0;
            right: 0;
            left: 250px;
            height: 60px;
            background: var(--white);
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding: 0 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 50;
        }

        .top-nav-items {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #666;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: background-color 0.2s;
        }

        .nav-item:hover {
            background-color: #f0f0f0;
        }

        .nav-item i {
            font-size: 18px;
        }

        .progress-indicator {
            color: var(--primary-blue);
            font-weight: bold;
        }

        .profile-avatar {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--dark-purple);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 16px;
        }

        .notification-badge {
            position: relative;
        }

        .notification-badge::after {
            content: '';
            position: absolute;
            top: -2px;
            right: -2px;
            width: 8px;
            height: 8px;
            background: #ff4444;
            border-radius: 50%;
        }

        .main-content {
            margin-top: 60px; /* Add margin for fixed header */
            padding: 20px;
        }

        @media (max-width: 768px) {
            .top-nav {
                left: 0;
            }

            .nav-item span {
                display: none;
            }
        }
    </style>
</head>
<body>
<div class="sidebar">
        <div class="logo">
            <img src="../imagenes/LogoRectangulo.jpg" alt="UniBetas Logo">
        </div>
        <a href="javascript:void(0);" class="menu-item" data-page="inicio">
            <i class="fas fa-home"></i>
            INICIO
        </a>
        <a href="javascript:void(0);" class="menu-item" data-page="opciones">
            <i class="fas fa-book"></i>
            OPCIONES EDUCATIVAS
        </a>
        <a href="javascript:void(0);" class="menu-item" data-page="materiales">
            <i class="fas fa-comments"></i>
            MATERIALES
        </a>
        <a href="javascript:void(0);" class="menu-item" data-page="simulacros">
            <i class="fas fa-calendar"></i>
            SIMULACROS 2025
        </a>
        <a href="javascript:void(0);" class="menu-item" data-page="foda">
            <i class="fas fa-calendar-alt"></i>
            TESTS DE ORIENTACION
        </a>
        <a href="javascript:void(0);" class="menu-item" data-page="chat">
            <i class="fas fa-file-alt"></i>
            CHAT GRUPAL
        </a>
        <a href="javascript:void(0);" class="menu-item" data-page="juegos">
            <i class="fas fa-cog"></i>
            JUEGOS
        </a>
        <a href="javascript:void(0);" class="menu-item" data-page="mentor">
            <i class="fas fa-graduation-cap"></i>
            MENTOR VIRTUAL
        </a>
        <a href="javascript:void(0);" class="menu-item" data-page="progreso">
            <i class="fas fa-globe"></i>
            PROGRESO
        </a>
       
    </div>

    <div class="main-content">
        <div id="contenido">
            <!-- Content will be loaded here -->
        </div>

        <!-- Rest of your existing content -->
    </div>

    
    <div class="top-nav">
        <div class="top-nav-items">
            <div class="nav-item">
                <i class="fas fa-file-alt"></i>
                <span>Notas</span>
            </div>
            <div class="nav-item notification-badge">
                <i class="fas fa-bell"></i>
                <span>Notificaciones</span>
            </div>
            <div class="nav-item">
                <i class="fas fa-chart-line"></i>
                <span class="progress-indicator">PROGRESO</span>
            </div>
            <a href="javascript:void(0);" class="menu-item" data-page="perfil">
    <div class="nav-item">
        <div class="profile-avatar">
            A
        </div>
    </div>
</a>
        </div>
    </div>


    <script>
document.addEventListener('DOMContentLoaded', function () {
    // Seleccionar todos los elementos con la clase 'menu-item'
    const menuItems = document.querySelectorAll('.menu-item');

    // Añadir un evento de clic a cada elemento del menú
    menuItems.forEach(item => {
        item.addEventListener('click', function () {
            // Obtener el nombre de la página desde el atributo 'data-page'
            const page = item.getAttribute('data-page');
            const contentDiv = document.getElementById('contenido');

            // Intentar cargar el archivo PHP correspondiente
            fetch(`../principal/${page}.php`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Error al cargar el contenido. Código de error: ' + response.status);
                    }
                    return response.text(); // Obtener el contenido del archivo
                })
                .then(data => {
                    // Insertar el contenido en el div con id 'contenido'
                    contentDiv.innerHTML = data;
                })
                .catch(error => {
                    console.error('Hubo un problema con la solicitud:', error);
                    // Mostrar un mensaje de error si no se puede cargar la página
                    contentDiv.innerHTML = `<p>Error al cargar el contenido. Intenta nuevamente.</p>`;
                });
        });
    });

    // Cargar la página de inicio por defecto al cargar el sitio
    fetch('../principal/inicio.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('contenido').innerHTML = data;
        })
        .catch(error => {
            console.error('Error al cargar la página de inicio:', error);
            document.getElementById('contenido').innerHTML = `<p>Error al cargar la página de inicio.</p>`;
        });
});


</script>

</body>
</html>