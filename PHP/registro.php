<?php
    $conn = mysqli_connect("localhost", "root", "12345678", "test");


    /* if(!$conn){
        die("No hay conexion: ".mysqli_connect_error());
    }else{
        echo "todo bien";
    } */

    if(isset($_POST["register"])){
        if(strlen($_POST['usuario'])>= 1 && strlen($_POST['password']) >= 1){
            $usuario = trim($_POST['usuario']);
            $password  = trim($_POST['password']);

            $consulta= "INSERT INTO login(usuario, password) VALUES ('$usuario','$password')";
            $resultado = mysqli_query($conn, $consulta);
            if($resultado){
                
                header("Location: ../index.php");
            }else{
                ?>  
                    <h3>Registro incorrecto!!</h3>
                <?php
            }
        }else{
            ?>  
                <h3>Por favor complete los campos</h3>
            <?php
        }
    }
?>