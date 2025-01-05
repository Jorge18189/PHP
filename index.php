<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>LSA - Learn. Study. Achieve</title>
        <link rel="icon" type="image/png" href="imagenes/Savy.png">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
        <style>

            .dark-mode .wave path {
                fill: #1a1a1a;
            }
            .wave svg path {
                fill: #fff;
            }

            .dark-mode .wave svg path {
                fill: #000 !important;
            }


            .dark-mode {
                background-color: #000000;
                color: #ffffff;
            }

            .dark-mode body,
            .dark-mode .contenedor,
            .dark-mode .sobre-nosotros,
            .dark-mode .sobre-savy,
            .dark-mode .portafolio,
            .dark-mode .cards .card,
            .dark-mode footer,
            .dark-mode .contenedor-footer {
                background-color: #000000 !important;
                color: #ffffff !important;
            }


            .dark-mode p {
                color: #ffffff !important;
            }


            .dark-mode .contenido-textos h3 span {
                background-color: #ffffff !important;
                color: #000000 !important;
                box-shadow: 0 0 6px 0 rgba(255, 255, 255, 0.5);
            }

            .dark-mode nav > a {
                color: #ffffff !important;
            }


            .wave svg path {
                fill: #ffffff;
            }

            .dark-mode .wave svg path {
                fill: #000000 !important;
            }

            header .textos-header h1,
            header .textos-header h2,
            header .textos-header h3 {
                color: #ffffff !important;
            }


            .dark-mode .content-foo h4 {
                color: #ffffff;
                border-color: #ffffff;
            }
                        .dark-mode .titulo {
                color: #ffffff;
                border-color: #ffffff;
            }

            .dark-mode .content-foo p {
                color: #ffffff;
            }

            .dark-mode .titulo-final {
                color: #ffffff;
            }


            .theme-switch, .login-btn {
                background: none;
                border: 2px solid #fff;
                color: #fff;
                padding: 8px 15px;
                cursor: pointer;
                font-family: 'Open Sans', sans-serif;
                font-size: 16px;
                border-radius: 20px;
                transition: 0.3s;
                margin-left: 10px;
            }

            .theme-switch:hover, .login-btn:hover {
                background: rgba(255, 255, 255, 0.2);
                transform: scale(1.05);
            }
            .dark-mode .imagen-about-us {
                content: url('imagenes/Savy.png') !important;
            }
.pricing-section {
    padding: 4rem 2rem;
    max-width: 1200px;
    margin: 0 auto;
    font-family: system-ui, -apple-system, sans-serif;
}

.pricing-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.pricing-card {
    background-color: #f8f9ff;
    border-radius: 12px;
    padding: 2rem;
    position: relative;
    transition: transform 0.3s ease;
}

.pricing-card:hover {
    transform: translateY(-5px);
}

.pricing-card.popular {
    background-color: #fff;
    border: 2px solid #6b46ff;
}

.popular-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #6b46ff;
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
}

.plan-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a1f36;
    margin-bottom: 0.5rem;
}

.plan-description {
    color: #4a5568;
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
}

.price-tag {
    display: flex;
    align-items: baseline;
    margin-bottom: 0.5rem;
}

.original-price {
    color: #a0aec0;
    text-decoration: line-through;
    font-size: 0.875rem;
    margin-right: 0.5rem;
}

.discount-badge {
    background-color: #ebedff;
    color: #6b46ff;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    margin-left: 0.5rem;
}

.price {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a1f36;
}

.price-period {
    color: #4a5568;
    font-size: 0.875rem;
    margin-left: 0.25rem;
}

.term-info {
    color: #4a5568;
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
}

.choose-button {
    width: 100%;
    padding: 0.875rem;
    border-radius: 8px;
    font-weight: 600;
    text-align: center;
    cursor: pointer;
    margin-bottom: 1rem;
    border: 2px solid #6b46ff;
}

.choose-button.primary {
    background-color: #6b46ff;
    color: white;
}

.choose-button.secondary {
    background-color: transparent;
    color: #6b46ff;
}

.renewal-info {
    color: #4a5568;
    font-size: 0.875rem;
    margin-bottom: 2rem;
}

.features-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    color: #1a1f36;
    font-size: 0.875rem;
}

.feature-item::before {
    content: "✓";
    color: #10b981;
    margin-right: 0.5rem;
    font-weight: bold;
}

.feature-item.disabled::before {
    content: "−";
    color: #a0aec0;
}

.see-all {
    color: #6b46ff;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.875rem;
    display: flex;
    align-items: center;
    margin-top: 1.5rem;
}

.see-all::after {
    content: "▼";
    font-size: 0.75rem;
    margin-left: 0.5rem;
}
        </style>
        <style>
            .reveal {
                position: relative;
                opacity: 0;
                transform: translateY(150px);
                transition: all 1s ease;
            }

            .reveal.active {
                opacity: 1;
                transform: translateY(0px);
            }

            .reveal-title {
                opacity: 0;
                transform: translateY(20px);
                transition: all 0.8s ease;
            }

            .reveal-title.active {
                opacity: 1;
                transform: translateY(0);
            }

            .contenedor.sobre-nosotros,
            .portafolio,
            .clientes,
            .sobre-savy {
                overflow: hidden;
            }
        </style>

        <script>
            function reveal() {
                const reveals = document.querySelectorAll('.reveal');
                const revealTitles = document.querySelectorAll('.reveal-title');

                reveals.forEach(element => {
                    const windowHeight = window.innerHeight;
                    const elementTop = element.getBoundingClientRect().top;
                    const elementVisible = 150;

                    if (elementTop < windowHeight - elementVisible) {
                        element.classList.add('active');
                    }
                });

                revealTitles.forEach(title => {
                    const windowHeight = window.innerHeight;
                    const elementTop = title.getBoundingClientRect().top;
                    const elementVisible = 150;

                    if (elementTop < windowHeight - elementVisible) {
                        title.classList.add('active');
                    }
                });
            }

            document.addEventListener('DOMContentLoaded', () => {
                const mainSections = document.querySelectorAll('.contenedor-sobre-nosotros, .galeria-port, .cards, .contenedor-sobre-savy');
                mainSections.forEach(section => {
                    section.classList.add('reveal');
                });

                const titles = document.querySelectorAll('.titulo');
                titles.forEach(title => {
                    title.classList.add('reveal-title');
                });

                window.addEventListener('scroll', reveal);
                reveal();
            });
        </script>
    </head>
    <body>
        <header>
            <nav>
                <div class="lsa-text">LSA</div>
                <a href="#">Inicio</a>
                <a href="#Acerca">Acerca de</a>
                <a href="#Servicios">Servicios</a>
                <a href="#Opiniones">Opiniones</a>
                <button class="login-btn" onclick="window.location.href = 'login/login.php'">Acceder</button>
                <button class="theme-switch" onclick="toggleTheme()">🌙</button>
            </nav>

            <section class="textos-header">
                <h1>L.S.A.</h1>
                <h2>Learn. Study. Achieve.</h2>
                <h3>El futuro de la educación</h3>
            </section>
            <div class="wave" style="height: 150px; overflow: hidden;">
                <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
                </svg>
            </div>
        </header>

        <main>

            <section class="contenedor sobre-nosotros" id="Acerca">
                <h2 class="titulo">Nuestro producto</h2>
                <div class="contenedor-sobre-nosotros">
                    <img src="imagenes/LogoRectangulo.jpg" alt="" class="imagen-about-us">
                    <div class="contenido-textos">
                        <h3>L. S. A.</h3>
                        <p>Nuestro objetivo es brindar una herramienta de alta calidad para 
                            estudiantes de nivel medio superior, que les 
                            ayude a elegir la carrera adecuada y los prepare
                            de manera efectiva para ingresar a la educación 
                            superior.</p>
                    </div>
                </div>
            </section>
            <section class="portafolio" id="Servicios">
                <div class="contenedor">
                    <h2 class="titulo">Servicios a Ofrecer</h2>
                    <div class="galeria-port">
                        <div class="imagen-port">
                            <img src="imagenes/img1.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Opciones Eduvativas</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="imagenes/img2.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Examenes Simuladores</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="imagenes/img3.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Softskills</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="imagenes/img1.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Juegos Interactivos</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="imagenes/img4.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Mentor Virtual</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="imagenes/img5.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Desafios Semanales</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="imagenes/img6.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Foro Estudiantil</p>
                            </div>
                        </div>
                        <div class="imagen-port">
                            <img src="imagenes/img7.jpg" alt="">
                            <div class="hover-galeria">
                                <img src="img/icono1.png" alt="">
                                <p>Retroalimentacion</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="clientes contenedor" id="Opiniones">
                <h2 class="titulo">Qué dicen nuestros alumnos</h2>
                <div class="cards">
                    <div class="card">
                        <img src="imagenes/face1.jpeg" alt="Alejandro Perez">
                        <div class="contenido-texto-card">
                            <h4>Alejandro Perez</h4>
                            <p>"Gracias a esta plataforma logré identificar las áreas en las que debía mejorar. Ahora estoy cursando mi primer semestre en la UNAM."</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="imagenes/face2.jpeg" alt="Elena Garcia">
                        <div class="contenido-texto-card">
                            <h4>Elena Garcia</h4>
                            <p>"El simulador de examen me ayudó muchísimo. Los temas estaban bien organizados y eso me permitió ingresar al IPN sin problemas."</p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="imagenes/face3.jpeg" alt="Carlos Mendoza">
                        <div class="contenido-texto-card">
                            <h4>Carlos Mendoza</h4>
                            <p>"Gracias a los recursos ofrecidos, pude prepararme de manera efectiva y conseguir un lugar en la UAM. ¡Totalmente recomendado!"</p>
                        </div>
                    </div>
                </div>
            </section>
            
           <style>
/* Previous CSS styles remain the same */
.pricing-section {
    padding: 4rem 2rem;
    max-width: 1200px;
    margin: 0 auto;
    font-family: system-ui, -apple-system, sans-serif;
}

.pricing-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    margin-top: 2rem;
}

.pricing-card {
    background-color: #f8f9ff;
    border-radius: 12px;
    padding: 2rem;
    position: relative;
    transition: transform 0.3s ease;
}

.pricing-card:hover {
    transform: translateY(-5px);
}

.pricing-card.popular {
    background-color: #fff;
    border: 2px solid #6b46ff;
}

.popular-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background-color: #6b46ff;
    color: white;
    padding: 0.5rem 1.5rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
}

.plan-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a1f36;
    margin-bottom: 0.5rem;
}

.plan-description {
    color: #4a5568;
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
}

.price-tag {
    display: flex;
    align-items: baseline;
    margin-bottom: 0.5rem;
}

.original-price {
    color: #a0aec0;
    text-decoration: line-through;
    font-size: 0.875rem;
    margin-right: 0.5rem;
}

.discount-badge {
    background-color: #ebedff;
    color: #6b46ff;
    padding: 0.25rem 0.75rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    margin-left: 0.5rem;
}

.price {
    font-size: 2.5rem;
    font-weight: 700;
    color: #1a1f36;
}

.price-period {
    color: #4a5568;
    font-size: 0.875rem;
    margin-left: 0.25rem;
}

.term-info {
    color: #4a5568;
    font-size: 0.875rem;
    margin-bottom: 1.5rem;
}

.choose-button {
    width: 100%;
    padding: 0.875rem;
    border-radius: 8px;
    font-weight: 600;
    text-align: center;
    cursor: pointer;
    margin-bottom: 1rem;
    border: 2px solid #6b46ff;
}

.choose-button.primary {
    background-color: #6b46ff;
    color: white;
}

.choose-button.secondary {
    background-color: transparent;
    color: #6b46ff;
}

.renewal-info {
    color: #4a5568;
    font-size: 0.875rem;
    margin-bottom: 2rem;
}

.features-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.feature-item {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
    color: #1a1f36;
    font-size: 0.875rem;
}

.feature-item::before {
    content: "✓";
    color: #10b981;
    margin-right: 0.5rem;
    font-weight: bold;
}

.feature-item.disabled::before {
    content: "−";
    color: #a0aec0;
}

.see-all {
    color: #6b46ff;
    text-decoration: none;
    font-weight: 600;
    font-size: 0.875rem;
    display: flex;
    align-items: center;
    margin-top: 1.5rem;
}

.see-all::after {
    content: "▼";
    font-size: 0.75rem;
    margin-left: 0.5rem;
}
</style>

<section class="pricing-section">
    <div class="pricing-container">
        <!-- Plan Básico -->
        <div class="pricing-card">
            <h3 class="plan-name">Plan Básico</h3>
            <p class="plan-description">Ideal para comenzar tu preparación.</p>
            <div class="price-tag">
                <span class="original-price">$300 pesos</span>
                <span class="discount-badge">AHORRA 30%</span>
            </div>
            <div class="price">
                $ 210.00<span class="price-period">/mes</span>
            </div>
            <p class="term-info">Acceso por 3 meses</p>
            <button class="choose-button secondary">Elegir plan</button>
            <ul class="features-list">
                <li class="feature-item">Acceso a videoconferencias grabadas</li>
                <li class="feature-item">Material de estudio digital</li>
                <li class="feature-item">10 simulacros de examen</li>
                <li class="feature-item">Foro de consultas</li>
                <li class="feature-item disabled">Asesoría personalizada</li>
            </ul>
            <a href="#" class="see-all">Ver todos los beneficios</a>
        </div>

        <!-- Plan Premium -->
        <div class="pricing-card popular">
            <div class="popular-badge">MÁS POPULAR</div>
            <h3 class="plan-name">Plan Premium</h3>
            <p class="plan-description">La preparación completa que necesitas.</p>
            <div class="price-tag">
                <span class="original-price">$500 pesos</span>
                <span class="discount-badge">AHORRA 20%</span>
            </div>
            <div class="price">
                $400.00<span class="price-period">/mes</span>
            </div>
            <p class="term-info">Acceso por 6 meses</p>
            <button class="choose-button primary">Elegir plan</button>
            <ul class="features-list">
                <li class="feature-item">Acceso a videoconferencias grabadas</li>
                <li class="feature-item">Material de estudio digital y físico</li>
                <li class="feature-item">20 simulacros de examen</li>
                <li class="feature-item">Asesoría grupal</li>
                <li class="feature-item">Garantía de satisfacción</li>
            </ul>
            <a href="#" class="see-all">Ver todos los beneficios</a>
        </div>

        <!-- Plan Elite -->
        <div class="pricing-card">
            <h3 class="plan-name">Plan Elite</h3>
            <p class="plan-description">Máxima preparación y atención personalizada.</p>
            <div class="price-tag">
                <span class="original-price">$800 pesos</span>
                <span class="discount-badge">AHORRA 20%</span>
            </div>
            <div class="price">
                $740.00<span class="price-period">/mes</span>
            </div>
            <p class="term-info">Acceso por 12 meses</p>
            <button class="choose-button secondary">Elegir plan</button>
            <ul class="features-list">
                <li class="feature-item">Todo lo incluido en Premium</li>
                <li class="feature-item">Tutoría personal semanal</li>
                <li class="feature-item">Simulacros ilimitados</li>
                <li class="feature-item">Orientación vocacional</li>
                <li class="feature-item">Preparación para entrevista</li>
            </ul>
            <a href="#" class="see-all">Ver todos los beneficios</a>
        </div>
    </div>
</section>
            <script>
                document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                    anchor.addEventListener('click', function (e) {
                        e.preventDefault(); // Prevenir el comportamiento predeterminado
                        const target = document.querySelector(this.getAttribute('href'));
                        if (target) {
                            target.scrollIntoView({behavior: 'smooth', block: 'start'});
                        }
                    });
                });
            </script>

            <section class="contenedor sobre-nosotros" >
                <h2 class="titulo">Tu Nueva Amiga "Savy"</h2>
                <div class="contenedor-sobre-nosotros">
                    <img src="imagenes/saltando.png" alt="" class="imagen-about-us">
                    <div class="contenido-textos">
                        <p>Savy es nuestra mascota dedicada, diseñada para acompañarte en tu trayectoria educativa. Su misión
                            es ofrecerte apoyo y orientación en tus decisiones académicas, asegurando que encuentres el camino
                            adecuado para alcanzar tus metas. Con su sabiduría y amabilidad, Savy se convertirá en tu aliado
                            indispensable, brindándote información y recursos útiles que facilitarán tu experiencia escolar.
                        </p>
                    </div>
                </div>
            </section>


        </main>
        <footer>
            <div class="contenedor-footer">
                <div class="content-foo">
                    <h4>Acerca de:</h4>
                    <p><a href="http://firmboost.gerdoc.com/" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit;">Empresa</a></p>
                    <p><a href="http://firmboost.gerdoc.com/#nosotros" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit;">Equipo</a></p>
                </div>
                <div class="content-foo">
                    <h4>Recursos</h4>
                    <p>Examenes</p>
                    <p>FODA</p>
                </div>
                <div class="content-foo">
                    <h4>Contacto</h4>
                    <p>lsa@gmail.com</p>
                    <p>8296312</p>                
                </div>
            </div>
            <h2 class="titulo-final">&copy; L.S.A. | Muchas Gracias!</h2>
        </footer>
        <script>
            function toggleTheme() {
                const body = document.body;
                const button = document.querySelector('.theme-switch');

                if (body.classList.contains('dark-mode')) {
                    body.classList.remove('dark-mode');
                    button.textContent = '🌙';
                } else {
                    body.classList.add('dark-mode');
                    button.textContent = '☀️';
                }

                localStorage.setItem('darkMode', body.classList.contains('dark-mode'));
            }

            document.addEventListener('DOMContentLoaded', () => {
                const darkModeEnabled = localStorage.getItem('darkMode') === 'true';
                if (darkModeEnabled) {
                    document.body.classList.add('dark-mode');
                    document.querySelector('.theme-switch').textContent = '☀️';
                }
            });
        </script>
    </body>
</html>