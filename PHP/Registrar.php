<?php
    echo '<link href="../CSS/Registrar.css" type:"text/css" rel="stylesheet" > ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="page">
        <form class="registrar" method="post">
            <label for="User" >Usurario</label>
            <input type="text" name="usuario" placeholder="Escribe aquí" id="user"required />
            <label for="Password" >Contraseña</label>
            <input type="password" name="password" placeholder="Escribe aquí" id="password" required/>
            <button class="modal-content__button"  name="register" value="Registrar" >Registrar!</button>
        </form>

        <?php
            include("registro.php");
        ?>
    </div>

    
</body>
</html>