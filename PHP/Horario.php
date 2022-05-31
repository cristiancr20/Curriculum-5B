<?php
        echo '<link href="../CSS/Horario.css" type:"text/css" rel="stylesheet" > ';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horario</title>
    
</head>
<body>
    <div class="page">

        <div class="navi">
            <div class="navi-title">
                <a href="Curriculum.php" class="nav-titulo">
                    <div class="titu">Plataformas</div>
                </a>
            </div>
            <div class="nav-options">
                <ul>
                    <a href="Curriculum.php">
                        <li>Curriculum</li>
                    </a>
                    <a href="video.php">
                        <li>Video</li>
                    </a>
                    <a href="tabla.php">
                        <li>Tabla</li>
                    </a>
                    <a href="horario.php">
                        <li>Horario</li>
                    </a>
                    <a href="slider.php">
                        <li>Slider</li>
                    </a>
                    <a href="index.php">
                        <li>Salir</li>
                    </a>
                </ul>
            </div>
        </div>

        <h1 class="titulo">Horario</h1>
        
        <div class="boton">
            <button id ="boton" class="waves-effect waves-light btn">
                Json Horario
            </button>
        </div>

            <table >
                <thead>
                    <tr>
                        <th>Lunes</th>
                        <th>Martes</th>
                        <th>Miercoles</th>
                        <th>Jueves</th>
                        <th>Viernes</th>
                    </tr>
                </thead>
                
                <tbody id="res">
                
                </tbody>
                
            </table>
    </div>

    <script src="../JAVASCRIPT/Ajax.js"></script>
</body>
</html>