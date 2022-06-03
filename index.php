<?php
    echo '<link href="./CSS/index.css" type:"text/css" rel="stylesheet" > ';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="../img/icon.ico">
</head>
<body>
    
<div class="page">
    <video src="https://carontestudio.com/img/f4.mp4" autoplay="true" muted="true" loop="true"></video>
    <div class="container">

        <!-- Loader -->
        <section class="loader">
            <div></div>
            <div></div>
            <div></div>
        </section>

        <div class="boton" id="login">
            <button onclick="abrirModal()">
                Tocar!!
            </button>
        </div>

        <!-- Modal -->
        <section class="modal hidden">
            <div class="modal-content">
                <!-- <form action="./PHP/login.php"> -->
                    <img class="modal-content__close" src="macos-close.png" alt="ícono de cerrar">
                    <label for="User" >Usurario</label>
                    <input type="text" name="usuario" placeholder="Escribe aquí" id="user"required />
                    <label for="Password" >Contraseña</label>
                    <input type="password" name="password" placeholder="Escribe aquí" id="password" required/>
                    <button class="modal-content__button"  value="Ingresar" onclick="ingresar()">Ingresar!</button>
                   <!--  <a href="./PHP/Registrar.php">Registrarse</a> -->
                <!-- </form> -->
            </div>
        </section>
    </div>
</div>

    <script src="./JAVASCRIPT/script.js"></script>
</body>
</html>