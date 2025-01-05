<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">

    
        <title>LSA - Learn. Study. Achieve</title>
        <link rel="icon" type="image/png" href="../imagenes/Savy.png">    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        body,
        input {
            font-family: 'Montserrat', sans-serif;
        }

        .container {
            position: relative;
            width: 100%;
            background-color: #0d1a26;
            min-height: 100vh;
            overflow: hidden;
        }

        .forms-container {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }

        .signin-signup {
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            left: 75%;
            width: 50%;
            transition: 1s 0.7s ease-in-out;
            display: grid;
            grid-template-columns: 1fr;
            z-index: 5;
        }

        form {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0rem 5rem;
            transition: all 0.2s 0.7s;
            overflow: hidden;
            grid-column: 1 / 2;
            grid-row: 1 / 2;
        }

        form.sign-up-form {
            opacity: 0;
            z-index: 1;
        }

        form.sign-in-form {
            z-index: 2;
        }

        .title {
            font-size: 2.6rem;
            color: #fff;
            margin-bottom: 10px;
        }

        .input-field {
            max-width: 380px;
            width: 100%;
            background-color: #f0f0f0;
            margin: 10px 0;
            height: 55px;
            border-radius: 55px;
            display: grid;
            grid-template-columns: 15% 85%;
            padding: 0 0.4rem;
            position: relative;
        }

        .input-field i {
            text-align: center;
            line-height: 55px;
            color: #acacac;
            transition: 0.5s;
            font-size: 1.6rem;
        }

        .input-field input {
            background: none;
            outline: none;
            border: none;
            line-height: 1;
            font-weight: 600;
            font-size: 1.6rem;
            color: #333;
        }

        .input-field input::placeholder {
            color: #aaa;
            font-weight: 500;
        }

        .btn {
            width: 180px;
            height: 55px;
            background-color: #4184b6;
            border: none;
            outline: none;
            border-radius: 49px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 550;
            font-size: 20px;
            margin: 10px 0;
            cursor: pointer;
            transition: 0.5s;
        }

      .btn:hover {
    background-color: #2c6591; /* Color azul más oscuro */
}
        .panels-container {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .container:before {
            content: "";
            position: absolute;
            height: 2000px;
            width: 2000px;
            top: -10%;
            right: 48%;
            transform: translateY(-50%);
    background-image: linear-gradient(-45deg, #5a8ab4 0%, #3b6986 100%); /* Azul degradado */
            transition: 1.8s ease-in-out;
            border-radius: 50%;
            z-index: 6;
        }

        .image {
            transition: transform 1.1s ease-in-out;
            transition-delay: 0.4s;
        }

        .panel {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: center;
            z-index: 6;
        }

        .left-panel {
            pointer-events: all;
            padding: 3rem 17% 2rem 12%;
        }

        .right-panel {
            pointer-events: none;
            padding: 3rem 12% 2rem 17%;
        }

        .panel .content {
            color: #fff;
            transition: transform 0.9s ease-in-out;
            transition-delay: 0.6s;
        }

        .panel h3 {
            font-weight: 600;
            line-height: 1;
            font-size: 2.6rem;
        }

        .panel p {
            font-size: 1.4rem;
            padding: 0.7rem 0;
        }

        .btn.transparent {
            margin: 0;
            background: none;
            border: 2px solid #fff;
            width: 170px;
            height: 60px;
            font-weight: 600;
            font-size: 17px;
        }

        .right-panel .image,
        .right-panel .content {
            transform: translateX(800px);
        }

        /* ANIMATION */

        .container.sign-up-mode:before {
            transform: translate(100%, -50%);
            right: 52%;
        }

        .container.sign-up-mode .left-panel .image,
        .container.sign-up-mode .left-panel .content {
            transform: translateX(-800px);
        }

        .container.sign-up-mode .signin-signup {
            left: 25%;
        }

        .container.sign-up-mode form.sign-up-form {
            opacity: 1;
            z-index: 2;
        }

        .container.sign-up-mode form.sign-in-form {
            opacity: 0;
            z-index: 1;
        }

        .container.sign-up-mode .right-panel .image,
        .container.sign-up-mode .right-panel .content {
            transform: translateX(0%);
        }

        .container.sign-up-mode .left-panel {
            pointer-events: none;
        }

        .container.sign-up-mode .right-panel {
            pointer-events: all;
        }

        @media (max-width: 870px) {
            .container {
                min-height: 800px;
                height: 100vh;
            }
            .signin-signup {
                width: 100%;
                top: 95%;
                transform: translate(-50%, -100%);
                transition: 1s 0.8s ease-in-out;
            }

            .signin-signup,
            .container.sign-up-mode .signin-signup {
                left: 50%;
            }

            .panels-container {
                grid-template-columns: 1fr;
                grid-template-rows: 1fr 2fr 1fr;
            }

            .panel {
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                padding: 2.5rem 8%;
                grid-column: 1 / 2;
            }

            .right-panel {
                grid-row: 3 / 4;
            }

            .left-panel {
                grid-row: 1 / 2;
            }

            .image {
                width: 200px;
                transition: transform 0.9s ease-in-out;
                transition-delay: 0.6s;
            }

            .panel .content {
                padding-right: 15%;
                transition: transform 0.9s ease-in-out;
                transition-delay: 0.8s;
            }

            .panel h3 {
                font-size: 1.2rem;
            }

            .panel p {
                font-size: 0.7rem;
                padding: 0.5rem 0;
            }

            .btn.transparent {
                width: 110px;
                height: 35px;
                font-size: 0.7rem;
            }

            .container:before {
                width: 1500px;
                height: 1500px;
                transform: translateX(-50%);
                left: 30%;
                bottom: 68%;
                right: initial;
                top: initial;
                transition: 2s ease-in-out;
            }

            .container.sign-up-mode:before {
                transform: translate(-50%, 100%);
                bottom: 32%;
                right: initial;
            }

            .container.sign-up-mode .left-panel .image,
            .container.sign-up-mode .left-panel .content {
                transform: translateY(-300px);
            }

            .container.sign-up-mode .right-panel .image,
            .container.sign-up-mode .right-panel .content {
                transform: translateY(0px);
            }

            .right-panel .image,
            .right-panel .content {
                transform: translateY(300px);
            }

            .container.sign-up-mode .signin-signup {
                top: 5%;
                transform: translate(-50%, 0);
            }
        }

        @media (max-width: 570px) {
            form {
                padding: 0 1.5rem;
            }

            .image {
                display: none;
            }
            .panel .content {
                padding: 0.5rem 1rem;
            }
            .container {
                padding: 1.5rem;
            }

            .container:before {
                bottom: 72%;
                left: 50%;
            }

            .container.sign-up-mode:before {
                bottom: 28%;
                left: 50%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="enviar.php" method="post" class="sign-in-form">
                    <h2 class="title">Ingresa con una cuenta</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Usuario" minlength="2" maxlength="8" required  />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Contraseña"  minlength="8" maxlength="16"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="La contraseña debe de tener entre 8 y 16 caracteres, 
                               una mayuscula, una minuscula y un número"
                               required />
                    </div>
                    <input type="submit" name="action" value="login" class="btn solid" />
                </form>
                <form action="enviar.php" method="post" class="sign-up-form">
                    <h2 class="title">Regístrate</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Usuario" minlength="2" maxlength="8" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" minlength="6" maxlength="120" 
                               pattern="[a-z0-9._%+\-]+@(gmail\.com|yahoo\.com|outlook\.com|hotmail\.com)" 
                               title="Por favor, ingresa un correo electrónico válido. Ejemplo: usuario@gmail.com" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Contraseña" 
                              minlength="8" maxlength="16"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="La contraseña debe de tener entre 8 y 16 caracteres, 
                               una mayuscula, una minuscula y un número"
                               required/>
                    </div>
                    <input type="submit" name="action" value="register" class="btn" />
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Eres nuevo aquí?</h3>
                    <p>Ven y únete con nosotros!</p>
                    <button class="btn transparent" id="sign-up-btn">Registrate</button>
                </div>
                <img src="../imagenes/saltando.png" width="75%" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Ya eres uno de nosotros?</h3>
                    <p>Inicia sesión aquí.</p>
                    <button class="btn transparent" id="sign-in-btn">Ingresa</button>
                </div>
                <img src="../imagenes/saby2-removebg-preview.png" width="75%" class="image" alt="" />
            </div>
        </div>
    </div>

    <script>const sign_in_btn = document.querySelector("#sign-in-btn");
const sign_up_btn = document.querySelector("#sign-up-btn");
const container = document.querySelector(".container");

sign_up_btn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

sign_in_btn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});
</script>
</body>
</html>
