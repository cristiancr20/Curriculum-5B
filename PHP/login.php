<?php
   echo ' <link href="../CSS/login.css"  rel="stylesheet" > ';

session_start();

$conn = mysqli_connect("localhost", "root", "12345678", "test");

if(!$conn){
    die("No hay conexion: ".mysqli_connect_error());
}

$nombre = $_REQUEST['usuario'];
$pass = $_REQUEST['password'];


$query = mysqli_query($conn, "SELECT * FROM login WHERE usuario = '".$nombre."' AND password = '".$pass."'");
$nr = mysqli_num_rows ($query);

if($nr == 1){
    header("Location: ../PHP/Curriculum.php");
}else if ($nr == 0) {
    ?> 
    <div class="info">
        <h1>No ingreso</h1>
        <h1>Usuario y contraseña no valiados</h1>
        <a href="../index.php" >Volver</a>
    </div>
    <?php
   
}
   
?>